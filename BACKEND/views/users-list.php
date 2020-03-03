<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./scripts.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
          crossorigin="anonymous">
</head>
<body class="p-3">
    <div class="d-flex justify-content-between align-items-center">
        <div>
              <h1 class="title">
                Users
              </h1>
        </div>
      

        <div>
        <a <?= isset($_SESSION["user_id"]) ? 'hidden' : '' ?> href="/KasparKais.github.io/backend/login.php" class="btn btn-primary">
            Login
        </a>

        <a <?= isset($_SESSION["user_id"]) ? '' : 'hidden' ?> href="/KasparKais.github.io/backend/logout.php" class="btn btn-primary">
            Logout
        </a>


        <a href="/KasparKais.github.io/backend/add.php" class="btn btn-primary">
            Add user
        </a>
        </div>


    </div>

    <table class="table">
        <tr>
            <th>Name</th>
            <th></th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row["name"]?></td>
               
                <td>
                    <a href="/KasparKais.github.io/backend/edit.php?id=<?= $row["id"]?>" class="btn btn-primary">Edit</a>

                    <a href="/KasparKais.github.io/backend/delete.php?id=<?= $row["id"]?>" class="btn btn-danger">Delete (PHP)</a>

                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>    