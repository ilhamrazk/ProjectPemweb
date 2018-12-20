<?php
error_reporting(0);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search</title>
  </head>
  <body>
    <h2>Data User</h2>
    <form method="post">
      <input type="text" name="query"/>
      <input type="submit" name="cari" value="Search"/>
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
      include 'koneksisearch.php';

      $query = $_POST['query'];
      if($query != ''){
        $select = mysqli_query($link, "SELECT * FROM signup WHERE fullname LIKE '%".$query."%'OR
        username LIKE  '%".$query."%' ");
      }else{
        $select = mysqli_query($link, "SELECT * FROM signup");
      }

      if(mysqli_num_rows($select)){


      while($baris = mysqli_fetch_array($select)){
       ?>

      <tr>
        <td><?php echo $baris['fullname'] ?></td>
        <td><?php echo $baris['username'] ?></td>
        <td><?php echo $baris['email'] ?></td>
        <td><?php echo $baris['phone_number'] ?></td>
        <td><?php echo $baris['gender'] ?></td>
      </tr>
    <?php }}else{
      echo '<tr><td colspan="5">Tidak Ada Data</td></tr>';
    }?>
    </table>
  </body>
</html>
