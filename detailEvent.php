<?php
include 'templates/header.php';
require 'function.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Gunakan prepared statement untuk mencegah SQL injection
    $query = mysqli_prepare($dbconnect, "SELECT * FROM event WHERE id = ?");
    mysqli_stmt_bind_param($query, 'i', $id);
    mysqli_stmt_execute($query);
    $result = mysqli_stmt_get_result($query);

    if ($result && $event = mysqli_fetch_array($result)) {
        $input = $event['detail_acara'];
        $pecah = explode("\r\n\r\n", $input);

        echo '<section class="detailEvent" id="detailEvent">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h2>' . $event['judul_acara'] . '</h2>
                            <p class="text-start">' . $event['tanggal_acara'] . '</p>
                            <div class="col-md-4 img-detail">
                                <img src="img/event/' . $event['gambar'] . '" class="mx-auto d-block" alt="">
                            </div>
                            <div class="col-md-8 justify-content-center w-100 isi-event" style="word-wrap: break-word;">';

        foreach ($pecah as $paragraph) {
            // Menggunakan strip_tags untuk membersihkan teks dari tag HTML yang tidak valid
            echo '<p>' . strip_tags($paragraph) . '</p>';
        }

        echo '</div>
                    </div>
                </div>
            </div>
        </section>';
    } else {
        echo "Berita tidak ditemukan.";
        exit();
    }
} else {
    echo "ID berita tidak valid.";
    exit();
}
?>
                            <a href="<?= $event['link_lokasi'] ?>" class="position-absolute top-80 start-50 translate-middle" target="_blank"> 
                                <button type="button" class="btn btn-danger"><i class="bi bi-geo-alt"></i> Lokasi</button>
                            </a>

<?php
include 'templates/footer.php';
?>
