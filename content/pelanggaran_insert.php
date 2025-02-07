<?php
if(!defined('INDEX')) die("");

$nama = $_POST['nama'];
$poin = $_POST['poin'];
$kode = $_POST['kode'];

    $query  = "INSERT INTO pelanggaran SET ";
    $query .= "nama_pelanggaran = '$nama', ";
    $query .= "poin = '$poin', ";
    $query .= "kode_pelanggaran = '$kode'";
$result = mysqli_query($con,$query);

if ($result) {
    echo "pelanggaran <b>$nama</b> berhasil disimpan";
    echo "<meta http-equiv='refresh' content='2; url=?hal=pelanggaran'>";
}else{
    echo "tidak dapat menyimpan";
    echo mysqli_error();
}
?>