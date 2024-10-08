<?php
require_once '../templates/header.php';
require_once '../config/config.php'
?>

<div class="hero-scene text-center text-white ">
        <div class="hero-scene-content" >
            <h1>Galerie</h1>
        </div>
</div>

    <div class="container galerie">
        <div class="text-center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AjoutPhotoModal">Ajouter photos </button>
        </div>
        <div class=" row row-cols-2 row-cols-lg-3 ">
            <div class="col p-3">
                <div class="image-card text-dark ">
                    <img src="../img/food-908745_640.jpg" class="w-100 rounded" alt="">
                    <div class="action-images-bouton">
                        <button type="button" class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#EditionMenuModal">
                            <?=_ICONE_MODIFIER_;?>
                        </button>
                        <button type="button" class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#SupprimerMenuModal">
                            <?=_ICONE_SUPPRIMER_;?>
                        </button>
                    </div>
                    <?=_BOUTON_RESERVER_?>
                </div>
            </div>
            <div class="col p-3">
                <div class="image-card text-dark ">
                    <img src="../img/gastronomy-2853387_640.jpg" class="w-100 rounded" alt="">
                    <div class="action-images-bouton">
                        <button type="button" class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#EditionMenuModal" >
                            <?=_ICONE_MODIFIER_;?>
                        </button>
                        <button type="button" class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#SupprimerMenuModal" >
                        <?=_ICONE_SUPPRIMER_;?>
                        </button>
                    </div>
                    <?=_BOUTON_RESERVER_?>
                </div>
            </div>
            <div class="col p-3">
                <div class="image-card text-dark ">
                    <img src="../img/istockphoto-1445690717-1024x1024.jpg" class="w-100 rounded" alt="">
                    <div class="action-images-bouton">
                        <button type="button" class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#EditionMenuModal" >
                            <?=_ICONE_MODIFIER_;?>
                        </button>
                        <button type="button" class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#SupprimerMenuModal" >
                        <?=_ICONE_SUPPRIMER_;?>
                        </button>
                    </div>
                    <?=_BOUTON_RESERVER_?>
                </div>
            </div>
            <div class="col p-3">
                <div class="image-card text-dark ">
                    <img src="../img//salmon-sashimi-3637245_640.jpg" class="w-100 rounded" alt="">
                    <div class="action-images-bouton">
                        <button type="button" class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#EditionMenuModal" >
                            <?=_ICONE_MODIFIER_;?>
                        </button>
                        <button type="button" class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#SupprimerMenuModal" >
                            <?=_ICONE_SUPPRIMER_;?>
                        </button>
                    </div>
                    <?=_BOUTON_RESERVER_?>
                </div>
            </div>
            <div class="col p-3">
                <div class="image-card text-dark ">
                    <img src="../img/salmon-sashimi-3637245_640.jpg" class="w-100 rounded" alt="">
                    <div class="action-images-bouton">
                        <button type="button" class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#EditionMenuModal" >
                            <?=_ICONE_MODIFIER_;?>
                        </button>
                        <button type="button" class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#SupprimerMenuModal" >
                            <?=_ICONE_SUPPRIMER_;?>
                        </button>
                    </div>
                    <?=_BOUTON_RESERVER_;?>
                </div>
            </div>
            <div class="col p-3">
                <div class="image-card text-dark ">
                    <img src="../img/sashimi-1787626_640.jpg" class="w-100 rounded" alt="">
                    <div class="action-images-bouton">
                        <button type="button" class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#EditionMenuModal">
                        <?=_ICONE_MODIFIER_;?>
                        </button>
                        <button type="button" class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#SupprimerMenuModal" >
                        <?=_ICONE_SUPPRIMER_;?>
                        </button>
                    </div>
                    <?=_BOUTON_RESERVER_?>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="../reservations/reserver.php"><button class="btn btn-primary ">Réserver</button></a>
        </div>
    </div>

    <!-- Modal Ajout menu-->
<div class="modal fade" id="AjoutPhotoModal" tabindex="-1" aria-labelledby="AjoutPhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-4" id="AjoutPhotoModalLabel">Ajouter un menu</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="NamePhotoInput" class="form-label ">Nom du plat</label>
                  <input type="text" class="form-control" id="NamePhotoInput" placeholder="Lasagnes à la bolognese" name="Titre">
                </div>
                <div class="mb-3">
                  <label for="ImageInput" class="form-label">Image</label>
                  <input type="file" class="form-control" id="ImageInput"  name="Image">
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success">Ajouter</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>


   <!-- Modal modifier un menu-->
<div class="modal fade" id="EditionMenuModal" tabindex="-1" aria-labelledby="EditionMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-4" id="EditionMenuModalLabel">Modifier Menu</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="NamePhotoInput" class="form-label ">Nom </label>
                  <input type="text" class="form-control" id="NamePhotoInput" placeholder="Lasagnes à la bolognese" name="Titre">
                </div>
                <div class="mb-3">
                  <label for="ImageInput" class="form-label">Photo</label>
                  <input type="file" class="form-control" id="ImageInput"  name="Image">
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Enregistrer modifications</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal supprimer un menu-->
<div class="modal fade" id="SupprimerMenuModal" tabindex="-1" aria-labelledby="SupprimerMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-4" id="SupprimerMenuModalLabel">Supprimer Menu</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="NamePhotoInput" class="form-label ">Nom </label>
                  <input type="text" class="form-control" id="NamePhotoInput" placeholder="Lasagnes à la bolognese" name="Titre">
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-danger">Supprimer menu</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>


<?php require_once '../templates/footer.php';?>
