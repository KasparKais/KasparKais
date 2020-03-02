<?php

class User {
    private $name;
    private $email;
    private $id;

    public function __construct()
    {

    }  

    public function setName($newName) {
        $this->name = $newName;
    }
    public function getName() {
        return $this->name;
    }

    public function setEmail($newEmail) {
        $this->email = $newEmail;
    }
    public function getEmail() {
        return $this->email;
    }

    public function getId() {
        return $this->id;
    }

}


?>