<?php

require('../../includes/init.php');

$name=$_POST['name'];

$query="INSERT INTO `roomtypes`(Name) VALUES(?)";
$param=[$name];
execute($query,$param);

?>