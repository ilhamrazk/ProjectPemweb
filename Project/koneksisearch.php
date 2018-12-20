<?php
$namahost = "localhost";
$username = "root";
$password = "kutukupret123";
$database = "ilham";
$link = mysqli_connect($namahost,$username,$password) or die("Failed");
mysqli_select_db($link, $database) or die("Database not exist");
 ?>
