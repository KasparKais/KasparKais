<?php
if (isset($_POST["submit"])){
    require_once "./helpers/db-wrapper.php";

    $db = new DB();

    $db->openConnection(); 

    $name = $_POST["name"];
    $email = $_POST["email"];

    $db->run("INSERT INTO users (name, email) VALUES ('$name', '$email')");

    $db->closeConnection();

    header("Location: /KasparKais.github.io/backend/");
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
          crossorigin="anonymous">  
</head>
<body class="p-3">
    <div class="d-flex justify-content-center">
        <form action="/KasparKais.github.io/backend/add.php" method="POST">
            <div class="form-group">
                <label>
                    Name

                    <input class="form-control" name="name">
                </label>
            </div>
            <div class="form-group">
                <label>Email
                    <input class="form-control" name="email" type="email">
                </label>
            </div>
            
            <button class="btn btn-primary" type="submit" name="submit">Save (PHP)</button>
            <button class="btn btn-primary js-save-date">Save (jQuery)</button>

        </form>
    </div>
</body>
</html>