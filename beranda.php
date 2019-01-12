 <?php
  session_start();
  include("function.php");
  echo check_login();
  ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
    <title>Praktik Login Session</title>
    <style>
    body{
    background: rgb(193, 233, 142);
}
    h1{
      margin-top:20%;
    }
    </style>
    </head>
    <body>
      <center><h1>Selamat Datang</h1></center>
      <center><h3><a href="profil.php">Edit Profil</a></h3></center>
      <center><h3><a href="logout.php">Logout!</a></h3></center>
    </body>
  </html>
