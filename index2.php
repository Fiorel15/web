<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <style media="screen">
      [class*="col-"]{
        padding: 5px; float: left; width: 100%;
      }
      @media only screen and (min-width: 600px){
        /* For Tablets */
        .col-s-1 {width: 8.33%;}
        .col-s-2 {width: 16.66%;}
        .col-s-3 {width: 25%;}
        .col-s-4 {width: 33.33%;}
        .col-s-5 {width: 41.66%;}
        .col-s-6 {width: 50%;}
        .col-s-7 {width: 58.33%;}
        .col-s-8 {width: 66.66%;}
        .col-s-9 {width: 75%;}
        .col-s-10 {width: 83.33%;}
        .col-s-11 {width: 91.66%;}
        .col-s-12 {width: 100%;}
      }
      @media only screen and (min-width: 768px){
        /* For Desktop */
        .col-s-1 {width: 8.33%;}
        .col-s-2 {width: 16.66%;}
        .col-s-3 {width: 25%;}
        .col-s-4 {width: 33.33%;}
        .col-s-5 {width: 41.66%;}
        .col-s-6 {width: 50%;}
        .col-s-7 {width: 58.33%;}
        .col-s-8 {width: 66.66%;}
        .col-s-9 {width: 75%;}
        .col-s-10 {width: 83.33%;}
        .col-s-11 {width: 91.66%;}
        .col-s-12 {width: 100%;}
      }
      body{
          background: #beebe9;
        }
        .form{
          margin: 10% 0 0 25%;
          float: left;
          width: 60%;
        }
        .box{
          width: 600px;
          padding: 80px;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          background: #b8b2ff;
          text-align: center;
        }
        .box2{
          width: 300px;
          padding: 40px;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          background: #b8b2ff;
          text-align: center;
          border: 2px solid blue;
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
        .input2{
          border: 0;
          background: none;
          display: block;
          margin: 20px auto;
          text-align: center;
          border: 2px solid blue;
          padding: 20px 15px;
          width: 200px;
          outline: none;
          color: white;
          border-radius: 24px;
          transition: 0.25s;
        }
        .input2 h5{
          color: white;
          text-transform: uppercase;
          font-weight: 400;
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
        <span class="welcome"> REGISTER PETUGAS </span>
        <form action=" " method="post">
          <input class="input" type="text" name="nama" placeholder="Nama">
          <input class="input" type="text" name="kelas" placeholder="Kelas">
          <input class="input" type="text" name="telp" placeholder="Telp">
          <input class="input" type="text" name="username" placeholder="Username">
          <input class="input" type="password" name="password" placeholder="Password">
          <div class="input2">
            <h4 style="color:#602080">Level</h4>
          <input type="radio" id="1" name="level" value="Petugas">
          <label for="1" style="color:#602080">Petugas</label>
            <br>
          <input type="radio" id="2" name="level" value="Anggota">
          <label for="2" style="color:#602080">Anggota</label>
        </div>
          <input class="submit" type="submit" name="simpan" value="Daftar"><br>
        </form>
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
