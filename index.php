<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/main.css">
    <title>POO Concept de base</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Quai Antique</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link"  href="/">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Galerie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">La Carte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Les Réservation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mon Compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Connexion/Déconnexion</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
    </header>
    <div class="container">
    <h1>Bonjour et bienvenue dans la POO Concept de base! <i class="bi bi-airplane"></i></h1>
<button class="btn btn-primary"> Cliquez ici !</button>
<div>

<<<<<<< HEAD
<main class="main-page" >
=======

>>>>>>> a501fae84e9c91db589d3987cfbaca35c82452f0

    <?php
class Voiture
{
    public string $marque;
    public string $modele;
    public string $carburant;

    public function __construct(string $marque, string $modele, string $carburant)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->carburant = $carburant;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function getCarburant()
    {
        return $this->carburant;
    }

    public function setMarque()
    {
        $this->marque;
    }

    public function setModele()
    {
        $this->modele;
    }

    public function setCarburant()
    {
        $this->carburant;
    }

    public function afficherNouvelleVoiture()
    {
        return "Marque : " . $this->marque . "<br>" . "Modele : " . $this->modele . "<br>" . "Carburant : " . $this->carburant;
    }
}

$mavoiture1 = new Voiture("Fiant 500", "GLS", "Diesel");
$mavoiture2 = new Voiture("Cupra", "5008", "Electrique");
echo $mavoiture1->afficherNouvelleVoiture() . "<br>";
echo $mavoiture2->afficherNouvelleVoiture();
?>
</div>
</div>
<<<<<<< HEAD
</main>
=======
>>>>>>> a501fae84e9c91db589d3987cfbaca35c82452f0

<footer class="bg-dark text-white text-center footer" >
    <div class="row">
        <div class="col-12 col-lg-4" >
            <h3 class="text-primary" >Nos horaires</h3>
            <p>Du mardi au dimanche  12:00-14h00  18:00-23</p>
        </div>
        <div class="col-6 col-lg-4">
            <p>Quai Antique<br/>
            5 Bouvlevard de la Paix <br/>
            69001 LYON <br/>
            04 55 66 55 66
            </p>
        </div>
        <div class="col-3 col-lg-4">
            contact@quaiantique.com
        </div>
    </div>
</footer>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
