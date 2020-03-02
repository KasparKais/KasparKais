<?php

require_once __DIR__. "/../helpers/db-wrapper.php";

class UsersModel {
    public static function getAllUsers($limit = 25)
    {
        return DB::run("SELECT name, email, id FROM users LIMIT " .$limit);
    }

    public static function addUsers($data) 
    {
        $name = $data["name"];
        $email = $data["email"];
        DB::run("INSERT INTO users (name, email) VALUES ('$name', '$email')");
    }

    public static function getUsersById($id)
    {
        return DB::run("SELECT * FROM users WHERE id=$id");
    }

    public static function updateUsers($data) {
        $name = $data["name"];
        $email = $data["email"];
        $id = $data["id"];
        DB::run("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    }

    public static function deleteUsersById($id) {
         DB::run("DELETE FROM users WHERE id=$id"); 
    }
}
?>