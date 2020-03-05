<?php
session_start();
if ($_GET["token"] !== $_SESSION["edit_access_token"]) {
    header("Location: /KasparKais.github.io/BACKEND/" );
}

require_once "./models/UsersModel.php";
$name = '';
$password = '';
$id = '';
$isEdit = true;
if (isset($_POST["submit"])){
    $data = [
        "name" => $_POST["name"],
        "password" => $_POST["password"],
        "id" => $_POST["id"],
    ];
    UsersModel::updateUsers($data);
    header("Location: /KasparKais.github.io/backend/");
}

if (isset($_GET["id"])) {
    $result = UsersModel::getUsersById($_GET["id"]);

    while($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $password = $row["password"];
        $id = $row["id"];
    }
}

require_once "./views/users-form.php"
?>

