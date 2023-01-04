<?php
include './connection.php';

$sql="ALTER TABLE patients ADD COLUMN (uid VARCHAR(100) NOT NULL)";

if($con->query($sql)){
 echo "table altered";
}
else{
 die("error".$con->error);
}




?>