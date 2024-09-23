<?php require_once '../templates/header.php';?>

<div class="hero-scene text-center text-white ">
        <div class="hero-scene-content" >
            <h1>Changer mon mot de passe</h1>
        </div>
</div>
<div class="container signUp ">
    <form >
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" >
        </div>
        <div class="mb-3">
            <label for="passwordValidate" class="form-label">validation mot de passe</label>
            <input type="password" class="form-control" id="passwordValidate" >
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Modifier mon mote de passe</button>
        </div>
        <div class="text-center pt-3">
            <a href="/pages/logIn.php">Connectez-vous par ici sans changer votre mot de passe!</a>
        </div>
    </form>
</div>
<?php require_once '../templates/footer.php';?>
