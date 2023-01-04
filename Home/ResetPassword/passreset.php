<?php
session_start();
include '../../Configurations/connection.php';

$user=$_SESSION['resetemail'];

$newpassword=$_REQUEST['newpassword'];
$confirmpassword=$_REQUEST['confirmpassword'];

if(($newpassword==$confirmpassword)){
 $hash=password_hash($newpassword,PASSWORD_DEFAULT);
   $sql="UPDATE patients SET password='$hash' WHERE email='$user'";
   if($con->query($sql)==TRUE){
      header("location:../Login/login.html");
   }
   else{
      die("not updated".$con->connect_error);

   }
   
}
else{

   echo "not correct";
 






}







?>