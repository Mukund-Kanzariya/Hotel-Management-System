<?php

require('../../includes/init.php');

$id=$_POST['id'];
$name=$_POST['name'];

$query="UPDATE `roomTypes` SET Name=? WHERE Id=?";
$param=[$name,$id];
execute($query,$param);

?>