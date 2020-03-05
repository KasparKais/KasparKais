<?php

class User {
    private $name;
    private $password;
    private $id;

    const SALT = "qwerty";

    public function __construct($data)
    {
        $this->name = $data["name"];
        $this->password = $data["password"];
        $this->id = $data["id"];
    }  

    public function setName($newName) {
        $this->name = $newName;
    }
    public function getName() {
        return $this->name;
    }
  
    public function setpassword($newPassword) {
        $this->password = $newPassword;
    }

    public function getPassword() {
            return $this->password;
        }
    public static function hashPassword($password) {
        $saltedPassword = $password . self::SALT;
        return password_hash($saltedPassword, PASSWORD_DEFAULT);
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