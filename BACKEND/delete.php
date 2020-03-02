<?php
    if (isset($_GET["id"])) {
        require_once "./models/UsersModel.php";
        UsersModel::deleteUsersById($_GET["id"]);
    }

    if (isset($_GET["redirect"]) && $_GET["redirect"] === "false") {
        return;
    }

    header("Location: /KasparKais.github.io/backend/")
?>