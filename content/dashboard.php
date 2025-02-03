<?php
if(!defined('INDEX')) die("");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div class="content">
        <h1>Dashboard</h1>
        <div class="stats">
          <div class="stat">
            <h3>Jumlah siswa</h3>
            <p>5</p>
          </div>
          <div class="stat">
            <h3>Jumlah pelanggaran</h3>
            <p>5</p>
          </div>
        </div>
        <div class="tables">
          <div class="table">
            <h3>Top Pelanggaran</h3>
            <table>
              <tr>
                <th>No.</th>
                <th>Nama Pelanggaran</th>
                <th>Total Pelanggaran</th>
              </tr>
              <tr>
                <td>1.</td>
                <td>Seragam Tidak Rapi</td>
                <td>10</td>
              </tr>
            </table>
          </div>
          <div class="table">
            <h3>Top Siswa</h3>
            <table>
              <tr>
                <th>No.</th>
                <th>Nama Siswa</th>
                <th>Jumlah</th>
              </tr>
              <tr>
                <td>1.</td>
                <td>Anindya Zifara</td>
                <td>10</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
</body>
</html>