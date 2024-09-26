<?php require_once "../templates/header.php"?>

<div class="hero-scene text-center text-white ">
        <div class="hero-scene-content" >
            <h1>Réservez-vos menus</h1>
        </div>
</div>

<div class="container reserver">
<form >
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input disabled type="text" class="form-control" id="nom" placeholder="DOE">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input disabled type="text" class="form-control" id="prenom" placeholder="John">
        </div>
        <div class="mb-3">
            <label for="allergies" class="form-label">Allergies</label>
            <input type="text" class="form-control" id="allergies" placeholder="Vos allergies">
        </div>
        <div class="mb-3">
            <label for="NbreConvives" class="form-label">Nombres de personnes</label>
            <input type="number" class="form-control" min="1" id="NbreConvives" placeholder="Nbre de personnes">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date">
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="serviceradio" id="midiradio">
                <label class="form-check-label" for="midoradio">
                    Midi
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="serviceradio" id="soirradio" checked>
                <label class="form-check-label" for="soirradio">
                    Soir
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label for="selectHour">Heure</label>
        <select class="form-select" id="selectHour">
            <option selected>Sélectionnez l'heure</option>
            <option >19:30</option>
            <option >20:00</option>
            <option >20:15</option>
            <option >20:30</option>
            <option >20:45</option>
            <option >21:00</option>
            <option >21:15</option>
            <option >21:30</option>
            <option >21:45</option>
        </select>
        </div>
        <div class="text-center pt-3">
            <button type="button" class="btn btn-primary">Réserver</button>
            <button type="button" class="btn btn-danger">Annuler</button>
        </div>
    </form>
</div>

<?php require_once "../templates/footer.php"?>