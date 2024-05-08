<?php

require ('../includes/init.php');
header("Content-type:application/json");

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT Id,Name,Password FROM `users` WHERE Name =? AND Password =?";
$params = [$username, $password];

$result = selectOne($query, $params);

if ($result) {
    echo json_encode(["success" => true]);
    $_SESSION['LoggedIn'] = true;
    $_SESSION['UserId'] = $result['Id'];
} else {
    echo json_encode(["success" => false]);
}


?>