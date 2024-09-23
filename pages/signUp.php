<?php require_once '../templates/header.php';?>

<div class="hero-scene text-center text-white ">
        <div class="hero-scene-content" >
            <h1>Inscription</h1>
        </div>
</div>
<div class="container signUp ">
    <form >
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" placeholder="Votre nom">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" placeholder="Votre prénom">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="test@test.fr">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" >
        </div>
        <div class="mb-3">
            <label for="passwordValidate" class="form-label">validation mot de passe</label>
            <input type="password" class="form-control" id="passwordValidate" >
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Inscription</button>
        </div>
        <div class="text-center pt-3">
            <a href="/pages/logIn.php">Vous avez déjà un compte ? Connectez-vous par ici !</a>
        </div>
    </form>
</div>
<?php require_once '../templates/footer.php';?>
