<?php

require_once __DIR__. "/../helpers/db-wrapper.php";
require_once __DIR__. "/../entity/User.php";

class UsersModel {
    public static function getAllUsers($limit = 25)
    {
        return DB::run("SELECT name, password, id FROM backenders LIMIT " .$limit);
    }

    public static function addUsers($data) 
    {
        $name = $data["name"];
        $password = User::hashPassword($data["password"]);
        DB::run("INSERT INTO backenders (name, password) VALUES ('$name', '$password')");
    }

    public static function getUsersById($id)
    {
        return DB::run("SELECT * FROM backenders WHERE id=$id");
    }

    public static function updateUsers($data) {
        $name = $data["name"];
        $password = User::hashPassword($data["password"]);
        $id = $data["id"];

        // var_dump($data);
        // var_dump($password);
        DB::run("UPDATE backenders SET name='$name', password='$password' WHERE id=$id");
    }



    public static function deleteUsersById($id) {
         DB::run("DELETE FROM backenders WHERE id=$id"); 
    }
}
?>