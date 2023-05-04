let user_email = document.getElementById('user_email');
let user_password = document.getElementById('user_password');
let username = document.getElementById('username');
let password = document.getElementById('password');
let convives = document.getElementById('convives');
let emailRegex = /^[0-9a-zA-Z_!#$%&'*+\/=?`{|}~^.-]+@[0-9a-zA-Z]{2,}.[0-9a-zA-Z]{2,3}$/;

$(document).ready(function(){
    //Validation de la connexion au compte
    $('#btn-connect').on('click', function(e){
        if (user_email.value.trim()==''){
            e.preventDefault();
            alert("Veuillez entrer une adresse email.");
        } else if (emailRegex.test(user_email.value) == false) {
            e.preventDefault();
            alert("Adresse email non valide.");
        } else if (user_password.value.trim()==''){
            e.preventDefault();
            alert("Veuillez entrer un mot de passe.");
        };
    });
    //Validation du formulaire de création de compte
    $('#btn-creation').on('click', function(e){
        if (username.value.trim()==''){
            e.preventDefault();
            alert("Veuillez entrer une adresse email.");
        } else if (emailRegex.test(username.value) == false) {
            e.preventDefault();
            alert("Adresse email non valide.");
        } else if (password.value.trim()==''){
            e.preventDefault();
            alert("Veuillez entrer un mot de passe.");
        };
    });
    //Vérification de l'existence d'une adresse email identique dans la base de données
    $('#btn-creation').on('click', function(e){
        if (username.value.trim()!='' && password.value.trim()!='' && emailRegex.test(username.value)!=false){
            const username = $('#username').val();
            const password = $('#password').val();
        
            if ($.trim(username) != '') {
                $.post('php/user_new_account.php', {username: username, password: password}, function(data){
                    alert(data);
                });        
            };
            closeModal();
            e.preventDefault();
        }
    }); 
})
