// Implémenter le JS de ma page ici

const inputNom = document.getElementById("inputNom");
console.log(inputNom);
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

// Fonction validation du formulaire
function validateForm(){
    const nomOk = validateRequired(inputNom);
    const prenomOk = validateRequired(inputPrenom);
    const emailOk = validateEmail(inputEmail);
    const passwordOk = validatePassword(inputPassword);
    const passwordConfirmOk = validateConfirmationPassword(inputPassword, inputPasswordValidate);
    
    if(nomOk && prenomOk && emailOk && passwordOk && passwordConfirmOk ){
        btnValidationInscription.disabled = false;
    } else{
        btnValidationInscription.disabled = true;
    }

}
// Fonction validation requise du champ du formulaire
function validateRequired(input){
    if(input.value != ''){
        input.classList.add("is-valid");
        input.classList.remove("is-invalid")
        return true;
    } else{
        input.classList.add("is-invalid");
        input.classList.remove("is-valid");
        return false;
    }
}

// Fonction validation du champ Email
function validateEmail(input){
    // définir mon regex
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
    const mailUser = input.value;

    if(mailUser.match(emailRegex)){
        input.classList.add("is-valid");
        input.classList.remove("is-invalid")
        return true;
    } else{
        input.classList.add("is-invalid");
        input.classList.remove("is-valid");
        return false;
    }
}

// Fonction validation du champs Password
function validatePassword(input){
    // définir mon regex
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/;
    const passwordUser = input.value;

    if(passwordUser.match(passwordRegex)){
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
        return true;
    } else{
        input.classList.add("is-invalid");
        input.classList.remove("is-valid")
        return false;
    }
}

function validateConfirmationPassword(inputPwd, inputConfirmPwd){
if(inputPwd.value == inputConfirmPwd.value){
    inputConfirmPwd.classList.add("is-valid");
    inputConfirmPwd.classList.remove("is-invalid");
    return true;
} else {
    inputConfirmPwd.classList.add("is-invalid");
    inputConfirmPwd.classList.remove("is-valid");
    return false;
}
}

