<?php

require ('../../includes/init.php');

header("Content-type:application/json");

$id=$_POST['id'];
$allotedroomno = $_POST['allotedroomno'];
$name = $_POST['name'];
$mobile= $_POST['mobile'];
$address = $_POST['address'];
$email = $_POST['email'];
$intime = $_POST['intime'];
$outtime = $_POST['outtime'];
$price = $_POST['price'];

$time = time();
$fileName = "$time-" . $_FILES['image']['name'];
$tmpFileName = $_FILES['image']['tmp_name'];
move_uploaded_file($tmpFileName, pathOf("assets/images/uploads/$fileName"));

$query = "UPDATE `guests` SET AllotedRoomId=?,Name=?,MobileNo=?,Address=?,Email=?,InTime=?,OutTime=?,TotalPrice=?,IdentityImageFile=? WHERE Id=?";
$params = [$allotedroomno,$name,$mobile,$address,$email,$intime,$outtime,$price,$fileName,$id];
$result = execute($query, $params);

if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);

    
?>