<?php
if(!defined('INDEX')) die("");

$id = $_GET['id'];
$query = "select * from pelanggaran where id_pelanggaran='$id'";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);


?>


<h2 class="judul">Edit Pegawai</h2>
        <form action="?hal=pelanggaran_update" method="post">
          <!-- input foto -->
           <input type="hidden" name="id" value="<?= $data['id_pelanggaran']?>">
          <div class="form-group">
            <label for="nama">Nama Pelanggaran</label>
            <div class="input">
              <input type="text" name="nama" id="nama" value="<?=$data['nama_pelanggaran']?>"/>
            </div>
          </div>
          <div class="form-group">
            <label for="poin">Poin</label>
            <div class="input">
              <input type="text" name="poin" id="poin" value="<?=$data['poin']?>"/>
            </div>
          </div>
          <div class="form-group">
            <label for="kode">Kode Pelanggaran</label>
            <div class="input">
              <input type="text" name="kode" id="kode" value="<?=$data['kode_pelanggaran']?>"/>
            </div>
          </div>

          <!-- input nama -->
          <div class="form-group">
            <input type="reset" value="Reset" class="tombol reset">
            <input type="submit" value="Simpan" class="tombol simpan">
          </div>
        </form>