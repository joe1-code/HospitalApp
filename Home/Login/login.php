<?php
include '../Configurations/connection.php';

$user=$_REQUEST['username'];
$passcode=$_REQUEST['password'];

$sql="SELECT password FROM patients WHERE email='$user'";
$db=$con->query($sql);

if($db->num_rows>0){
 while($row=$db->fetch_assoc()){
  
  if(!password_verify($passcode,$row['password'])){
    echo "wrong password!!";
  }
  else{
    echo "welcome";
  }
 }

}







?>