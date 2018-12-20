<?php
error_reporting(0);
include 'koneksisearch.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search</title>
  </head>
  <body>
    <h2>Data User</h2>
    <form action="" method="post">
      <input type="text" name="query">
      <input type="submit" name="cari" value="Search">
    </form><br>



    <table border="1" cellspacing="0">
      <tr style="font-weight:bold;">
        <td>fullname</td>
        <td>username</td>
        <td>email</td>
        <td>phone number</td>
        <td>gender</td>
      </tr>
      <?php
      $no = 1;
      $query = $_POST['query'];
      if($query != ''){
      $select = mysqli_query($con, "SELECT * FROM signup WHERE fullname LIKE '%".$query."%' OR
      username LIKE '%".$query."%' ");
    }else{
      $select = mysqli_query($con, "SELECT * FROM signup");
    }
      if(mysqli_num_row($select)){
      while($baris = mysqli_fetch_array($select)){

       ?>
      <tr>
        <td><?php echo $baris['fullname'] ?></td>
        <td><?php echo $baris['username'] ?></td>
        <td><?php echo $baris['email'] ?></td>
        <td><?php echo $baris['phone_number'] ?></td>
        <td><?php echo $baris['gender'] ?></td>
      </tr>
    <?php
  }}else{
      echo '<tr><td colspan="5">Tidak ada data</td></tr>';
   } ?>
    </table>
  </body>
</html>
