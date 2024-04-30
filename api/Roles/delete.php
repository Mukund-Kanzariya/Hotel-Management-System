<?php

$id=$_GET['deleteid'];

require('../../includes/init.php');

$query="DELETE FROM `roles` WHERE Id=?";
$param=[$id];
execute($query,$param);

// header("location:../../pages/Roles");

?>