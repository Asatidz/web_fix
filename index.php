<?php
session_start();
ob_start();

include "library/config.php";

if(empty($_SESSION['username']) OR empty($_SESSION['password'])) {
    echo "<p align='center'>Anda Harus Login Sek Brohh!!</p>";
    echo "<meta http-equiv='refresh' content='2; url=login.php'>";
}else{
    define('INDEX', true);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="header">System Informasi Pelaporan Pelanggaran</div>
    <div class="container">
      <div class="sidebar">
        <h2>Main Navigation</h2>
        <ul>
          <li>
            <a href="?hal=dashboard" class="aktif"
              ><i class="fas fa-tachometer-alt"></i> Dashboard</a
            >
          </li>
          <li>
            <a href="?hal=pelanggaran"
              ><i class="fas fa-list"></i> Kategori Pelanggaran</a
            >
          </li>
          <li>
            <a href="listpelanggran.html"
              ><i class="fas fa-exclamation-triangle"></i> List Pelanggaran</a
            >
          </li>
          <li>
            <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
          </li>
        </ul>
      </div>
      <section class="main">
        <?php include "konten.php" ?>
      </section>
    <div class="footer">
      By Made <i class="fas fa-heart"></i> by TechnoMancers
      <i class="fas fa-smile"></i> 2025
    </div>
  </body>
</html>


<?php
}
?>
