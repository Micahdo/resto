let user_email = document.getElementById('user_email');
let user_password = document.getElementById('user_password');
let email = document.getElementById('email');
let password = document.getElementById('password');
let username = document.getElementById('username');
let convives = document.getElementById('convives');
let emailRegex = /^[0-9a-zA-Z_!#$%&'*+\/=?`{|}~^.-]+@[0-9a-zA-Z]+\.[0-9a-zA-Z]+$/;

$(document).ready(function(){
    //Validation de la connexion au compte
    $('#btn-connect').on('click', function(e){
        if (user_email.value.trim()==''){
            e.preventDefault();
            alert("Veuillez entrer une adresse email");
        } else if (emailRegex.test(user_email.value) == false) {
            e.preventDefault();
            alert("Veuillez entrer une adresse email valide");
        } else if (user_password.value.trim()==''){
            e.preventDefault();
            alert("Veuillez entrer un mot de passe");
        };
    });
    //Validation du formulaire de création de compte
    $('#btn-creation').on('click', function(e){
        if (email.value.trim()==''){
            e.preventDefault();
            alert("Veuillez entrer une adresse email");
        } else if (emailRegex.test(email.value) == false) {
            e.preventDefault();
            alert("Veuillez entrer une adresse email valide");
        } else if (password.value.trim()==''){
            e.preventDefault();
            alert("Veuillez entrer un mot de passe");
        } else if (username.value.trim()==''){
            e.preventDefault();
            alert("Veuillez entrer un identifiant");
        };
    });
    //Envoié des données à user_new_account.php
    $('#btn-creation').on('click', function(e){
        if (email.value.trim()!='' && password.value.trim()!='' && username.value.trim()!='' && emailRegex.test(email.value)!=false){
            email = $('#email').val();
            password = $('#password').val();
            username = $('#username').val();
            seats = $('#seats').val();
            if ($.trim(email) != '') {
                $.post('php/user_new_account.php', {email: email, password: password, username: username, seats: seats}, function(data){
                    alert(data);
                });        
            };
            closeModal();
            e.preventDefault();
        };
    }); 
});