<?php
require '../functions/pengaduan.php';
$id = $_GET['id'];

// Lakukan query untuk mengambil data pengaduan
$query = query("SELECT * FROM pengaduan WHERE id = $id");

if ($query) {
    // Update status pengaduan
    $result = "UPDATE pengaduan SET status = '2' WHERE id = '$id'";
    $update = mysqli_query($dbconnect, $result);

    if ($update) {
        // Jika query berhasil dieksekusi
        echo "
            <script>
                alert('Pengaduan Berhasil ditolak');
                window.location.href = '../controllers/dataPengaduan.php';
            </script> 
        ";
    } else {
        // Jika query gagal dieksekusi
        echo "Gagal mengupdate status pengaduan: " . mysqli_error($dbconnect);
    }
} else {
    // Jika query untuk mengambil data pengaduan gagal
    echo "Gagal mengambil data pengaduan: " . mysqli_error($dbconnect);
}
