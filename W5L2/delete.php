<?php
    var_dump($_GET);
    if (isset($_GET["id"])) {
        require_once "./db-wrapper.php";
        
        $id = $_GET["id"];
        $db = new DB();
        $db->openConnection();

        echo $id;
        $result = $db->run("DELETE FROM customers WHERE id=$id");

        $db->closeConnection();
}
// header("Location: /KasparKais.github.io/W5L2/")

?>
