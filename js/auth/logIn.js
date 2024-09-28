// alert("Hello moto")
// Ici on sélectionne les id présent dans le fichier logIn.php
const mailInput = document.getElementById("inputEmail");
const passwordInput = document.getElementById("inputPassword");
const signBtn = document.getElementById("signInBtn");


signBtn.addEventListener("click", checkeCredentials);

function checkeCredentials(){

    if(mailInput.value == "zeze@zeze.fr" && passwordInput.value == "1234"){
        // on souhaite la bienvenue à l'user
        alert("Bonjour et bienvenue chez nous");
        // Et on le dirige sur la page de connexion
        window.location.replace("/pages/galerie.php")
    } else {
        mailInput.classList.add("is-invalid");
        passwordInput.classList.add("is-invalid");
    }
}