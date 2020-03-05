<?
session_start();

if ($_SESSION['user_id']) {
    header("Location: /KasparKais.github.io/BACKEND/"); //Will reurn to index page if logged in (nothing else will be executed in this file)

}

if (isset($_POST['submit'])) {
    if ($_SESSION['csftToken'] !== $_POST['csftToken']) {
        echo "What a hacker";
        return;
    }
    require_once "./helpers/db-wrapper.php";
    require_once "./entity/User.php";
    $name = $_POST["name"];
    $response = DB::run("SELECT * FROM backenders WHERE name='$name'");

    if (!$response->num_rows) {
        echo "User does not exist";
    } else {
        while ($row = mysqli_fetch_assoc($response)) {
               $user = new User ($row);
        }

        $saltedPassword = $_POST["password"] . $user::SALT;
        $validPassword = password_verify($saltedPassword, $user->getPassword());

        // var_dump($user);
        // echo $saltedPassword;
        // var_dump($_POST);
    

        // echo $saltedPassword;
        // $validPassword = password_verify($saltedPassword, $user -> getPassword());

        if ($validPassword) {
            $_SESSION['user_id'] = $user->getId();
            $_SESSION['user_name'] = $_POST["name"];
            header("Location: /KasparKais.github.io/BACKEND/");
    
        } else {
            echo "Invalid password";
        }
    }
}
if (isset($_POST["submit"])) {
}   else {
    $token = getToken(10);
    $_SESSION['csftToken'] = $token;
} 


function getToken($length) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $length; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
};
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
                    <input class="form-control" name="password" type="password" value="<?= $password ?>">
                           
                </label>
            </div>
            <!-- add hidden token field -->
            <input name="csftToken" value="<?= $token ?>" hidden>




            <button class="btn btn-primary" type="submit" name="submit">Login (PHP)</button>
        </form>
    </div>
</body>
</html>