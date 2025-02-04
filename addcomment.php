<?php
// Connect to server and select database.
include("config.php");

$datetime=date("y-m-d h:i:s"); //date time
        
$sql="INSERT INTO guestbook (name,email,comment,datetime)VALUES('".$_POST["name"]."','".$_POST["email"]."' ,'".$_POST["comment"]."','$datetime')";

$objQuery = mysqli_query($objCon,$sql);


?>