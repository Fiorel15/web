<?php
  include 'config.php';

  $username = ($_POST['username']);
  $password = (md5($_POST['password']));

  $query  = "SELECT * FROM t_anggota WHERE username = '$username' AND password  = '$password' ";
  $sql    = mysqli_query ($koneksi, $query);

  if($sql->num_rows > 0){
    session_start();
    $_SESSION['username'] = $username;
    header("Location: user.php");
  }else{
    echo "<h1> Username atau Password Anda Salah !! </h1>";
    echo "<div class='box'>
            <h3>
            <br/> Klik untuk <a href='register2.php'> Login lagi </a>
            </h3>
          </div>";
  }
?>
