<?php
session_start();
if (!isset($_SESSION['username'])) {
  echo "<script>alert('Maaf, anda belum login, silahkan login terlebih dahulu');location.href='login.php'</script>";
}
?>
<html>

<head>
  <title>DASHBOARD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<style>
  h1 {
    color: blue;
  }
</style>

<body>
  <section>
    <nav class="navbar navbar-expand-lg bg-info">
      <div class="container-fluid">
        <a class="navbar-brand" href=""></a>
        <img src="logoapotek1.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">PRIMA FARMA
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                DAFTAR TABEL
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./view/viewobat.php">TABEL OBAT</a></li>
                <li><a class="dropdown-item" href="./view/viewpelanggan.php">TABEL PELANGGAN</a></li>
                <li><a class="dropdown-item" href="./view/viewkaryawan.php">TABEL KARYAWAN</a></li>
                <li><a class="dropdown-item" href="./view/viewsupplier.php">TABEL SUPPLIER</a></li>
                <li><a class="dropdown-item" href="./view/viewtransaksi.php">TABEL TRANSAKSI</a></li>
                <li><a class="dropdown-item" href="./tambah/insertdetail_transaksi.php">TABEL DETAIL TRANSAKSI</a></li>
              </ul>
            </li>
          </ul>
          <div class="d-flex" role="search">
            <a class="btn btn-outline-danger" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
  </section>
  <br />
  <br />
  <div class="container overflow-hidden">
    <div class="row">
      <div class="col-md-6">
        <img src="dashboardaptk.jpg" alt="mlbb" width="350" height="350">
      </div>
      <div class="col-md-6">
        <h3>Hi <?php echo $_SESSION['leveluser'] ?><?php echo $_SESSION['username'] ?>
          ,Welcome to Dashboard</h3>
        <br />
        <h1>PRIMA FARMA WEBSITE</h1>
        <br />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <br />
        <br />
      </div>
    </div>
    <br />
    <br />
    <br />
    <!-- Projects -->
    <section id="proyek">

      <center>
        <h1>Documentation</h1>
      </center>
      <br />
      <br />
      <br />
      <center><img src="d2.jpg" alt="p1" width="690" height="410" data-aos="fade-left"></center>
      <br />
      <br />
      <br />
      <center><img src="d3.jpg" alt="p2" width="690" height="410" data-aos="fade-left"></center>
      <br />
      <br />
      <br />
      <center><img src="d4.jpg" alt="p3" width="690" height="410" data-aos="fade-left"></center>
    </section>
  </div>
  </section>
  <br />
  <br />
  <br />
  <!-- about -->
  <section id="about">
    <center>
      <h1>Why Choose Here?</h1>
    </center>
    <br />
    <br />
    <br />
    <br />
    <div class="container overflow-hidden">
      <div class="row">
        <div class="col-md-3">
          <img src="dashboardaptk.jpg" alt="mlbb" width="100" class="rounded-circle img-thumbnail">
          <br />
          <br />
          <h4>Patience</h4>
          <br />
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
        </div>
        <div class="col-md-3">
          <img src="dashboardaptk.jpg" alt="mlbb" width="100" class="rounded-circle img-thumbnail">
          <br />
          <br />
          <h4>Responsibilities</h4>
          <br />
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
        </div>
        <div class="col-md-3">
          <img src="dashboardaptk.jpg" alt="mlbb" width="100" class="rounded-circle img-thumbnail">
          <br />
          <br />
          <h4>Profesional</h4>
          <br />
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
        </div>
        <div class="col-md-3">
          <img src="dashboardaptk.jpg" alt="mlbb" width="100" class="rounded-circle img-thumbnail">
          <br />
          <br />
          <h4>Active</h4>
          <br />
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
        </div>
      </div>
    </div>
  </section>
  <br />
  <br />
  <!-- skill -->
  <section>
    <br />
    <br>
    <center>
      <h1>In Association With : </h1>
    </center>
    <br />
    <br />
    <div class="container overflow-hidden">
      <div class="row">
        <div class="col-md-3">
          <img src="kf.jpg" width="95">
        </div>
        <div class="col-md-3">
          <img src="sh.png" width="95">
        </div>
        <div class="col-md-3">
          <img src="w.png" width="95">
        </div>
        <div class="col-md-3">
          <img src="ki.png" width="115">
        </div>
      </div>
      <br />
      <br />
  </section>
  <br />
  <br />
  <br />
  <br />
  <section id="kontak">
    <footer class="bg-info text-white text-center pb-5">
      <br />
      <div style="text-align: left;">
        <h2> Get In Touch</h2>
      </div>
      <br />
      <br />
      <div style="text-align: left;">
        <h4> for business Inquiry please send email to : primafarma@gmail.com </h4>
      </div>
      <div class="row">
        <div class="col-md-4">
        </div>
      </div>
    </footer>
    </nav>
</body>

</html>