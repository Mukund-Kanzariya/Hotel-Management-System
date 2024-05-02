<?php

require('../../includes/init.php');

$id=$_POST['id'];

$query="DELETE FROM `roomTypes` WHERE Id=?";
$param=[$id];

execute($query,$param);

?>