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
    let seatsRegex = /^\d+$/;
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
        } else if (seatsRegex.test($('#booking-seats').val()) == false){
            e.preventDefault();
            alert("Veuillez entrer un nombre");
        } else if ($('#booking-seats').val() < 1 || $('#booking-seats').val() > 12){ 
            e.preventDefault();
            alert("Veuillez entrer un nombre compris entre 1 et 12");
        } else {
            e.preventDefault();
            let date = $('#booking-date').val();
            let hour = $('#hourResult').text();
            let email = $('#booking-email').val();
            let username = $('#booking-name').val();
            let seats = $('#booking-seats').val();
            let gluten = $('#gluten').prop('checked') ? 1 : 0;
            let crustaces = $('#crustaces').prop('checked') ? 1 : 0;
            let oeufs = $('#oeufs').prop('checked') ? 1 : 0;
            let poissons = $('#poissons').prop('checked') ? 1 : 0;
            let arachides = $('#arachides').prop('checked') ? 1 : 0;
            let soja = $('#soja').prop('checked') ? 1 : 0;
            let lait = $('#lait').prop('checked') ? 1 : 0;
            let coques = $('#coques').prop('checked') ? 1 : 0;
            let celeri = $('#celeri').prop('checked') ? 1 : 0;
            let moutarde = $('#moutarde').prop('checked') ? 1 : 0;
            let sesame = $('#sesame').prop('checked') ? 1 : 0;
            let sulfites = $('#sulfites').prop('checked') ? 1 : 0;
            let lupin = $('#lupin').prop('checked') ? 1 : 0;
            let mollusques = $('#mollusques').prop('checked') ? 1 : 0;
            $.post('php/booking_transfer.php', {
                date: date, 
                hour: hour,
                email: email, 
                username: username, 
                seats: seats, 
                weekDay: weekDay,
                gluten: gluten,
                crustaces: crustaces,
                oeufs: oeufs,
                poissons: poissons,
                arachides: arachides,
                soja: soja,
                lait: lait,
                coques: coques,
                celeri: celeri,
                moutarde: moutarde,
                sesame: sesame,
                sulfites: sulfites,
                lupin: lupin,
                mollusques: mollusques
            }, function(data){
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
        document.getElementById('dateResult').innerHTML = selectedDate;
        document.getElementById('hourResult').innerHTML = selectedHour;
};