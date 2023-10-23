<?php
require '../functions/danaDesa.php';
// include '../templates/header.php';

$pageName = 'Tambah Dana Desa';
if (isset($_POST['submit'])) {
    if (tambahDanadesa($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Ditambah')
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Ditambah')
        </script>";
    }
}
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $pageName ?></h1>
            <ol class="breadcrumb mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="../controllers/dataDanadesa.php">Data Dana Desa</a></li>
                    <li class="breadcrumb-item active"><?= $pageName ?></li>
                </ol>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <div>
                        <i class="fas fa-table mr-1 position-relative"></i>
                        Form <?= $pageName ?>
                    </div>
                </div>
                <div class="card-body">
                    <form name="form" id="form" action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="informasi">Judul Berita</label>
                            <input name="informasi" id="informasi" autocomplete="off" type="text" class="form-control" placeholder="Tuliskan judul berita" required>
                        </div>
                        <div class="form-group">
                            <label for="detail">Detail Berita</label>
                            <textarea cols="4" rows="4" form="form" name="detail" id="detail" autocomplete="off" type="text" class="form-control" placeholder="Tambahkan detail..." required></textarea>
                        </div>
                        <button name="submit" id="submit" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
</div>


<?php include '../templates/footer.php' ?>