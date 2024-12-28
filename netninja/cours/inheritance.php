<?php

class User
{
    public $username;
    public $role = "member";
    private $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend()
    {
        return "$this->email add a  new friend";
    }

    public function message()
    {
        return "$this->email sent a new message ";
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        if (strpos($email, '@') > -1) {
            $this->email = $email;
        }
    }
}

class Adminuser extends User
{

    public $level;
    public $role = 'admin';

    public function __construct($username, $email, $level)
    {
        $this->level = $level;
        parent::__construct($username, $email);
    }
}

$userOne = new User('mario', 'mario@gmail.com');
$userTwo = new User('vro', 'bro@gmail.com');
$userThree = new Adminuser('yoshi', 'yoshi@gmail.com', 12);

// echo $userOne->username . '<br>';
// echo $userTwo->getEmail() . '<br>';
// echo $userThree->level . '<br>';

echo $userOne->role . '<br>';
echo $userThree->role . '<br>';

echo $userOne->message() . '<br>';
echo $userTwo->message() . '<br>';
echo $userThree->message() . '<br>';
