<!DOCTYPE html>
<html>
<head>
	<title>Update Profil</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#"><b>TPQ</b></a>
  <a class="navbar-brand" href="">Update Profil Kelas 1</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
	<li class="nav-item">
        <a class="nav-link" href="home.php">Kembali</a>
      </li>
    </ul>
  </div>
</nav>    
	<div class="container">
    <h3 style="text-align: center;"> Update Data Santri</h3>
      <div class="col-sm-6">
        <?php
        include "koneksi.php";
        //menampilkan data tertentu dari sql dalam bentuk objek
        $sql = $koneksi->query("SELECT * FROM tbl_kelas1 WHERE nis=".$_GET['nis']);
        //konversi data yang terdapat di dalam variabel $sql menjadi bentuk array
        $s = mysqli_fetch_array($sql);
        // var_dump($s)
        ?>
        <form action="ubahpr_profil1.php" method="POST">
          <div class="row">
            <div class="col-sm-6">
              <label>NIS</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="nis" class="form-control" maxlength="9" value="<?php echo $s['nis']?>" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label>Nama</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="nama" class="form-control" value="<?php echo $s['nama']?>">
            </div>
          </div>

           <div class="row">
            <div class="col-sm-6">
              <label>Umur</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="umur" class="form-control" value="<?php echo $s['umur']?>">
            </div>
          </div>

             <div class="row">
            <div class="col-sm-6">
              <label>Tanggal Lahir</label>
            </div>
            <div class="col-sm-6">
              <input type="date" name="tgl" class="form-control" value="<?php echo $s['tgl']?>">
            </div>
          </div>

            <div class="row">
            <div class="col-sm-6">
              <label>Alamat</label>
            </div>
            <div class="col-sm-6">
              <textarea name="alamat" class="form-control" value=""><?php echo $s['alamat']?></textarea>
            </div>
          </div>

           

            <div class="row">
            <div class="col-sm-6">
              <label>Email</label>
            </div>
            <div class="col-sm-6">
              <input type="email" name="email" class="form-control" value="<?php echo $s['email']?>">
            </div>
          </div>


    <div class="row">
      <div class="col-sm-6">
     <button type="submit" class="btn btn-primary btn-block">Ubah Data Santri</button>
            
          </div>
        </div>
    </form>
      </div>
    
</div>
</body>
</html>