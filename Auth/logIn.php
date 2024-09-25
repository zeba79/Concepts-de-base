<?php require_once '../templates/header.php';?>

<div class="hero-scene text-center text-white ">
        <div class="hero-scene-content" >
            <h1>Connexion</h1>
        </div>
</div>
<div class="container mb-5">
    <form>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="test@test.fr">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" >
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Connexion</button>
        </div>
        <div class="text-center pt-3">
            <a href="/Auth/signUp.php">Vous n'avez pas encore de compte ? cliquez ici !</a>
        </div>
    </form>
</div>
<?php require_once '../templates/footer.php';?>
