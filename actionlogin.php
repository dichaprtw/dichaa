<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
      $password = $_POST['password'];
   $pass = $_POST['password'];   
   $sql = "SELECT *FROM user Where username='$username' AND password='$password'";
   $query = $con->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='formlogin.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:home2.php');
     }
   }
?>