<?php
if(!defined('INDEX')) die("");
?>


<h2 class="judul">Tambah Pelanggaran</h2>
        <form action="?hal=pelanggaran_insert" method="post">
          <!-- input foto -->
          <div class="form-group">
            <label for="nama">Nama Pelanggaran</label>
            <div class="input">
              <input type="text" name="nama" id="nama" />
            </div>
          </div>
            <div class="form-group">
            <label for="poin">Poin</label>
            <div class="input">
              <input type="number" name="poin" id="poin">
            </div>
          </div>
        <div class="form-group">
            <label for="kode_poin">Kode Poin</label>
            <div class="input">
              <input type="number" name="kode_poin" id="kode_poin">
            </div>
          </div>

          <!-- input nama -->
          <div class="form-group">
            <input type="reset" value="Reset" class="tombol reset">
            <input type="submit" value="Simpan" class="tombol simpan">
          </div>
        </form>