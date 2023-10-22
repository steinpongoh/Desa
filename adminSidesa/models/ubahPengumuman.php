<?php
include '../templates/header.php';
require '../functions/pengumuman.php';

$pageName = 'Ubah Pengumuman';
$getId = $_GET['id'];
$queryPengumuman = query("SELECT * FROM pengumuman WHERE id='$getId'")[0];

if (isset($_POST['submit'])) {
    if (ubahPengumuman($_POST, $_FILES) > 0) {
        echo "
            <script>
            alert('Data Berhasil Diubah');
            document.location.href='../controllers/dataPengumuman.php';
            </script> 
        ";
    } else {
        echo "
            <script>
            alert('Data Gagal Diubah');
            </script> 
        ";
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
                    <li class="breadcrumb-item"><a href="../controllers/dataBerita.php">Data Berita</a></li>
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
                        <input value="<?=$queryPengumuman['id']?>" type="hidden" id="id" name="id">
                        <div class="form-group">
                            <label for="judul_pengumuman">Judul Pengumuman</label>
                            <input value="<?=$queryPengumuman['judul_pengumuman']?>" name="judul_pengumuman" id="judul_pengumuman" autocomplete="off" type="text" class="form-control" placeholder="..." required>
                        </div>
                        <div class="form-group">
                            <label for="detail_pengumuman">Detail Pengumuman</label>
                            <textarea cols="4" rows="4" form="form" name="detail_pengumuman" id="detail_pengumuman" autocomplete="off" type="text" class="form-control" placeholder required><?=$queryPengumuman['detail_pengumuman']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pengumuman">Tanggal Pengumuman</label>
                            <input value="<?=$queryPengumuman['tanggal_pengumuman']?>" name="tanggal_pengumuman" id="tanggal_pengumuman" autocomplete="off" type="datetime-local" class="form-control" placeholder="..." required>
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