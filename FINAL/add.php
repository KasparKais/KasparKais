<?php

if (isset($_POST["submit"])){
    require_once "./helpers/db-wrapper.php";

    $db = new DB();

    $db->openConnection();

    $task = $_POST["task"];

    $db->run("INSERT INTO todo (task) VALUES ('$task')");

    $db->closeConnection();

    header("Location: /FINAL");
}

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" 
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
          crossorigin="anonymous">
        

</head>
<body>
      

</body>
</html>