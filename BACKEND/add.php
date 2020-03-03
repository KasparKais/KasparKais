<?php
$isEdit = false;
if (isset($_POST["submit"])){
    require_once "./models/UsersModel.php";

    $data = [
        "name" => $_POST["name"],
        "password" => $_POST["password"]
    ];

    UsersModel::addUsers($data);

    header("Location: /KasparKais.github.io/backend/");
}

require_once "./views/users-form.php"
?>

