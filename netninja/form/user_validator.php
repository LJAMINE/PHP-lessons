<?php 

class userValidator{
    private $data;
    private $error=[];
    private static $fields=['username','email'];

    public function __construct($_post_data){
        $this->data=$_post_data;
    }

    public function validateForm(){

       foreach(self::$fields as $field) {

        if (!array_key_exists($field,$this->data)) {
            trigger_error("$field is not present in data");
            return;
        }
       }

       $this->validateusername();
       $this->validateemail();
       return $this->error;

    }

    public function validateusername() {
        $val = trim($this->data['username']); // Remove extra spaces
    
        if (empty($val)) {
            $this->adderror('username', 'username cannot be empty');
        } else {
            // Validate username with regex
            if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)) {
                $this->adderror('username', 'username must be 6-12 characters long and contain only letters and numbers');
            }
        }
    }
    

    public function validateemail(){
        
        $val=trim($this->data['email']);

        if(empty($val)){
            $this->adderror('email','email cannot be empty');
        }else{
            if (filter_var($val.FILTER_VALIDATE_EMAIL)) {
         $this->adderror('email','regex problem email');
            }
        }

    }

    public function adderror($key,$val){

        $this->error[$key]=$val;
    }
}

?>