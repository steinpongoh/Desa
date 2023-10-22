<?php
require '../functions/general.php';
$query = query('SELECT * FROM pengaduan');
$date = date('d/M/Y', time());

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment;filename=Laporan Pengaduan $date.xls");
?>
<style>
    .str {
        mso-number-format: \@;
    }
</style>

<body style="width: 100%; display:flex; align-items:center; justify-content:center; flex-direction:column; font-family:Arial;">
    <h1>Data Pengaduan</h1>

    <table border="1" width="75%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengadu</th>
                <th>Alamat Lengkap</th>
                <th>Email</th>
                <th>Judul Pengaduan</th>
                <th>Detail Pengaduan</th>
                <th>Tanggal Pengaduan</th>
                <th>Nomor Telepon</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($query as $rows) { ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?php echo $rows['nama_pengadu'] ?></td>
                    <td><?php echo $rows['alamat_lengkap'] ?></td>
                    <td><?php echo $rows['email'] ?></td>
                    <td><?php echo $rows['judul_pengaduan'] ?></td>
                    <td style="color:grey;"><?php echo $rows['detail_pengaduan'] ?></td>
                    <td><?php echo date('d M Y H:i', strtotime($rows['tanggal_pengaduan'])) ?></td>
                    <td><?php echo $rows['no_telepon'] ?></td>
                    <td>
                        <img width="60px" height="60px" src="/sidesa/img/pengaduan/<?php echo $rows['gambar'] ?>" alt="">
                    </td>
                </tr>
                <?php $i++ ?>
            <?php } ?>
        </tbody>
</body>