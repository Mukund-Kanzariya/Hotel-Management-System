<?php

require('../../includes/init.php');

$id=$_POST['id'];

$query="DELETE FROM `modules` WHERE Id=?";
$param=[$id];
execute($query,$param);


?>