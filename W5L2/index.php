<?php
    require_once "./db-wrapper.php";

    $db = NEW DB();

    $db->openConnection();

    $response = $db->run("SELECT * FROM customers");
?>
    <!-- while($row = mysqli_fetch_assoc($response)) {
        echo $row["name"] . "<br/>";
    }

    $db->closeConnection(); -->

<table>
    <tr>
        <th>Name</th>
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($response)) {
        echo "<tr><td>" . $row["name"] . "</td><td><button>Delete</button></td></tr>";
    }
    ?>

</table>