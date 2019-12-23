<?php

$con = mysqli_connect('localhost','kunalbase','kunal8790mac');

if($con){
	echo "connected";
}
else{
	echo "not connected";
}
mysqli_select_db($con,'ssdb');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = "insert into userinfodata(user , email , mob)
value ('$user','$email','$mobile') ";        

mysqli_query($con,$query);


?>