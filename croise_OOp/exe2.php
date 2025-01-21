<?php
// abstract class MembreBibliotheque
// {
//     private $nom;
//     private $age;

//     public function __construct($nom, $age)
//     {
//         $this->nom = $nom;
//         $this->age = $age;
//     }

//     public function getNom()
//     {
//         return $this->nom;
//     }
//     public function getage()
//     {
//         return $this->age;
//     }
//     public function setage($age)
//     {
//         if ($age > 0) {
//             $this->age = $age;
//         } else {
//             echo "negative input";
//         }
//     }
//     public function setNom($nom)
//     {
//         $this->nom = $nom;
//     }
//     public function sePresnneter()
//     {
//         echo "Je suis {$this->getNom()} un membre de la bibliothèque de {$this->getage()}ans";
//     }

//     abstract public function emprunterLivre($livre);
// }

// class Membre extends MembreBibliotheque
// {


//     private $livresEmpruntes = [];


//     public function __construct($nom, $age)
//     {
//         parent::__construct($nom, $age);
//     }

//     public function emprunterLivre($livre)
//     {
//         $this->livresEmpruntes[] = $livre;
//         echo "{$this->getNom()} a emprante le livre{$livre->getTitre()}";
//     }

//     public function retireLivres($livre)
//     {
//         $key = array_search($livre, $this->livresEmpruntes);
//         if ($key != false) {
//             unset($this->livresEmpruntes[$key]);
//             echo "{$this->getNom()} retourne {$livre->getTitre()}";
//         }
//     }
//     public function sePresnneter()
//     {
//         echo "Je suis {$this->getNom()} un membre de la bibliothèque de {$this->getage()}ans";
//     }
// }



// class Livre
// {
//     private $titre;
//     private $auteur;

//     private $dispo;
//     public function __construct($titre, $auteur)
//     {
//         $this->titre = $titre;
//         $this->dispo = true;
//         $this->auteur = $auteur;
//     }

//     public function getTitre()
//     {
//         return $this->titre;
//     }
//     public function getauteur()
//     {
//         return $this->auteur;
//     }


//     public function emprunter()
//     {

//         if ($this->dispo) {
//             $this->dispo = false;
//             return true;
//         } else {
//             return false;
//         }
//     }
//     public function retourner()
//     {
//      return   $$this->dispo = true;
//     }
//     public function isDisponible()
//     {
//         return $this->dispo;
//     }
// }


// $lm = new Membre("amne", 12);
// $lm->emprunterLivre("AMINE");



// abstract class parennt
// {
//     protected $content;
//     public function __construct($content)
//     {
//         $this->content = $content;
//     }


//     abstract public function afficheer();
// }

// class videoo extends parennt
// {


//     public function afficheer()
//     {
//         echo "this the video {$this->content}";
//     }
// }

// class documents extends parennt
// {

//     public function afficheer()
//     {
//         echo "this the documenyt {$this->content}";
//     }
// }


// $oop = new videoo("zaki video");
// // $oop=new documents(" document");
// $oop->afficheer();



// class poi
// {
//     private $notes = [];

//     public function get()
//     {
//         return   $this->notes;
//     }

//     public function ajterNote($note)
//     {
//         if ($note > 0 && $note < 20) {
//             $this->notes[] = $note;
//         } else {
//             echo "error in point";
//         }
//     }

//     public function moyt(){
//         $total=0;
//         for ($i=0; $i <count($this->notes) ; $i++) { 
//             $total+=$this->notes[$i];
//         }
//         return  $total/count($this->notes);
//     }
// }


// $iu=new poi();
// $iu->ajterNote(12);
// $iu->ajterNote(8);
// echo $iu->moyt();



// poly

// class VV{
//     protected $first;

//     public function __construct($first){
//         $this->first=$first;
//     }
//     public function dep(){
//         echo "{$this->first} VV";
//     }
// }

// class Car1 extends VV{
//     public function dep(){
//         echo "{$this->first} CAR1";
//     }
// }

// class Car2 extends VV{
//     public function dep(){
//         echo "{$this->first} CAR2";
//     }
// }

// // $lm=new Car1("bmw");
// $lm=new Car2("serc");
// $lm->dep();


// class emsp{
//     public function tra(){
//         echo "employee";
//     }

// }
// class ma extends emsp{
//     public function tra(){
//         parent::tra();
//     }
// }

