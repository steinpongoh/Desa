<?php
require '../functions/user.php';
include '../templates/header.php';

$pageName = 'Data User';
$queryuser = query('SELECT * FROM user');

?>

<div id="layoutSidenav_content">
    <div class="container-fluid">
        <main>
            <h1 class="mt-4"><?= $pageName ?></h1>
            <ol class="breadcrumb mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active"><?= $pageName ?></li>
                </ol>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <div>
                        <i class="fas fa-table mr-1 position-relative"></i>
                        <?= $pageName ?>
                    </div>
                    <a href="../models/tambahUser.php">
                        <button type="button" class="btn btn-success">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-square-plus mr-2"></i>Tambah</div>
                        </button>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Password</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Password</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($queryuser as $rows) { ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?php echo $rows['username'] ?></td>
                                        <td><?php echo $rows['password'] ?></td>
                                        <td class="flex-row pr-2 align-items-center justify-content-center" style="display: flex;">
                                            
                                                <button class="button btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $rows['id'] ?>">
                                                    <div class="sb-nav-link-icon mr-1 ml-1 mb-0 mt-0"><i class="fa-solid fa-trash"></i></div>
                                                </button>
                                            
                                            <a href="../models/ubahpassword.php?id=<?= $rows['id']; ?>">
                                                <button type="button" class="btn btn-warning ml-2">
                                                    <div class="sb-nav-link-icon mr-0 ml-1 mb-0 mt-0"><i class="fa-solid fa-pen"></i></div>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                    <!-- Modal Hapus Data -->
                                    <div class="modal" id="exampleModal<?= $rows['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Hapus Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Yakin mau hapus User ini?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="../models/hapusUser.php?id=<?= $rows['id'] ?>">Ya</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
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