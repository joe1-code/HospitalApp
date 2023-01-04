<?php
include 'connection.php';

#create table
$sql="CREATE TABLE patients(id int NOT NULL AUTO_INCREMENT,
                            fname VARCHAR(100),
                            lname VARCHAR(100),
                            dob DATE,
                            gender VARCHAR(100),
                            location VARCHAR(100),
                            email VARCHAR(100),
                            phone INT(100),
                            password VARCHAR(100),
                            PRIMARY KEY(id))";
                            
if($con->query($sql)==TRUE){
 echo "table created";
}
else{
 die("error occured".$con->error);
}
?>