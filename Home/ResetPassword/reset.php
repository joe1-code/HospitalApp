<?php
session_start();
if(isset($_SESSION['reset']))
include '../Configurations/connection.php';

$resetuser=$_REQUEST['user'];

$sql="SELECT * FROM patients WHERE email='$resetuser'";
$db=$con->query($sql);

if($db->num_rows>0){
 while($row=$db->fetch_assoc()){

  if((!$resetuser==$row['email'])){
      header("location:./reset.html");
  }
  else{
   header("location:./passreset.html");
  }

 }

}
 else{
  header("location:./reset.html");
 }





?>