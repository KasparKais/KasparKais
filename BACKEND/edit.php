<?php
require_once "./models/UsersModel.php";
$name = '';
$email = '';
$id = '';

if (isset($_POST["submit"])){
    $data = [
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "id" => $_POST["id"],
    ];
    UsersModel::updateUsers($data);
    header("Location: /KasparKais.github.io/backend/");
}

if (isset($_GET["id"])) {
    $result = UsersModel::getUsersById($_GET["id"]);

    while($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $email = $row["email"];
        $id = $row["id"];
    }
}

require_once "./views/users-form.php"
?>

