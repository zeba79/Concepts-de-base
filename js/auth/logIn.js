// alert("Hello moto")
// Ici on sélectionne les id présent dans le fichier logIn.php
const mailInput = document.getElementById("inputEmail");
const passwordInput = document.getElementById("inputPassword");
const signBtn = document.getElementById("signInBtn");


signBtn.addEventListener("click", checkedBtn);

function checkedBtn(){

    if(mailInput.value == "zeze@zeze.fr" && passwordInput.value == "1234"){
        alert("Bonjour et bienvenue chez nous");
        window.location.replace("ndex.php")
    } else {
        mailInput.classList.add("is-invalid");
        passwordInput.classList.add("is-invalid");
    }
}