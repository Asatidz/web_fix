<?php
    if(!defined('INDEX')) die("");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggaran</title>
</head>
<body>
            <div class="main-content">
                <h1>Kategori Pelanggaran</h1>
                <a href="?hal=pelanggaran_tambah" class="tambah">Add Pelanggaran</a>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggaran</th>
                                <th>Point</th>
                                <th>Kode Pelanggaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                $query = "select * from pelanggaran order by id_pelanggaran desc";
                $result = mysqli_query($con,$query);
                $no = 0;
                while($data = mysqli_fetch_array($result)){
                    $no++;
                
                ?>
                <tr>
                <td><?= $no ?></td>
                <td><?= $data['nama_pelanggaran'] ?></td>
                <td class="action-icons">
                    <a href="?hal=pelanggaran_editt&id=<?= $data['id_pelanggaran'] ?>"><i class="fas fa-edit"></i></a>
                    <a href="?hal=pelanggaran_hapus&id=<?= $data['id_pelanggaran'] ?>"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
        <?php
        }
        ?>
          </tbody>
          </table>
      </div>
  </div>
</body>
</html>