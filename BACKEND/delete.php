<?php
    if (isset($_GET["id"])) {
        require_once "./helpers/db-wrapper.php";
        
        $id = $_GET["id"];

        $result = DB::run("DELETE FROM users WHERE id=$id");
    }
    if (isset($_GET["redirect"]) && $_GET["redirect"] === "false") {
        return;
    }

    header("Location: /KasparKais.github.io/backend/")
?>