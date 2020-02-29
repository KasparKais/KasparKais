<?php
    if (isset($_GET["id"])) {
        require_once "./helpers/db-wrapper.php";
        
        $id = $_GET["id"];
        $db = new DB();
        $db->openConnection();

        $result = $db->run("DELETE FROM users WHERE id=$id");

        $db->closeConnection();
    }
    if (isset($_GET["redirect"]) && $_GET["redirect"] === "false") {
        return;
    }

    header("Location: /KasparKais.github.io/backend/")
?>