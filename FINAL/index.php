<?php
    // require_once "./helpers/db-wrapper.php";
    
    // $db = new DB();
    // $db->openConnection();

    // $result = $db->run("SELECT * FROM todo");

    // $db->closeConnection();

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

<body class="p-3">      
    <div class="row">
        <div class="col">

            <form method='post' action='add.php'>
                <textarea name="todo" id="todo" cols="50" rows="2"></textarea>
            
            <div>
                <button type="submit" class="btn btn-primary">
                    Save 
                </button>
            </form>
                <input name="submit" value="1" hidden>
                <a hidden href="/KasparKais.github.io/final/update.php" class="btn btn-primary">
                    Update
                </a>
            </div>
        </div>
        
        <div class="col">
            <table class="table">
                
                <tr>
                    <td><input type="checkbox" class="checkbox" name="task" value=""></td>
                    <td>task</td>
                    <td>
                        <a href="/KasparKais.github.io/final/delete.php" class="btn btn-warning float-right">Delete</a>
                        <a href="/KasparKais.github.io/final/edit.php" class="btn btn-primary float-right">Edit</a>
                    </td>
                </tr>

                <tr>
                    <td><input type="checkbox" class="checkbox" name="task" value=""></td>
                    <td>task</td>
                    <td>
                        <a href="/KasparKais.github.io/final/delete.php" class="btn btn-warning float-right">Delete</a>
                        <a href="/KasparKais.github.io/final/edit.php" class="btn btn-primary float-right">Edit</a>
                    </td>
                </tr>
                 
                 

            </table>
        </div>
    </div>
    
</body>
</html>