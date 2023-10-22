<?php
require '../functions/pengaduan.php';
include '../templates/header.php';

$id=$_GET['id'];
$queryPengaduan = query("SELECT * FROM pengaduan WHERE id='$id'")[0];

$pageName='Balasan';

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $pageName ?></h1>
            <ol class="breadcrumb mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="../controllers/dataPengaduan.php">Pengaduan</a></li>
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
                    <form name="form" id="form" action="notifikasi.php" method="post" enctype="multipart/form-data">
                    <input name="id" value="<?=$id?>" autocomplete="off" type="hidden" required>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" value="<?=$queryPengaduan['email']?>" id="email" autocomplete="off" type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="pesan" id="deskripsi" autocomplete="off" type="text" class="form-control" placeholder="Isikan balasan ke Pengadu!" required></textarea>
                        </div>
                        <button name="submit" id="submit" type="submit" class="btn btn-primary">Submit</button>
                        <a href="../models/tolakPengaduan.php?id=<?=$id?>" class="btn btn-danger"><i class="bi bi-exclamation"></i>Tolak Pengaduan</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
</div>

<?php include '../templates/footer.php'; ?>