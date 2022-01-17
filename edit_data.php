<?php include 'header.php'; ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Edit Data Mahasiswa</h1>
    </div>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $qry = "SELECT * FROM tb_mahasiswa WHERE id_mhs='$id'";
    $data = mysqli_query($koneksi, $qry);
    $d = mysqli_fetch_assoc($data);
    ?>
    <div class="card-body">
        <form action="" method="GET">
            <div class="form-row">
                <div class="mb-3 form-group col-md-6">
                    <input type="hidden" name="id_mhs" value="<?= $d['id_mhs'] ?>">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type=text name=nama size=15 class=form-control value="<?= $d['nama_mhs'] ?>" required>
                </div>
                <div class="mb-3 form-group col-md-6">
                    <label for="alamat">Alamat Mahasiswa</label>
                    <input type=text name=alamat size=25 class=form-control value="<?= $d['alamat_mhs'] ?>" required>
                </div>
                <div class="mb-3 form-group col-md-6">
                    <label for="jk">ID Jenis Kelamin</label>
                    <input type=text name=jk size=25 class=form-control value="<?= $d['id_jeniskelamin'] ?>" required>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-outline-secondary">Simpan Data</button>
        </form>
    </div>
    </div>
    <?php
    if (isset($_GET['submit'])) {
        $id_mhs = $_GET['id_mhs'];
        $nama = $_GET['nama'];
        $alamat  = $_GET['alamat'];
        $id_jk = $_GET['jk'];
        $qry = "UPDATE tb_mahasiswa SET nama_mhs='$nama', alamat_mhs='$alamat', id_jeniskelamin='$id_jk' WHERE id_mhs='$id_mhs'";
        $simpan = mysqli_query($koneksi, $qry);

        if ($simpan) {
            echo  '<script>
                window.alert("Data Berhasil Diubah")
                window.location = "index.php"
            </script>';
        }
    }
    include 'footer.php';
    ?>