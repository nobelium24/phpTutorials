<?php
class User{
    private $email;
    private $name;
    public function __construct($name, $email){
        // $this->email = "Ram";
        // $this->name = "Ram2";
        $this->name = $name;
        $this->email = $email;
    }
    public function login(){
        // echo "The user logged in";
        echo "My name is " . $this->name ;
    }

    //Getters
    public function getName(){
        return $this->name;
    }

    //Setters
    public function setName($name){
        if (is_string($name) && strlen($name) > 1) {
            $this->name = $name;
            return "Name has been updated to $name";
        }else{
            return "Not a valid name";
        }
    }
}

// $user1 = new User("Adewole", "ogunbaja24@gmail.com");
// $user1->login();
// echo $user1->name;
// echo $user1->email;
$userTwo = new User("Adewole", "ogunbaja24@gmail.com");
echo $userTwo->setName("Opeyemi");
echo $userTwo->getName();



?>