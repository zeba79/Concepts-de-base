<?php require_once '../templates/header.php';?>

<div class="hero-scene text-center text-white ">
        <div class="hero-scene-content" >
            <h1>Inscription</h1>
        </div>
</div>
<div class="container signUp ">
    <form >
        <div class="mb-3">
            <label for="inputNom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="inputNom" placeholder="Votre nom">
            <div class="invalid-feedback">
                Le nom est obligatoire
            </div>
        </div>
        <div class="mb-3">
            <label for="inputPrenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="inputPrenom" placeholder="Votre prénom">
            <div class="invalid-feedback">
                Le prénom est obligatoire
            </div>
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" autocomplete="" id="inputEmail" placeholder="test@test.fr">
            <div class="invalid-feedback">
                Le mail est obligatoire
            </div>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="inputPassword" >
            <div class="invalid-feedback">
                Le mot de passe doit contenir au moins 8 caractères dont 1 lettre majuscule, 1 lettre minuscule, 1 chiffre et 1 caractère spécial
            </div>
            <div class="valid-feedback">
                Le mot de passe est correct !
            </div>
        </div>
        <div class="mb-3">
            <label for="inputPasswordValidate" class="form-label">Confirmer le mot de passe</label>
            <input type="password" class="form-control" id="inputPasswordValidate" >
            <div class="invalid-feedback">
                La confirmation du mot de passe est différente, veuillez saisir à nouveau
            </div>
            <div class="invalid-feedback">
                La confirmation du mot de passe est correct
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary" id="btn-validation-inscription">Inscription</button>
        </div>
        <div class="text-center pt-3">
            <a href="/Auth/logIn.php">Vous avez déjà un compte ? Connectez-vous par ici !</a>
        </div>
    </form>
</div>
<script src="/js/auth/signUp.js"></script>
<?php require_once '../templates/footer.php';?>
