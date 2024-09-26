// Implémenter le JS de ma page ici

const inputNom = document.getElementById("inputNom");
const inputPrenom = document.getElementById("inputPrenom");
const inputEmail = document.getElementById("inputEmail");
const inputPassword = document.getElementById("inputPassword");
const inputPasswordValidate = document.getElementById("inputPasswordValidate");
const btnValidationInscription = document.getElementById("btn-validation-inscription");

inputNom.addEventListener("keyup", validateForm);
inputPrenom.addEventListener("keyup", validateForm);
inputEmail.addEventListener("keyup", validateForm);
inputPassword.addEventListener("keyup", validateForm);
inputPasswordValidate.addEventListener("keyup", validateForm);

function validateForm(){
    const nomOk = validateRequired(inputNom);
    const prenomOk = validateRequired(inputPrenom);
    const emailOk = validateMail(inputEmail);
    
    if(nomOk && prenomOk && emailOk){
        btnValidationInscription.disabled = false;
    } else{
        btnValidationInscription.disabled = true;
    }

}

function validateRequired(input){
    if(input.value != ''){
        input.classList.add("is-valid");
        input.classList.remove("is-invalid")
        return true;
    } else{
        input.classList.remove("is-valid");
        input.classList.add("is-invalid")
        return false;
    }
}

function validateMail(input){
    // définir mon regex
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const mailUser = input.value;

    if(mailUser.match(emailRegex)){
        input.classList.add("is-valid");
        input.classList.remove("is-invalid")
        return true;
    } else{
        input.classList.remove("is-valid");
        input.classList.add("is-invalid")
        return false;
    }


}