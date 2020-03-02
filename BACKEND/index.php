<?php 
require_once "./models/UsersModel.php";

$result = UsersModel::getAllUsers();

require_once "./views/users-list.php";

?>