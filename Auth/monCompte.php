<?php require_once '../templates/header.php';?>

<div class="hero-scene text-center text-white ">
        <div class="hero-scene-content" >
            <h1>Mon Compte</h1>
        </div>
</div>
<div class="container ">
    <form class="signUp">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" placeholder="Votre nom">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" placeholder="Votre prénom">
        </div>
        <div class="mb-3">
             <label for="allergie" class="form-label">Allergies</label>
            <input type="text" class="form-control" id="allergie" placeholder="Vos allergies (fruits de mer, arachides, ...">
        </div>
        <div class="mb-3">
             <label for="NbConvive" class="form-label">Nombre de convives habituels</label>
            <input type="number" class="form-control" id="NbConvive" placeholder="Combien êtes-vous souvent ?">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Modifier mes informations</button>
            <button type="button" class="btn btn-danger">Supprimer mon compte</button>
        </div>
        <div class="text-center pt-3">
            <a href="/Auth/editPassword.php">Cliquez ici pour modifier votre mot de passe !</a>
        </div>
    </form>
</div>
<?php require_once '../templates/footer.php';?>
