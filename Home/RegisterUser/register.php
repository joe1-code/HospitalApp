<?php
include '../Configurations/connection.php';

#taking up inputs
$firstname=$_REQUEST['fname'];
$lastname=$_REQUEST['lname'];
$DOB=$_REQUEST['dob'];
$sex=$_REQUEST['gender'];  
$area=$_REQUEST['location'];
$mail=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$passcode=$_REQUEST['password'];

$hash=password_hash($passcode,PASSWORD_DEFAULT);
$userid=uniqid();

$sql="INSERT INTO patients(fname,lname,dob,gender,location,email,phone,password)
                  VALUES('$firstname','$lastname','$DOB','$sex','$area','$mail','$phone','$hash')";

if(mysqli_query($con,$sql)){
 echo "data inserted";
}
else{
 die("not posted".$mysqli_error);
}



?>