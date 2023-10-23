<?php
require '../functions/event.php';
// include '../templates/header.php';

$pageName='Tambah Event';
if (isset($_POST['submit'])) {
    if (tambahEvent($_POST,$_FILES) > 0) {
        echo "<script>
            alert('Data Berhasil Ditambah')
            document.location.href='../controllers/dataEvent.php'
        </script>";
    } else {
        echo "<script>
            alert('Data Berhasil Ditambah')
            document.location.href='../controllers/dataEvent.php'
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
                    <li class="breadcrumb-item"><a href="../controllers/dataEvent.php">Data Galeri</a></li>
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
                            <label for="judul_acara">Judul Acara</label>
                            <input name="judul_acara" id="judul_acara" autocomplete="off" type="text" class="form-control" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="detail_acara">Detail Acara</label>
                            <textarea cols="4" rows="4" form="form" name="detail_acara" id="detail_acara" autocomplete="off" type="text" class="form-control" placeholder required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <input name="lokasi" id="lokasi" autocomplete="off" type="text" class="form-control" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_acara">Tanggal Acara</label>
                            <input name="tanggal_acara" id="tanggal_acara" autocomplete="off" type="date" class="form-control" placeholder="..." required>
                        </div>
                        <div class="mb-3">
                            <label for="namaFile" class="form-label">Foto</label>
                            <input id="namaFile" name="namaFile" class="form-control" type="file">
                        </div>
                        <button name="submit" id="submit" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
</div>

<?php include '../templates/footer.php'; ?>