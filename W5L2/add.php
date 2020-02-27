<?php
require_once "./db-wrapper.php";

$name = $_POST["name"];
$email = $_POST["email"];
$id = '';

if ($name && $email) {
$db = NEW DB();

$db->openConnection();

$name = $_POST["name"];
$email = $_POST["email"];

if (empty($_POST["id"])) {
    $db->run("INSERT INTO customers (name, email) VALUES ('$name', '$email')");
} else { 
    $db->run("UPDATE customers SET name='$name', email='$email' WHERE id=".$_POST["id"]);
}

$response = $db->run("INSERT INTO customers (name, email) VALUES ('$name', '$email')");

$db->closeConnection();
}
if ($_GET["id"]) {
    $db = new DB();
    $db->openConnection();
    $response = $db->run("SELECT * FROM customers WHERE ID=".$_GET["id"]);

    while($row = mysqli_fetch_assoc($response)) {
        $form_email = $row["email"];
        $form_name = $row["name"];

    }

    $db->closeConnection();
    $id = $_GET["id"];
}

?>

<form action="./add.php" method="post">
    <input name="name" value="<?php echo $form_name?>">
    <input name="email" type="email" value="<?= $form_email?>">
    <input hidden name="id" value="<?= $id ?>">

    <button type="submit">Save</button>
</form>