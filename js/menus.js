$(document).ready(function(){

    //Bouton de création d'un nouveau menu
    $('#btn-menu-new').on('click', function(e){
        e.preventDefault();
        $('#menu-title').val('');
        $('#formule-title').val('');
        $('#formule-period').val('');
        $('#formule-desc').val('');
        $('#formule-price').val('');
        $.post('php/menu_new.php', function(data){
            $('#new-menu').html(data);
        });
    });

    //Bouton de modification d'un menu
    $('#btn-menu-update').click(function(e){
        e.preventDefault();
        let upFormule = $('#listMenus option:selected');
        $.post('php/menu_update.php', {formule: upFormule.text()}, function(data){
            $('#new-menu').html(data);
        });
    }); 

    //Bouton de suppression d'un menu
    $('#btn-menu-delete').on('click', function(e){
        e.preventDefault();
        let delFormule = $('#listMenus option:selected');
        $.post('php/menu_suppress.php', {formule: delFormule.text()}, function(data){
            alert(data);
        });
    });
});

function addMenu(){
    let menu = document.getElementById('menu-title').value;
    let formule = document.getElementById('formule-title').value;
    let period = document.getElementById('formule-period').value;
    let description = document.getElementById('formule-desc').value;
    let price = document.getElementById('formule-price').value;
    if (menu == '' || formule == '' || period == '' || description == '' || price == ''){
        alert('Veuillez remplir tous les champs');
    } else {
        $(document).ready(function(){
            $.post('php/menu_add.php', {menu: menu, formule: formule, period: period, description: description, price: price}, function(data){
                alert(data);
            });
        });
    };
};

