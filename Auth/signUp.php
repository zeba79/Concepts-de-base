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
        </div>
        <div class="mb-3">
            <label for="inputPrenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="inputPrenom" placeholder="Votre prénom">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="test@test.fr">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword" >
        </div>
        <div class="mb-3">
            <label for="inputPasswordValidate" class="form-label">validation mot de passe</label>
            <input type="password" class="form-control" id="inputPasswordValidate" >
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
