<?php
require_once "./db-wrapper.php";

$id = isset($_GET["id"]) ? $_GET["id"] : '' ;

if ($id) {
    $db = new DB();
    $db->openConnection();

    $db->run("DELETE FROM customers WHERE id=$id");

    $db->closeConnection();
}
header("Location: /KasparKais.github.io/W5L2/")

?>
