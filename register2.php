<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Login</title>
   <style media="screen">
     body{
       background: #beebe9;
     }
     .box{
       width: 300px;
       padding: 40px;
       position: absolute;
       top: 50%;
       left: 50%;
       transform: translate(-50%,-50%);
       background: #b8b2ff;
       text-align: center;
     }
     .input{
       border: 0;
       background: none;
       display: block;
       margin: 20px auto;
       text-align: center;
       border: 2px solid blue;
       padding: 14px 10px;
       width: 200px;
       outline: none;
       color: white;
       border-radius: 24px;
       transition: 0.25s;
     }
     .input:focus{
       width: 280px;
       border-color: #602080;
     }
     .submit{
       border: 0;
       background: none;
       display: block;
       margin: 20px auto;
       text-align: center;
       border: 2px solid #602080;
       padding: 14px 40px;
       outline: none;
       color: white;
       border-radius: 24px;
       transition: 0.25s;
       cursor: pointer;
     }
     .submit:hover{
       background: #ff94b6;
     }
     .welcome{
       color: #602080;
       font-size: 20pt;
       font-weight: 900;
     }
   </style>
 </head>
 <body>
   <div class="box">
       <span class="welcome"> LOGIN PETUGAS </span>
       <form action="login2.php" method="post">
         <input class="input" type="text" name="username" placeholder="Username">
         <input class="input" type="password" name="password" placeholder="Password">
         <input class="submit" type="submit" name="login" value="Login">
       </form>
       <a href="index2.php" class="submit">Daftar ?</a>
   </div>
 </body>
</html>

<?php
    include 'config.php';
    if(@$_POST['simpan']){
      $nama_petugas     = @$_POST['nama'];
      $telp     = @$_POST['telp'];
      $username = @$_POST['username'];
      $password = @$_POST['password'];
      $pass     = md5(@$password);
      $level    = @$_POST['level'];
      //md5 = enkripsi buat password supaya tdk kelihatan
      $query    = mysqli_query($koneksi, "INSERT INTO `t_petugas` (nama_petugas,username,password,telp,id_level)
                    VALUES ('$nama_petugas','$telp','$username','$pass','$level')");
      if($query){
        echo "<div class='box2'>
          <h3> Berhasil registrasi akun </h3>
          <br/> Klik untuk <a href='index2.php'>Login</a>
          </div>";
      }else{
        echo "data gagal di input";
      }
    }
   ?>
