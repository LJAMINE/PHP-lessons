<?php 

class player{
    protected $pdo;

    public function __construct($pdo){
         $this->pdo=$pdo;
    }

    public function getUser(){
$stmt=$this->pdo->prepare("SELECT * FROM player");
$stmt->execute();
return $stmt->fetchAll(PDO::FETCH_ASSOC);


    }

    public function creatUser($fullname,$email,$birth){
        $stmt=$this->pdo->prepare("INSERT INTO player (name_db,email_db,birth_db)VALUES (?,?,?)");
        return $stmt->execute([$fullname,$email,$birth]);
    }

    public function deleteUser($id){

$stmt=$this->pdo->prepare("DELETE FROM player WHERE id=?");
return $stmt->execute([$id]);


    }

    public function editUsers($fullname,$email,$birth,$id){
       $stmt=$this->pdo->prepare("UPDATE player SET name_db=?,email_db=?,birth_db=? where id=?") ;
       return $stmt->execute([$fullname,$email,$birth,$id]);
    }
}


?>