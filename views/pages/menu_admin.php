<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-default" style="background: #242D3E; border-color: #242D3E;">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#" style="color: #ffffff;">ADMIN CABANG | Beranda</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color: #ffffff;">Beranda <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffffff;">Kelola<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="?controller=produk&action=tambahProduk">Roti</a></li>
             <!--    <li><a href="#">Cabang</a></li>
                <li><a href="#">Penjualan</a></li>
                <li><a href="#">Pegawai</a></li>
                <li><a href="#">Pelanggan</a></li> -->
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #ffffff;">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="">Penjualan</a></li>
                <li><a href="?controller=laporan&action=laporanTransaksiCabang">Transaksi</a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
              </ul>
            </li>
            <li><a href="logout.php" style="color: #ffffff;">Logout</a></li>
            <li><a href="#">|</a></li>
            <li><a href="#" style="font-weight: bold; color: red;">
            <?php echo $_SESSION['login_user']; ?></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="row">
      <div class="col-md-8">
        <div class="row state-overview">

<?php foreach ($posts as $post) {
  # code...
 ?>

          <div class="col-lg-6 col-sm-6" >
            <section class="panel" style="background-image: url('resources/images/admin/1.png'); background-repeat: no-repeat;
            background-position: center ;">
            
            <div class="value" style="margin-left: 15px;">
              <h1 class="count" style="color: white;"><?php echo $post->terjual ?></h1>
              <p style="color: white;">Roti yang Terjual</p>
            </div>
          </section>
        </div>
        <div class="col-lg-6 col-sm-6">
          <section class="panel" style="background-image: url('resources/images/admin/2.png'); background-repeat: no-repeat;
          background-position: center ;">
         
          <div class="value" style="margin-left: 15px;">
            <h1 class="count2" style="color: white;"><?php echo $post->jumlah_stok ?></h1>
            <p style="color: white;">Stok Roti</p>
          </div>
        </section>
      </div>
      <div class="col-lg-6 col-sm-6" >
        <section class="panel" style="background-image: url('resources/images/admin/3.png'); background-repeat: no-repeat;
        background-position: center ;">
        
        <div class="value" style="margin-left: 15px;">
          <h1 class="count3" style="color: white;">
            <?php $jumlahPelanggan=0; foreach ($id as $pelanggan) {
              $jumlahPelanggan++;
            }

            echo $jumlahPelanggan;
             ?>



          </h1>
          <p style="color: white;">Jumlah Pelanggan Bulan ini</p>
        </div>
      </section>
    </div>
    <div class="col-lg-6 col-sm-6">
      <section class="panel" style="background-image: url('resources/images/admin/4.png'); background-repeat: no-repeat;
      background-position: center ;">
      
      <div class="value" style="margin-left: 15px;">
        <h1 class="count4" style="color: white;"><?php echo $post->nama_produk ?></h1>
        <p style="color: white;">Roti Terlaris</p>
      </div>
    </section>
  </div>
  <div class="col-md-12">
   <div class="panel-heading" style="background-color: #526485; border: none;">
      <header class="panel-title">
        <div class="text-center">
          <strong style="color: white;">Quote of the Day</strong>
        </div>
      </header>
    </div>
   <section class="panel" style="border-radius: 0px 0px 7px 7px; background-color: #242D3E; padding-bottom: 85px;">
   
  <div class="value" style="margin-left: 15px;">
    <h2 class="count4" style="color: white;">"Selalu layani pelanggan dengan sepenuh hati :)"</h2>
    <!-- <p style="color: white;">Roti Terlaris</p> -->
  </div>
</section>
</div>
</div>
<?php } ?>        
</div>
<div class="col-md-4">
  <div class="panel panel-default" style="border:none; border-radius: 5px 5px 10px 10px;">
    <div class="panel-heading" style="background-color: #526485; border: none;">
      <header class="panel-title">
        <div class="text-center">
          <strong style="color: white;">Profile</strong>
        </div>
      </header>
    </div>
    <div class="panel-body" style="background-color: #242D3E; border-radius: 0px 0px 10px 10px; border: none;">
      <div class="text-center" id="author">
        <br>
        <img src="resources/images/admin/man.png" style="width: 190px; height: 180px;">
        <br>
        <h3 style="color: white;">ADMIN</h3>
        <small class="label label-warning" style="color: white;">
        <?php echo " ".$_SESSION['login_user']; ?></small>
        <br><br><br><br>
        <p style="color: white;">Selamat Datang Kembali admin, Selamat Bekerja Kembali</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
<script src="resources/js/bootstrap.min.js"></script>
</html>
