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
       <span class="welcome"> LOGIN ANGGOTA </span>
       <form action="login1.php" method="post">
         <input class="input" type="text" name="username" placeholder="Username">
         <input class="input" type="password" name="password" placeholder="Password">
         <input class="submit" type="submit" name="login" value="Login">
       </form>
       <a href="register1.php" class="submit">Daftar ?</a>
   </div>
 </body>
</html>
