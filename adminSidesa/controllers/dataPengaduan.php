<?php
require '../functions/pengaduan.php';
include '../templates/header.php';

$pageName = 'Data Pengaduan';
$queryPengaduan = query('SELECT * FROM pengaduan');

?>

<div id="layoutSidenav_content">
    <div class="container-fluid">
        <main>
            <h1 class="mt-4">
                <?= $pageName ?>
            </h1>
            <ol class="breadcrumb mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
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
                    <a style="text-decoration:none;" class="m-0 mr-2" href="../models/laporanPengaduan.php">
                        <button type="button" class="btn btn-success">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-download"></i> Unduh Data</div>
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Pengadu</th>
                                    <th>Alamat Lengkap</th>
                                    <th>Email</th>
                                    <th>Judul Pengaduan</th>
                                    <th>Detail Pengaduan</th>
                                    <th>Tanggal Pengaduan</th>
                                    <th>Nomor Telepon</th>
                                    <th>Gambar</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Pengadu</th>
                                    <th>Alamat Lengkap</th>
                                    <th>Email</th>
                                    <th>Judul Pengaduan</th>
                                    <th>Detail Pengaduan</th>
                                    <th>Tanggal Pengaduan</th>
                                    <th>Nomor Telepon</th>
                                    <th>Gambar</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($queryPengaduan as $rows) { ?>
                                    <tr>
                                        <td>
                                            <?= $i ?>
                                        </td>
                                        <td>
                                            <?php echo $rows['nama_pengadu'] ?>
                                        </td>
                                        <td>
                                            <?php echo $rows['alamat_lengkap'] ?>
                                        </td>
                                        <td>
                                            <?php echo $rows['email'] ?>
                                        </td>
                                        <td>
                                            <?php echo $rows['judul_pengaduan'] ?>
                                        </td>
                                        <td style="color:grey;">
                                            <?php echo substr($rows['detail_pengaduan'], 0, 15) ?>......
                                        </td>
                                        <td>
                                            <?php echo date('d M Y H:i', strtotime($rows['tanggal_pengaduan'])) ?>
                                        </td>
                                        <td>
                                            <?php echo $rows['no_telepon'] ?>
                                        </td>
                                        <td>
                                            <img width="60px" height="60px"
                                                src="../../img/pengaduan/<?php echo $rows['gambar'] ?>" alt="">
                                        </td>
                                        <td>
                                            <?php if ($rows['status'] == '1') { ?>
                                                <div class="badge bg-success text-white">Pengaduan telah ditinjau</div>
                                            <?php } ?>
                                            <?php if ($rows['status'] == '2') { ?>
                                                <div class="badge bg-danger">Pengaduan tidak Valid</div>
                                            <?php } ?>
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
                                            <a href="../templates/balasan.php?id=<?= $rows['id']; ?>">
                                                <button type="button" class="btn btn-success ml-2">
                                                    <div class="sb-nav-link-icon mr-0 ml-0 mb-0 mt-0"><i
                                                            class="fa-solid fa-envelope"></i></div>
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
                                                            <a href="../models/hapusPengaduan.php?id=<?= $rows['id']; ?>"
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
    </div>
    </main>
</div>
</div>

<?php include '../templates/footer.php'; ?>