
$(document).ready(function(){

    /*$('#btn-booking').on('click', function(e){
        e.preventDefault();
        let day = $('#booking-date').val();
        if(day == ''){
            alert('Veuillez entrer une date')
        } else {
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
            //alert(weekDay);
            $.post('php/booking.php', {weekDay: weekDay}, function(data){
                $('#result').html(data);
                //alert(data);
            });
        };
    });*/

    
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
    });
});

function hourClick() {
    let selectedHour = event.target.value;
    document.getElementById('hourResult').innerHTML = selectedHour;
};
