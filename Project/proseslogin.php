<!--
// $username = mysql_real_escape_string($link, $_POST['username']);
// $password = mysql_real_escape_string($link, $_POST['password']);
//
// if (count($errors) == 0) {
//   $password = md5($password);
//   $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
//   $result = mysqli_query($link, $query);
//   if(mysqli_num_rows($result) == 1){
//     header("location: train6.php")
//   }else{
//     header("location: loginpage.php");
//   }
//   }
// include "koneksi.php";


// $link = mysqli_connect("localhost", "root", "kutukupret123", "ilham");
// //get value
// $username = $_POST['username'];
// $password = md5($_POST['password']);
//
// //to prevent mysql injection
// $username = stripcslashes($username);
// $password = stripcslashes($password);
// $username = mysqli_real_escape_string($link,$username);
// $password = mysqli_real_escape_string($link,$password);
//
//
// //query the database for user
// $result = mysqli_query($link,"SELECT * FROM signup WHERE username = '$username' And password = '$password'")
// or die("Failed to query database ".mysql_error());
// $row = mysqli_fetch_array($result);
// if ($row['username'] == $username && $row['password'] == $password){
// header("Location: train6.php");
// }else{
//   header("Location: loginpage.php");
// }
// -->
<?php
session_start();

include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
//$hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "SELECT * FROM signup WHERE username = '$username'";
$result = $link->query($sql);
$row = $result->fetch_assoc();

if ($username == $row['username'] && $password == $row['password']) {
  // code...
  $_SESSION['username'] = $_POST['username'];
  header("location: train6.php");
}else{
  header("location: loginpage.php");
}



 ?>
