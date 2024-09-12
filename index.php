<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Concept de base</title>
</head>
<body>
    <h1>POO Concept de base</h1>

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

$mavoiture1 = new Voiture("Mercedes", "GLS", "Diesel");
$mavoiture2 = new Voiture("Peugeot", "5008", "Electrique");
echo $mavoiture1->afficherNouvelleVoiture() . "<br>";
echo $mavoiture2->afficherNouvelleVoiture();

?>

</body>
</html>
