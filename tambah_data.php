<?php include 'header.php'; ?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Tambah Data Mahasiswa</h1>
    </div>
    <div class="card-body">
        <form action="" method="GET">
            <div class="form-row">
                <div class="mb-3 form-group col-md-6">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type=text name=nama size=15 class=form-control placeholder="Silahkan Masukan Nama" required>
                </div>
                <div class="mb-3 form-group col-md-6">
                    <label for="alamat">Alamat Mahasiswa</label>
                    <input type=text name=alamat size=25 class=form-control placeholder="Silahkan Masukan Alamat" required>
                </div>
                <div class="mb-3 form-group col-md-6">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select example" name="jk">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="1">Laki - Laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-outline-secondary">Simpan Data</button> <button type=reset class="btn btn-outline-secondary">Reset</button>
        </form>
    </div>
    </div>
    <?php
    include 'koneksi.php';
    if (isset($_GET['submit'])) {
        $nama = $_GET['nama'];
        $alamat  = $_GET['alamat'];
        $jenis_kelamin = $_GET['jk'];
        $qry = "INSERT INTO tb_mahasiswa VALUES('','$nama','$alamat','$jenis_kelamin')";
        $simpan = mysqli_query($koneksi, $qry);
        if ($simpan) {
            echo  '<script>
                window.alert("Data Berhasil Disimpan")
                window.location = "index.php"
            </script>';
        }
    }
    ?>

    <?php include 'footer.php'; ?>