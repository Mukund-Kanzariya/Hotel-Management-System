<?php

require('../../includes/init.php');

$roleid=$_POST['roleid'];
$name=$_POST['name'];
$salary=$_POST['salary'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];

$query="INSERT INTO `users`(RoleId,Name,Salary,Email,Mobile,Address,City,State) VALUES(?,?,?,?,?,?,?,?)";
$param=[$roleid,$name,$salary,$email,$mobile,$address,$city,$state];
execute($query,$param);

?>