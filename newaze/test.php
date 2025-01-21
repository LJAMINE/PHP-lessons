<?php

abstract class MembreEcoel
{

    protected $nom;
    protected $age;

    public function __construct($age, $nom)
    {
        $this->age = $age;
        $this->nom = $nom;
    }

    abstract public function sePreeentres();
}



class Etudianttte extends MembreEcoel
{
    private $notes = [];

    public function __construct($age, $nom)
    {
        parent::__construct($age, $nom);
    }

    public function getNomnn()
    {
        return $this->nom;
    }
    public function getAAge()
    {
        return $this->age;
    }

    public function setAAge($age)
    {
        if ($age > 0) {
            $this->age = $age;
        } else {
            echo "nombtre negative";
        }
    }
    public function ajouterNotee($note)
    {

        if ($note > 0 && $note < 20) {
            $this->notes[] = $note;
        } else {

            echo "notes not good";
        }
    }

    public function moyeennee()
    {
        $total = 0;

        for ($i = 0; $i < count($this->notes); $i++) {
            $total += $this->notes[$i];
        }
        return $total / count($this->notes);
    }

    public function sePreeentres()
    {
        echo  "Je suis {$this->nom} un étudiant de {$this->age} ans ";
    }
}



// $newarra->ajouterNotee(18);
// $newarra->ajouterNotee(2);
// echo $newarra->moyeennee();
// $newarra->sePreeentres();


class Enseignantes extends MembreEcoel
{

    public $listeEtudiants = [];
    static $nombreDeEtudiants = 0;
    public $speaaciality;
    public function __construct($age, $nom, $speaaciality)
    {
        parent::__construct($age, $nom);
        $this->speaaciality = $speaaciality;
    }

    public function ajouterEtudiant(Etudianttte  $etudiant)
    {
        $this->listeEtudiants[] = $etudiant;
    }

    public function afficherParticipants()
    {
        for ($i = 0; $i < count($this->listeEtudiants); $i++) {

            echo $this->listeEtudiants[$i]->nom;
        }
    }

    public function sePreeentres() {
        echo "{$this->nom}, enseignant de {$this->speaaciality}, âgé de {$this->age} ans.\n";

    }
    public function enseigner()
    {
        echo  " {$this->nom} enseigne la spécialité {$this->speaaciality} et age {$this->age}";
    }
}

class ProfesseurPrincipal  extends Enseignantes
{
    public function enseigneant()
    {
        echo "{$this->nom} est le professeur principal de la spécialité {$this->speaaciality}.\n";
        parent::enseigner();
    }
}



$newarra1 = new Etudianttte(12, "said");
$newarra2 = new Etudianttte(12, "amine");
$poi = new Enseignantes(16, "abdes", "physic");


$poi->ajouterEtudiant($newarra1);
$poi->ajouterEtudiant($newarra2);
$poi->afficherParticipants($newarra1);


// $poi->enseigner();

$ijh = new ProfesseurPrincipal("aqw", 12, "aminnz");
$ijh->enseigneant();
