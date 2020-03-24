<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOMEPAGE</title>
  <style media="screen">
  body{
    background: #beebe9;
  }
  .welcome{
    color: #b8b2ff;
    font-size: 50pt;
    font-weight: 1000;
  }
  .box{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 35%;
    transform: translate(-50%,-50%);
    background: #b8b2ff;
    text-align: center;
  }
  .box2{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 65%;
    transform: translate(-50%,-50%);
    background: #b8b2ff;
    text-align: center;
  }
  .submit{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #fffdf9;
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
  </style>
  </head>
  <body>
    <div class="welcome"> Perpustakaan Moklet </div>
    <div class="box">
      <h2>ANGGOTA</h2>
        <a href="index1.php" class="submit">Sign In/Sign Up</a>
    </div>
    <div class="box2">
      <h2>PETUGAS</h2>
        <a href="index2.php" class="submit">Sign In/Sign Up</a>
    </div>
  </body>
</html>
