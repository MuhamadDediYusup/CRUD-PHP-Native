<?php
include 'header.php';
include 'koneksi.php';
?>

<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Mahasiswa</h1>
        <div class="btn-group mr-2">
            <a href="tambah_data.php" type="button" class="btn btn-sm btn-outline-secondary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <form action="" method="GET">
        <div class="input-group col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <input type=" text" class="form-control" placeholder="Cari Data Mahasiswa" name="cari">
            <div class="input-group-append">
                <input class="btn btn-secondary" type="submit" name="submit" value="Search">
                </input>
            </div>
        </div>
    </form> <br>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover text-center ">
                <thead>
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_GET['submit'])) {
                        $cari = $_GET['cari'];
                        $sql = "SELECT * FROM tb_mahasiswa LEFT JOIN tb_jeniskelamin ON tb_mahasiswa.id_jeniskelamin = tb_jeniskelamin.id WHERE nama_mhs LIKE '%$cari%'";
                    } else {
                        $sql = "SELECT * FROM tb_mahasiswa LEFT JOIN tb_jeniskelamin ON tb_mahasiswa.id_jeniskelamin = tb_jeniskelamin.id ORDER BY tb_mahasiswa.nama_mhs ASC";
                    }
                    $hasil = mysqli_query($koneksi, $sql);
                    while ($d = mysqli_fetch_assoc($hasil)) { ?>
                        <tr>
                            <td><?= $d['nama_mhs'] ?></td>
                            <td><?= $d['alamat_mhs'] ?></td>
                            <td><?= $d['nama'] ?></td>
                            <td><a href="hapus.php?id=<?= $d['id_mhs'] ?>" onclick="return confirm('Yakin Dihapus?');">Hapus</a></td>
                            <td><a href="edit_data.php?id=<?= $d['id_mhs'] ?>">Edit</a></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include 'footer.php'; ?>