<?php
require '../functions/berita.php';
include '../templates/header.php';

$pageName = 'Data Berita';
$queryBerita = query('SELECT * FROM berita');

?>

<div id="layoutSidenav_content">
    <div class="container-fluid">
        <main>
            <h1 class="mt-4">
                <?= $pageName ?>
            </h1>
            <ol class="breadcrumb mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/sidesa/adminSidesa/index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">
                        <?= $pageName ?>
                    </li>
                </ol>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <div>
                        <i class="fas fa-table mr-1 position-relative"></i>
                        <?= $pageName ?>
                    </div>
                    <a href="../models/tambahBerita.php">
                        <button type="button" class="btn btn-success">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-square-plus mr-2"></i>Tambah</div>
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Judul Berita</th>
                                    <th>Tanggal Berita</th>
                                    <th>Detail Berita</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Judul Berita</th>
                                    <th>Tanggal Berita</th>
                                    <th>Detail Berita</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($queryBerita as $rows) { ?>
                                    <tr>
                                        <td>
                                            <?= $i ?>
                                        </td>
                                        <td>
                                            <?php echo $rows['judul_berita'] ?>
                                        </td>
                                        <td>
                                            <?php echo date('d M Y', strtotime($rows['tanggal_berita'])) ?>
                                        </td>
                                        <td style="color:grey;">
                                            <?php echo substr($rows['detail_berita'], 0, 15) ?>
                                        </td>
                                        <td>
                                            <img width="60px" height="60px"
                                                src="../../img/berita/<?php echo $rows['gambar'] ?>" alt="">
                                        </td>
                                        <td class="flex-row pr-2 align-items-center justify-content-center"
                                            style="display: flex;">
                                            <a href="javascript:void(0);" data-toggle="modal"
                                                data-target="#hapusModal<?= $rows['id'] ?>" data-id="<?= $rows['id'] ?>">
                                                <button type="button" class="btn btn-danger m-1">
                                                    <div class="sb-nav-link-icon mr-1 ml-1 mb-0 mt-0"><i
                                                            class="fa-solid fa-trash"></i></div>
                                                </button>
                                            </a>
                                            <a href="../models/ubahBerita.php?id=<?= $rows['id']; ?>">
                                                <button type="button" class="btn btn-warning">
                                                    <div class="sb-nav-link-icon mr-0 ml-1 mb-0 mt-0"><i
                                                            class="fa-solid fa-pen"></i></div>
                                                </button>
                                            </a>
                                            <div class="modal fade" id="hapusModal<?= $rows['id'] ?>" tabindex="-1"
                                                role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus item ini?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Batal</button>
                                                            <a href="../models/hapusBerita.php?id=<?= $rows['id']; ?>"
                                                                class="text-decoration-none">
                                                                <button type="button" class="btn btn-danger"
                                                                    id="hapusButton">Hapus</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php include '../templates/footer.php'; ?>