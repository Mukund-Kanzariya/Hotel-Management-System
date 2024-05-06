<?php

require('../../includes/init.php');

$id=$_POST['id'];

$query="DELETE FROM `guests` WHERE Id=?";
$param=[$id];
execute($query,$param);

// header("location:../../pages/Roles");

?>