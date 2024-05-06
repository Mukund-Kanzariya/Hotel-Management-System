<?php

require ('../../includes/init.php');

$id=$_POST['id'];
$roomtypeid=$_POST['roomtypeid'];
$roomnumber=$_POST['roomnumber'];
$price=$_POST['price'];
$isavailable=$_POST['isavailable'];

$query="UPDATE `rooms` SET RoomTypeId=?,RoomNumber=?,Price=?,IsAvailable=? WHERE Id=?";
$param=[$roomtypeid,$roomnumber,$price,$isavailable,$id];
execute($query,$param);

?>