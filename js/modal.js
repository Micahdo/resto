const modal = document.querySelector(".modal");
const openModalBtn = document.querySelector(".btn-open");
const closeModalBtn = document.querySelector(".btn-close");
/*Ouverture de la modale*/
const openModal = function () {
    modal.classList.remove("hidden");
};
/*Fermeture de la modale*/
const closeModal = function () {
    $('#email').val('');
    $('#password').val('');
    $('#username').val('');
    modal.classList.add("hidden");
};
/*Ouvre la modale sur un clic sur le bouton Créer un compte*/
openModalBtn.addEventListener("click", openModal);
/*Ferme la modale sur un clic sur le bouton X et vide les input*/
closeModalBtn.addEventListener("click", closeModal);