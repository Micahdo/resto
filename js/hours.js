
$(document).ready(function(){

    /*Affiche les horaires en fonction du jour sélectionné*/
    $('#day').change(function(){
        let day = $('#day option:selected'); 
        $.post('php/hours_admin.php', {day: day.text()}, function(data){
            $('#hoursResult').html(data);
        });
    }); 


    $('#btn-hours').on('click', function(e){
        let daySelected = $('#day option:selected');
        if(daySelected.text() == 'Sélectionner un jour'){ //Empêche l'envoi du formulaire si un jour n'est pas choisi dans la liste
            e.preventDefault();
            alert('Merci de sélectionner un jour dans la liste');
        } else {
            e.preventDefault(); //Envoie les données du jour sélectionné pour traitement par hours_admin_transfer.php
            let day = $('#day').val();
            let hour1 = $('#hour1').val();
            let hour2 = $('#hour2').val();
            let hour3 = $('#hour3').val();
            let hour4 = $('#hour4').val();
            $.post('php/hours_admin_transfer.php', {day: day, hour1: hour1, hour2: hour2, hour3: hour3, hour4: hour4}, function(){
                alert('Changement d\'horaires effectué');
            }); 
        };
    });
});