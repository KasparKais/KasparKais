<?php

session_start();

if ($_SESSION['user_id']) {
    header("Location: /KasparKais.github.io/BACKEND/"); //Will reurn to index page if logged in

}

if (isset($_POST['submit'])) {
    require_once "./helpers/db-wrapper.php";
    $name = $_POST["name"];
    $response = DB::run("SELECT * FROM backenders WHERE name='$name'");
    $password;

    if (!$response->num_rows) {
        echo "User does not exist";
    } else {
        while ($row = mysqli_fetch_assoc($response)) {
        $password = $row["password"];
        $user_id = $row["id"];
    }

    $validPassword = password_verify($_POST["password"], $password);

    if ($validPassword) {
        $_SESSION['user_id'] = $user_id;
        header("Location: /KasparKais.github.io/BACKEND/");
    
    } else {
        echo "Invalid password";
    }
}
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
        <form action="/KasparKais.github.io/backend/login.php" method="POST">
            <div class="form-group">
                <label>
                    Name

                    <input class="form-control" name="name">
                </label>
            </div>
            <div class="form-group">
                <label>Password
                    <input class="form-control" 
                           name="password">
                </label>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Login (PHP)</button>
        </form>
    </div>
</body>
</html>