
<?php

//class 
class Voiture{
    
    //attributs
    private string $marque;
    private string $modele;
    private float $nbPortes;
    private float $vitesseActuelle;
    private bool $isOn;
    
    //__contruct
    public function __construct($marque, $modele, $nbPortes, $isOn = false, $vitesseActuelle = 0){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->isOn = $isOn;
        $this->vitesseActuelle = $vitesseActuelle;
    }
    
    //Methods
    public function demarrer(){
        if($this->isOn){
            return "Le véhicule ". $this->marque . $this->modele . " est déjà allumé. <br>";
        } else {
            $this->isOn = true;
            return "Le véhicule ". $this->marque . $this->modele . " démarre. <br>";
        }
    }

    public function accelerer($vitesseActuelle){
        if($this->isOn){
            $this->vitesseActuelle = $vitesseActuelle;
            return "Le véhicule " . $this->marque . $this->modele . " roule à " . $this->vitesseActuelle . " km/h.<br>";
        } else {
            return "Le véhicule " . $this->marque . $this->modele . " veut accélèrer de " . $this->vitesseActuelle . ".<br>
            Pour accélèrer, il faut démarrer le véhicule " . $this->marque . $this->modele . " ! <br>";
        }
    }
    
    public function stopper(){
        if($this->isOn){
            $this->isOn = false;
            $this->vitesseActuelle = 0;
            return "Le véhicule ". $this->marque . $this->modele . " est stoppé. <br>";
        } else {
            return "Le véhicule ". $this->marque . $this->modele . " est déjà éteint. <br>";
        }
    }
    
    //getter and setter
    public function getInfo(){
        $infoVoiture = array(
         "marque" => $this->marque,
         "modèle" => $this->modele,
         "Portes" => $this->nbPortes,
         "Statut" => $this->isOn,
         "Vitesse" => $this->vitesseActuelle,
        );
        return $infoVoiture;
    }
    
    public function getVitesseActuelle(){
        if($this->isOn){
            return "La voiture ". $this->marque . $this->modele ."roule à : " . $this->vitesseActuelle . " km/h. <br>";
        } else {
            return "La voiture" . $this->marque . $this->modele . " roule à : 0 km/h. <br>";
        }
    }
}

$peugeot = new Voiture("Peugeot", " 408", 5, false);
$citroen = new Voiture("Citroën", " C4", 3);

echo $peugeot->demarrer();
echo $peugeot->accelerer(50);
echo $citroen->demarrer();
echo $citroen->stopper();
echo $citroen->accelerer(20);
echo $peugeot->getVitesseActuelle();
echo $citroen->getVitesseActuelle();
$marque = $peugeot->getInfo();
echo $marque["marque"];



/*
    On veut un objet voiture
    Qu'est-ce qui compose une voiture
        - Marque (string)
        - Modèle (string)
        - Le nombre de portes (float)
        - vitesse (float)
        - isOn (booleen)
    Est ce qu'on veut interdir à certains attributs d'être initialisé de l'exterieur ?
        non 
    Est-ce que certains attributs doivent avoir une valeur par defaut ?
        - isOn = False
        - vitesse = 0
    Quel comportement spécifique je veux pouvoir lui demander de lui faire faire ?
        - accélérer(vitesseAcceleration) (Buisness rules : ne peut fonctionner que si la voiture est allumée)
        - démarrer
        - stopper
    Est-ce qu'on veut ne pas permettre de consulter certains attributs ?
        non
    Est-ce qu'on veut ne pas permettre de modifier directement certains attributs ?
        non
*/ 
?>