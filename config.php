<?php
// Connect to server and select database.
define('servername', 'localhost');
define('username', 'root');
define('password', '');
define('dbname', 'myhotel');

$objCon = mysqli_connect(servername, username, password,dbname);

// Check connection
if ($objCon -> connect_errno) {
    echo "Failed to connect to MySQL: " . $objCon -> connect_error;
    exit();
  }

  else
  echo "success";
?>