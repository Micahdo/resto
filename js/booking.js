
$(document).ready(function(){
    //Affichage des horaires lors du choix de la date
    $('#booking-date').on('change', function(e){
        e.preventDefault();
        let day = $('#booking-date').val();
        if(day != ''){
            switch (new Date(day).getDay()) {
                case 1: weekDay = 'Lundi';
                break;
                case 2: weekDay = 'Mardi';
                break;
                case 3: weekDay = 'Mercredi';
                break;
                case 4: weekDay = 'Jeudi';
                break;
                case 5: weekDay = 'Vendredi';
                break;
                case 6: weekDay = 'Samedi';
                break;
                case 0: weekDay = 'Dimanche';
                break;
            };
            $.post('php/booking.php', {weekDay: weekDay}, function(data){
                $('#result').html(data);
            });
        };
        $('#hourResult').html('');
        $('#dateResult').html('');
    });

    //Validation du formulaire
    let emailRegex = /^[0-9a-zA-Z_!#$%&'*+\/=?`{|}~^.-]+@[0-9a-zA-Z]+\.[0-9a-zA-Z]+$/;
    $('#btn-booking').on('click', function(e){
        if ($('#booking-date').val() == '') {
            e.preventDefault();
            alert('Veuillez choisir une date');
        } else if ($('#booking-email').val() == '') {
            e.preventDefault();
            alert('Veuillez entrer une adresse email');
        } else if ($('#hourResult').text() == '') {
            e.preventDefault();
            alert('Veuillez choisir un horaire');
        } else if (emailRegex.test($('#booking-email').val()) == false) {
            e.preventDefault();
            alert("Veuillez entrer une adresse email valide");
        } else if ($('#booking-name').val() == '') {
            e.preventDefault();
            alert('Veuillez entrer un nom de réservation');
        } else {
            e.preventDefault();
            let date = $('#booking-date').val();
            let hour = $('#hourResult').text();
            let email = $('#booking-email').val();
            let username = $('#booking-name').val();
            let seats = $('#booking-seats').val();
            $.post('php/booking_transfer.php', {date: date, hour: hour, email: email, username: username, seats: seats, weekDay: weekDay}, function(data){
                alert(data);
            });
        };    
    });
});

//Affiche l'heure sélectionnée et la date sélectionnée quand on appuie sur un horaire
function hourClick() {
    const options = {weekday: "long", year: "numeric", month: "long", day: "numeric"};
    let selectedDate = new Date(document.getElementById('booking-date').value).toLocaleDateString('fr', options);
    let selectedHour = event.target.value;
    document.getElementById('dateResult').innerHTML = " " + selectedDate;
    document.getElementById('hourResult').innerHTML = selectedHour;
};