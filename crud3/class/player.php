<?php

class Player{
    protected $pdo;

    public function __construct($pdo){
        $this->pdo=$pdo;
    }

    public function getUser(){
        $stmt=$this->pdo->prepare("SELECT * FROM player");
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function createPlayer($fullname,$email,$birth){
        $stmt=$this->pdo->prepare("INSERT INTO player(name_db,email_db,birth_db) VALUES (?,?,?)" );
       return $stmt->execute([$fullname,$email,$birth]);
    }

    public function deletePllayer($id){
        $stmt=$this->pdo->prepare("DELETE FROM player WHERE id=?");
       return $stmt->execute([$id]);
    }

    public function updatemyUser($fullname,$email,$birth,$id){
        $stmt=$this->pdo->prepare("UPDATE player SET name_db=?,email_db=?,birth_db=? WHERE id=?");
        return $stmt->execute([$fullname,$email,$birth,$id]);
    }
  
}

?>