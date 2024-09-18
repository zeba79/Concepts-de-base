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

?>

<main class="main-page" >

    <div class="container">
        <h1>Bonjour et bienvenue dans la POO Concept de base! <i class="bi bi-airplane"></i></h1>
        <div>
            <h3>
                <?php
$mavoiture1 = new Voiture("MERCEDES", "GLS", "Diesel");
$mavoiture2 = new Voiture("Cupra", "MVC", "Electrique");
echo $mavoiture1->afficherNouvelleVoiture() . "<br>";
echo $mavoiture2->afficherNouvelleVoiture();
?>
            </h3>
        <button class="btn btn-primary"> Cliquez ici !</button>
        </div>
        <div>
            <h3>
                <?php
$mavoiture1 = new Voiture("SKODA", "FABIA", "Essence");
$mavoiture2 = new Voiture("PEUGEOT", "5008", "Diesel");
echo $mavoiture1->afficherNouvelleVoiture() . "<br>";
echo $mavoiture2->afficherNouvelleVoiture();
?>
            </h3>
        <button class="btn btn-primary"> Cliquez ici !</button>
        </div>
    </div>

</main>
