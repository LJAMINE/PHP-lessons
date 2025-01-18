<?php

abstract class MembreEcole
{
    private string $nom;
    private int $age;

    public function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }
    public function getnom()
    {
        return $this->nom;
    }
    public function setnom($nom)
    {
        $this->nom = $nom;
    }

    public function getage()
    {
        return $this->age;
    }
    public function setage($age)
    {
        if ($age > 0) {
            $this->age = $age;
        } else {
            throw new Exception("age<0", 1);
        }
    }

    abstract public function sePresenter();
}

class Etudiant extends MembreEcole
{
    private $notes = [];

    public function __construct($nom, $age, $notes)
    {
        parent::__construct($nom, $age);
        $this->notes = $notes;
    }

    public function getnotes()
    {
        return $this->notes;
    }
    public function setnotes($notes)
    {
        $this->notes = $notes;
    }
    public function sePresenter()
    {
        echo "Je suis {$this->getnom()}, un étudiant de {$this->getage()} ans";
    }

    public function ajouterNote($note)
    {

        if ($note >= 0 && $note <= 20) {
            array_push($this->notes, $note);
            # code...
        } else {
            throw new Exception("Error note", 1);
        }
    }

    public function moyenne()
    {
        $totale = 0;

        for ($i = 0; $i < count($this->notes); $i++) {
            $totale += $this->notes[$i];
        }
        return  $totale / count($this->notes);
    }
}


class Enseinement extends MembreEcole
{
    private $listeEtudiants  = [];
    private $speciality;
    private static $nombreDeEtudiants = 0;

    public function __construct($nom, $age, $speciality)
    {
        parent::__construct($nom, $age);
        $this->speciality = $speciality;
    }

    public function ajouterEtudiant(Etudiant $etudiant)
    {

        array_push($this->listeEtudiants, $etudiant);
        self::$nombreDeEtudiants++;
    }
    public function enseingner()
    {
        return "[nom] enseigne la spécialité ";
    }
    public function sePresenter(){}
}



class ProfesseurPrincipal extends Enseinement
{
    public function enseingner()
    {
        parent::enseingner();
        echo "[nom], le professeur principal, supervise la classe.";
    }
    public function sePresenter() {}
}


$new=new Etudiant("mo,",22,[0]);
