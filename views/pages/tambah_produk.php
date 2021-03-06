<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- <title>Tambah Roti</title>
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
  <script src="resources/js/jquery.min.js"></script>
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'> -->
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-default" style="background: #242D3E; border-color: #242D3E;">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#" style="color: #ffffff;">ADMIN CABANG | Kelola Produk Roti</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="?controller=home&action=homeCabang" style="color: #ffffff;">Beranda <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffffff;">Kelola <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Roti</a></li>


              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #ffffff;">Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="?controller=laporan&action=laporanAdminCabang">Penjualan</a></li>
                <li><a href="?controller=laporan&action=laporanTransaksiCabang">Transaksi</a></li>
             </ul>
           </li>
           <li><a href="logout.php" style="color: #ffffff;">Logout</a></li>
           <li><a href="#">|</a></li>
           <li><a href="#" style="font-weight: bold; color: red;"><?php echo $_SESSION['login_user']; ?></a></li>
         </ul>
       </div><!-- /.navbar-collapse -->
     </div><!-- /.container-fluid -->
   </nav>
   <div class="row">
     <div class="col-md-3">
      <br>
      <form class="form" method="POST" enctype="multipart/form-data">

        <input class="hidden" name="controller" value="produk"></input>
        <input class="hidden" name="action" value="createProduk"></input>

        <div class="form-group">
          <label style="color: #242D3E;">Nama Roti &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" name="nama_produk" class="form-control" placeholder="Masukkan Nama Roti">
        </div>
        <div class="form-group">
          <label style="color: #242D3E;">Harga Roti &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga Roti">
        </div>
        <div class="form-group">
          <label style="color: #242D3E;">Jumlah Roti &nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="number" name="jumlah_stok" class="form-control" placeholder="Masukkan Jumlah Roti">
        </div>
        <div class="form-group">
          <label style="color: #242D3E;">Cabang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" name="cabang" class="form-control"  value="<?php echo $_SESSION['login_user']; ?>" readonly>
        </div>
        <div class="form-group">
          <label style="color: #242D3E;">Gambar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="file" name="foto" class="form-control">
        </div>
        <!-- <div class="form-group">
          <label style="color: #242D3E;">Deskripsi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <textarea name="deskripsi" cols="" rows="10" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
        </div> -->
        <br>
        <div class="form-group">
          <button class="btn btn-success" type="submit">Tambah</button>
          <button class="btn btn-danger" type="submit" style="width: 68%; float: right; clear: left;">Batal</button>
        </div>
      </form>
    </div>
    <br>


    <div class="col-md-9">
     <?php foreach ($posts as $post) { 


       ?>
       <div class="col-md-3">
        <div class="thumbnail card">

          <img src="foto_produk/<?php echo $post->foto_produk; ?>" alt="kue" style="width:100%; height:180px">
          <div class="caption">
            <font size="3"><p> <?php echo $post->nama_produk; ?></p></font>
            <font size="2"><b><p> <?php echo "Rp ". number_format($post->harga,0,".",".")."/pcs"; ?></p></b></font>
           <font size="2" color="green"> <p> <?php echo "Stok : ".$post->jumlah_stok; ?></p></font>

          </div>
          <div class="col-md-6">
            <a href="?controller=produk&action=editProdukCabang&id_produk=<?=$post->id_produk?>"><button class="btn btn-success" style="width:100%" type="submit">Edit</button></a>
          </div>
          <a href="?controller=produk&action=deleteDataProdukCabang&id_produk=<?=$post->id_produk?>">
          <button class="btn btn-danger" style="width=100%" type="submit" >Delete</button></a>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>
</div>
<!-- <script src="resources/js/bootstrap.min.js"></script> -->

</body>
</html>
