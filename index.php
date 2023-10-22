<?php
include 'templates/header.php';
include 'function.php';
$jumlahPenduduk = count(query('SELECT * FROM penduduk'));
$jumlahKepalaKeluarga = count(query('SELECT * FROM keluarga'));
$jumlahPria = count(query('SELECT * FROM penduduk WHERE jenis_kelamin = "Pria"'));
$jumlahWanita = count(query('SELECT * FROM penduduk WHERE jenis_kelamin = "Wanita"'))
?>

<!-- Home -->
<section id="home" class="home w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center align-items-center text-white">
  <main>
    <h3 class="animate__animated animate__slideInLeft">SISTEM INFORMASI</h3>
    <h1 class="animate__animated animate__slideInRight">DESA TONDANGOW</h1>
  </main>
</section>
<!-- Home -->

<!-- Highlight Berita Start -->
<section id="highlight" class="highlight">
  <div class="row justify-content-center">
    <div class="col-md-8 col-10 text-center mb-3" data-aos="fade-left">
      <h2>Berita</h2>
    </div>
    <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="col-md-6 mx-auto p-5">
            <div class="card mb-3 border-2 border-black border-opacity-50 shadow">
              <div class="row g-0">
                <div class="col-md-4 p-2">
                  <img src="img/desa.jpg" class="img-fluid object-fit-cover rounded-start-4 h-100" alt="...">
                </div>
                <div class="col-md-8 ">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">Card title 1</h5>
                    <p class="card-text fs-6">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text fs-6"><small class="text-body-secondary">Tanggal Berita</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item active">
          <div class="col-md-6 mx-auto p-5">
            <div class="card mb-3 border-2 border-black border-opacity-50 shadow">
              <div class="row g-0">
                <div class="col-md-4 p-2">
                  <img src="img/desa.jpg" class="img-fluid object-fit-cover rounded-start-4 h-100" alt="...">
                </div>
                <div class="col-md-8 ">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">Card title 2</h5>
                    <p class="card-text fs-6">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text fs-6"><small class="text-body-secondary">Tanggal Berita</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item active">
          <div class="col-md-6 mx-auto p-5">
            <div class="card mb-3 border-2 border-black border-opacity-50 shadow">
              <div class="row g-0">
                <div class="col-md-4 p-2">
                  <img src="img/desa.jpg" class="img-fluid object-fit-cover rounded-start-4 h-100" alt="...">
                </div>
                <div class="col-md-8 ">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">Card title 3</h5>
                    <p class="card-text fs-6">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text fs-6"><small class="text-body-secondary">Tanggal Berita</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-secondary rounded" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-secondary rounded" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>
</section>


<!-- Highlight Berita End-->


<!-- Statistik Kependudukan -->
<section id="statistik" class="statistik">
  <div class="row justify-content-center">
    <div class="col-md-8 text-center" data-aos="fade-down-left">
      <h2>Statistik Kependudukan</h2>
      <div class="col-md-6 mt-4 d-flex justify-content-between align-items-center w-100">
        <span><i class="bi bi-people"></i><br />
          <h2><?php echo $jumlahPenduduk; ?></h2>
          <h5>Jumlah Penduduk</h5>
        </span>
        <span><i class="bi bi-person-vcard"></i><br />
          <h2><?php echo $jumlahKepalaKeluarga ?></h2>
          <h5>Kepala Keluarga</h5>
        </span>
        <span><i class="bi bi-gender-male"></i><br />
          <h2><?php echo $jumlahPria ?></h2>
          <h5>Laki-Laki</h5>
        </span>
        <span><i class="bi bi-gender-female"></i><br />
          <h2><?php echo $jumlahWanita ?></h2>
          <h5>Perempuan</h5>
        </span>
      </div>
    </div>
  </div>
</section>
<!-- Statistik Kependudukan -->
<?php include 'templates/footer.php'; ?>