// $po=new ma();
// $po->tra();


// class mthUTILE
// {
//     public $a;
//     public $b;

//     public static function addition($a, $b) {
//         if (self::verifierNombre($a,$b)) {
// return $a+$b;
//         } else {
//             echo "error";

//         }

//     }
//     public static function verifierNombre($a, $b)
//     {
//         return is_numeric($a) && is_numeric($b);
//     }
// }


// echo mthUTILE::addition(2,3);

// class cmpte{
//     static $nbrcmpte=0;
//     public $table=[];

//     public function ajouterCompte($cmt){
// $this->table[]=$cmt;
// echo self::$nbrcmpte++;
//     }
// }

// $sd=new cmpte();
//  $sd->ajouterCompte("aminnnn");
//  $sd->ajouterCompte("aa");
//  $sd->ajouterCompte("vb");




// interface Iei{
//     public function obtenirDateDernierEntretien();
//     public function obtenirTypeEntretien();
//     public function définirDateDernierEntretien($date);
//     public function définirTypeEntretien($date);

// }

// class entr implements Iei{
//     public $dateDernierEntretien;
//     public $typeEntretien;
//     public function obtenirDateDernierEntretien(){
//        return $this->dateDernierEntretien;
//     }
//     public function obtenirTypeEntretien(){
//         return $this->typeEntretien;
//      }

//      public function définirDateDernierEntretien($dateDernierEntretien){
//          $this->dateDernierEntretien=$dateDernierEntretien;
//      }
//      public function définirTypeEntretien($typeEntretien){
//         $this->typeEntretien=$typeEntretien;
//     }


// }

// class main extends entr{
//     public $responsable;
//     public $coût;

//     public function __construct($responsable,$coût){
// $this->responsable=$responsable;
// $this->coût=$coût;
//     }
//     public function obtenirResponsable(){
//         return $this->responsable;
//      }
//      public function obtenirCoût(){
//          return $this->coût;
//       }

//       public function définirResponsable($responsable){
//           $this->responsable=$responsable;
//       }
//       public function définirCoût($coût){
//          $this->coût=$coût;
//      }



// }

abstract class mbr
{

    private $nom;
    private $age;

    public function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function SetAge($age)
    {
        $this->age = $age;
    }
    abstract public  function sepre();
}

class EEtud extends mbr
{

    private $notes = [];

    public function __construct($nom, $age)
    {
        parent::__construct($nom, $age);
    }

    public  function sepre()
    {
        echo "Je suis {$this->getNom()}, un étudiant de {$this->getAge()} ans.";
    }

    public function ajternnote($nte)
    {

        if ($nte > 0 && $nte < 20) {
            $this->notes[] = $nte;
        } else {
            echo "error";
        }
    }
    public function moye()
    {
        $total = 0;
        for ($i = 0; $i < count($this->notes); $i++) {
            $total += $this->notes[$i];
        }
        return $total / count($this->notes);
    }
}










class ens extends mbr
{

    public $special;
    static $nombreDeEtudiants = 0;
    public $listeEtudiantss = [];

    public function __construct($nom, $age, $special)
    {
        parent::__construct($nom, $age);
        $this->special = $special;
    }




    public  function enseigner()
    {
        echo "Je suis {$this->getNom()}, enseigne la spécialité {$this->special} .";
    }
    public  function sepre()
    {
        echo "Je suis {$this->getNom()}, un étudiant de {$this->getAge()} ans.";
    }

    public function ajtetudiant(EEtud $etudiant)
    {

        $this->listeEtudiantss[] = $etudiant;
    }
    public function aff()
    {

        for ($i = 0; $i < count($this->listeEtudiantss); $i++) {
        echo  $this->listeEtudiantss[$i]->getNom();
        }
    }
}




class prof extends ens{
    public  function enseigner()
    {
        parent::enseigner();
        echo "Je suis {$this->getNom()}, le professeur principal, supervise la classe. .";

    }
}

$etid1=new EEtud("amio",12);
$etid2=new EEtud("said",19);
$ok=new ens("am",12,"pc");
$ok->ajtetudiant( $etid1);
$ok->ajtetudiant( $etid2);
 $ok->aff();


// $ok->ajtetudiant("ert");

// $moy->ajternnote(18);
// $moy->ajternnote(4);

// echo $moy->moye();