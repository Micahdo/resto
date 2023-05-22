$(document).ready(function(){    
    let emailRegex = /^[0-9a-zA-Z_!#$%&'*+\/=?`{|}~^.-]+@[0-9a-zA-Z]+\.[0-9a-zA-Z]+$/;
    let passwordRegex = /^.*(?=.{8,})(?=.*[a-zA-Z])(?=.*\d)(?=.*[!%&?@-_"]).*$/;
    let seatsRegex = /^\d+$/;
    let userRegex = /^[a-zA-Z0-9 -]+$/;
    //Validation de la connexion au compte
    $('#btn-connect').on('click', function(e){ //Si l'input email est vide
        if (user_email.value.trim()==''){
            e.preventDefault();
            alert("Veuillez entrer une adresse email");
        } else if (emailRegex.test(user_email.value)==false) { //Si l'input email n'est pas une adresse email valide
            e.preventDefault();
            alert("Veuillez entrer une adresse email valide");
        } else if (user_password.value.trim()==''){ //Si l'input password est vide
            e.preventDefault();
            alert("Veuillez entrer un mot de passe");
        } else if (passwordRegex.test(user_password.value)==false) { //Si l'input password contient des caractères non autorisés ou un nombre de caractères inférieur à 8
            e.preventDefault();
            alert("Veuillez entrer un mot de passe valide (il doit comporter au moins 8 caractères, une majuscule, un chiffre et un caractère spécial autorisé (!%&?@-_))");
        };
    });    
    //Validation du formulaire de création de compte
    $('#btn-creation').on('click', function(e){
        if (email.value.trim()==''){ //Si l'input email est vide
            e.preventDefault();
            alert("Veuillez entrer une adresse email");
        } else if (emailRegex.test(email.value)==false) { //Si l'input email n'est pas une adresse email valide
            e.preventDefault();
            alert("Veuillez entrer une adresse email valide (exemple : email@exemple.com)");
        } else if (password.value.trim()==''){ //Si l'input password est vide
            e.preventDefault();
            alert("Veuillez entrer un mot de passe");
        } else if (passwordRegex.test(password.value)==false) { //Si l'input password contient des caractères non autorisés ou un nombre de caractères inférieur à 8
            e.preventDefault();
            alert("Veuillez entrer un mot de passe valide (il doit comporter au moins 8 caractères, une majuscule, un chiffre et un caractère spécial autorisé (!%&?@-_))");
        } else if (username.value.trim()==''){ //Si l'input username est vide
            e.preventDefault();
            alert("Veuillez entrer un identifiant");
        } else if (userRegex.test(username.value)==false){ //Si l'input username contient des caractères non autorisés
            e.preventDefault();
            alert("Veuillez entrer un identifiant valide (il peut contenir des majuscules, des minuscules et des nombres)");
        } else if (seatsRegex.test(seats.value)==false){ //Si l'input seats n'est pas un nombre
            e.preventDefault();
            alert("Veuillez entrer un nombre");
        } else {            
            let email = $('#email').val();
            let password = $('#password').val();
            let username = $('#username').val();
            let seats = $('#seats').val();
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
            if ($.trim(email) != '' && $.trim(password) != '' && $.trim(username) != '' && $.trim(seats) != '') {
                $.post('php/user_new_account.php', {
                    email: email, 
                    password: password, 
                    username: username, 
                    seats: seats, 
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
            closeModal();
            e.preventDefault();
        }
    });
});