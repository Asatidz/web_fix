<?php
if(!defined('INDEX')) die("");

$nama_pelanggaran = $_POST['nama'];
$query = "insert into pelanggaran set nama_pelanggaran = '$nama_pelanggaran'";
$result = mysqli_query($con,$query);

if ($result) {
    echo "pelanggaran <b>$nama_pelanggaran</b> berhasil disimpan";
    echo "<meta http-equiv='refresh' content='2; url=?hal=pelanggaran'>";
}else{
    echo "tidak dapat menyimpan";
    echo mysqli_error();
}
?>