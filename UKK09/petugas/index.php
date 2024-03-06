<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'petugas') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Petugas</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css "> 
</head>

<body >
  <?php include "navbar.php"; ?>
  <div class="container">
    <div style="text-align: center;">
      <h1>DASSBOARD</h1>
      <img src="../hh.jpg" alt="" height="250px" width="300px">
    </div>
      <div class="card">
        <div class="card-header">
          ID: <?= $_SESSION['id_login']; ?>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg> Pengguna</p>
      <footer class="blockquote-footer"><?= $_SESSION['nama_pengguna']; ?> <cite title="Source Title"></cite></footer>
    </blockquote>
  </div>
</div>
</div>
   <!-- <div class="container">
    <h1>Dasboart</h1>
    <img src="" alt="" class="">
     <div class="card-header">
     </div>
     <div class="card-body">
      <blockquote class="blocquote mb-0">
        <p>pengguna</p>
        <footer class="blocquote-footer"></footer>
      </blockquote>
     </div>
   </div>
  <script src="../js/bootstrap.min.js"></script> -->
</body>

</html>