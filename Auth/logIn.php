<?php require_once '../templates/header.php';?>

<div class="hero-scene text-center text-white ">
        <div class="hero-scene-content" >
            <h1>Connexion</h1>
        </div>
</div>
<div class="container mb-5">
    <form>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="test@test.fr">
            <div class="invalid-feedback">
                Le mail ou le mot de passe incorrect !
            </div>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword" >
            <div class="invalid-feedback">
                Le mail ou le mot de passe incorrect !
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-primary" id="signInBtn">Connexion</button>
        </div>
        <div class="text-center pt-3">
            <a href="/Auth/signUp.php">Vous n'avez pas encore de compte ? cliquez ici !</a>
        </div>
    </form>
</div>
<script src="/js/auth/logIn.js"></script>
<?php require_once '../templates/footer.php';?>
