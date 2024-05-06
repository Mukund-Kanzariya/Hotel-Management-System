<?php 

require ('../../includes/init.php');

$roomtypeid=$_POST['roomtypeid'];
$roomnumber=$_POST['roomnumber'];
$price=$_POST['price'];
$isavailable=$_POST['isavailable'];

$query="INSERT INTO `rooms`(RoomTypeId,RoomNumber,Price,IsAvailable) VALUES(?,?,?,?)";
$params=[$roomtypeid,$roomnumber,$price,$isavailable];
execute($query,$params);

?>