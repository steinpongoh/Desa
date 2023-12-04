<?php
include 'templates/header.php';
include 'function.php';

$queryPengaduan = query('SELECT * FROM pengaduan');

?>

<section id="pengaduan" class="pengaduan">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-down-left">
            <div class="col-md-9 text-center mb-3">
                <h1 class="text-center">Pengaduan Masyarakat</h1>
                <p class="text-center">Sistem Informasi Desa Tondangow menyediakan forum pengaduan masyarakat, apabila
                    ada masyarakat yang ingin melakukan pengaduan</p>
            </div>
            <div class="col-md-12 mb-4 float-end">
                <a href="pengaduan.php" class="float-end btn btn-danger">Buat Pengaduan
                </a>
            </div>

            <div class="col-md-12 text-center table-responsive overflow-x-auto">

                <table class="table table-bordered border-success" id="dataTable" width="100%" cellspacing="0">
                    <thead class="table-success table-bordered border-success align-middle">
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                            <th>Judul Pengaduan</th>
                            <th>Tanggal Pengaduan</th>
                            <th>Detail Pengaduan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php $i = 1 ?>
                        <?php foreach ($queryPengaduan as $rows) { ?>
                            <tr>
                                <td>
                                    <?= $i ?>
                                </td>
                                <td>
                                    <?= $rows['nama_pengadu'] ?>
                                </td>
                                <td>
                                    <?= $rows['alamat_lengkap'] ?>
                                </td>
                                <td>
                                    <img width="60px" height="60px" src="img/pengaduan/<?= $rows['gambar'] ?>" alt="">
                                </td>
                                <td>
                                    <?= $rows['judul_pengaduan'] ?>
                                </td>
                                <td>
                                    <?= date('d M Y H:i', strtotime($rows['tanggal_pengaduan'])) ?>
                                </td>
                                <?php
                                // Menampilkan hanya paragraf pertama
                                $detailBeritaParagraf = explode("\n", $rows['detail_pengaduan']);
                                echo '<td>' . $detailBeritaParagraf[0] . '</td>';
                                ?>
                                <td>
                                    <?php
                                    if ($rows['status'] == '1') { ?>
                                        <div class="badge bg-success"><i class="bi bi-check-square-fill p-2"></i>Pengaduan telah
                                            ditinjau</div>
                                    <?php } ?>
                                    <?php if ($rows['status'] == '2') { ?>
                                        <div class="badge bg-danger"><i class="bi bi-exclamation-circle-fill p-2"></i>Pengaduan
                                            tidak Valid</div>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>

<?php
include 'templates/footer.php'
    ?>