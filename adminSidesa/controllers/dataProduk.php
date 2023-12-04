<?php
require '../functions/umkm.php';
include '../templates/header.php';
$pageName = 'Data Produk';


$queryProduk = query('SELECT DISTINCT
penduduk.nama,
penduduk.nik,
penjual.id_penjual,
penjual.nama_penjual,
penjual.no_telepon,
penjual.alamat_toko,
produk.id_produk,
produk.id_penjual,
produk.nama_produk,
produk.harga,
produk.gambar,
produk.deskripsi 

FROM produk 
JOIN penjual ON produk.id_penjual=penjual.id_penjual
JOIN penduduk ON penjual.nama_penjual=penduduk.id');

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
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
                    <a href="../models/tambahProduk.php">
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
                                    <th>Penjual</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Penjual</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($queryProduk as $rows) { ?>
                                    <tr>
                                        <td>
                                            <?= $i ?>
                                        </td>
                                        <td>
                                            <?php echo $rows['nama'] ?>
                                        </td>
                                        <td>
                                            <?php echo $rows["nama_produk"] ?>
                                        </td>
                                        <td>Rp
                                            <?php echo $rows["harga"] ?>
                                        </td>
                                        <td>
                                            <img width="60px" height="60px"
                                                src="../../img/umkm/<?php echo $rows['gambar'] ?>" alt="">
                                        </td>
                                        <?php
                                        // Menampilkan hanya beberapa kata dari paragraf pertama
                                        $deskripsiParagraf = explode(" ", $rows['deskripsi']); // Membagi paragraf menjadi array kata-kata
                                        $jumlahKataTampil = 10; // Ganti dengan jumlah kata yang ingin ditampilkan
                                    
                                        if (count($deskripsiParagraf) > $jumlahKataTampil) {
                                            $deskripsiSingkat = implode(" ", array_slice($deskripsiParagraf, 0, $jumlahKataTampil)); // Mengambil sejumlah kata
                                            echo '<div class="text-truncate"><td>' . $deskripsiSingkat . '...</td></div>';
                                        } else {
                                            echo '<div class="text-truncate"><td>' . $rows['deskripsi'] . '</td></div>';
                                        }
                                        ?>

                                        <td class="flex-row pr-2 align-items-center justify-content-center"
                                            style="display: flex;">
                                            <a href="javascript:void(0);" data-toggle="modal"
                                                data-target="#hapusModal<?= $rows['id_produk'] ?>"
                                                data-id="<?= $rows['id_produk'] ?>">
                                                <button type="button" class="btn btn-danger m-1">
                                                    <div class="sb-nav-link-icon mr-1 ml-1 mb-0 mt-0"><i
                                                            class="fa-solid fa-trash"></i></div>
                                                </button>
                                            </a>
                                            <a href="../models/ubahProduk.php?id=<?= $rows['id_produk']; ?>">
                                                <button type="button" class="btn btn-warning">
                                                    <div class="sb-nav-link-icon mr-0 ml-1 mb-0 mt-0"><i
                                                            class="fa-solid fa-pen"></i></div>
                                                </button>
                                            </a>
                                            <div class="modal fade" id="hapusModal<?= $rows['id_produk'] ?>" tabindex="-1"
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
                                                            <a href="../models/hapusProduk.php?id=<?= $rows['id_produk']; ?>"
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

<?php include '../templates/footer.php' ?>;