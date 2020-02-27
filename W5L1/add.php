<?php echo "Submit" ?>
<!-- TODO create submit functionality-->

<?php
var_dump($_GET);

$email = $_GET["email"];
$age = $_GET["age"];

$q = "INSERT INTO users (email, age) VALUES (" . $_GET["email"] . ", " . $_GET["age"] . ")";
$q = "INSERT INTO users (email, age) VALUES ($email, $age)";

echo $q;
?>