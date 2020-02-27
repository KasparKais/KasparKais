<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/KasparKais.github.io/w5l1/print.php" method="post">
        <input name="email" value="<?php $_COOKIE["user_email"] ?>">
        <input type="number" name="age">

        <button type="submit">Save Data</button>
    </form>
</body>
</html>
