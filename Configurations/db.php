<?php
include './connection.php';

#create database known as hospital
$sql="CREATE DATABASE hospital";
if($con->query($sql)==TRUE){
 echo "db created";
}
else{
 die("could not create db".$con->error);
}





?>