<?php echo "Hi, you have subscribed as " . $_POST ["email"] . ", your age is: " . $_POST["age"]?>

<br/>

<?php
$email = $_POST["email"];
$age = $_POST["age"];
echo "Hi, you have subscribed as $email, your age is: $age";


$_COOKIE["user_email"] = $email
?>
