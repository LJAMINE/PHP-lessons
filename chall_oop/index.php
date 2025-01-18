<?php


abstract class MembreEcoleamine
{
    protected $nom;
    protected $age;

    public function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->nom;
    }
    public function getage()
    {
        return  $this->age;
    }
    public function setName($nom)
    {
        $this->nom = $nom;
    }
    public function setage($age)
    {
        $this->age = $age;
    }

    abstract function sepresenter();
}

class Students extends MembreEcoleamine
{

    private $notes = [];
    public function __construct($nom, $age)
    {
        $this->age = $age;
        $this->nom = $nom;
    }

    public function getternotes()
    {
        return $this->notes;
    }

    public function ajouternote($note){
if ($note>0 && $note<20) {
    $this->notes[]=$note;
} else {
echo  "error";
}



    }


    public function moyenne(){
       $total=0;
      for ($i=0; $i <count($this->notes) ; $i++) { 
$total+=$this->notes[$i];

    }
return $moy=$total/count($this->notes);
    }

    public function sepresenter()
    {
        echo "Je suis {$this->getName()}, un étudiant de {$this->getage()} ans {$this->moyenne()}." ;
    }
}
class Teacher extends MembreEcoleamine
{

    
    private $speaciality;
    public static $nombreDeEtudiants =0;
    private $listeEtudiants =[];

    
    public function __construct($nom, $age, $speaciality)
    {
       
        parent::__construct($nom,$age);
        $this->speaciality = $speaciality;
    }

    public function getspeaciality()
    {
        return  $this->speaciality;
    }
    public function setspeaciality($speaciality)
    {
        $this->speaciality = $speaciality;
    }

    public function sepresenter()
    {
        echo "Je suis {$this->getName()}, un teacher de {$this->getage()} ans. and speaciality {$this->getspeaciality()}  ";
    }


    public function ajouterEtudiant($etudiant){

$this->listeEtudiants[]=$etudiant;
self::$nombreDeEtudiants++;

    }

    public function afficher(){
        foreach ($this->listeEtudiants as $etudiant) {
 echo "{$etudiant->getName()}";
        }
    }
}


$teacher=new Teacher("azer",25,"math");
$teacher->ajouterEtudiant("amine");
$teacher->ajouterEtudiant("said");
$teacher->afficher();




$stid = new Students("amine", 19);
$stid->ajouternote(10);
$stid->ajouternote( 10);

$stid->sepresenter();


// 2. Classe Étudiant (Héritage de MembreEcole)
