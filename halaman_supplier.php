<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin - </title>
</head>
<body>
	
	<?php 
	session_start();
	include 'koneksi.php';
	error_reporting(0);


	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman Supplier</h1>
	<h3>Tender Yang Tersedia</h3>
	
	<?php
	if($_GET['message']){
		echo'<p style="color:green">Data berhasil Dimasukan</p>';
	}else{
		if(isset($_GET['message'])){
		echo'<p style="color:red">Gagal Memasukan data</p>';
		}
	}
      // query SQL menampilkan data dari table tbl_show
      $sql = "SELECT * FROM pengadaan  WHERE status = 'approved'";
      // tampung data (dalam array) kedalam variable $biodata
      $show = mysqli_query($koneksi, $sql);
      // variable untuk membuat tabel HTML
      $strTbl = "";
      $strTbl .= "<table border='1'>";
      $strTbl .= "<tr>";
      $strTbl .= "<th>No</th>";
      $strTbl .= "<th>Nama barang</th>";
	  $strTbl .= "<th>jumlah</th>";
	  $strTbl .= "<th>spesifikasi</th>";
	  $strTbl .= "<th>tanggal pengaaan</th>";
	  $strTbl .= "<th>admin pengadaan</th>";
	  $strTbl .= "<th>status</th>";
      $strTbl .= "<th>Aksi</th>";
      $strTbl .= "</tr>";
      // variable nomor urut
      $nomor = 1;
      // cek apakah $show nilai kosong atau tidak
      if (mysqli_num_rows($show) > 0) {
        // jika ada looping untuk membaca seluruh data
        // dan tampilkan kedalam tabel
        while ($data = mysqli_fetch_assoc($show)) {
          // tampilkan data kedalam table
          $strTbl .= "<tr>";
          $strTbl .= "<td>". $nomor."</td>";
          $strTbl .= "<td>". $data['nama_barang'] ."</td>";
		  $strTbl .= "<td>". $data['jumlah'] ."</td>";
		  $strTbl .= "<td>". $data['spesifikasi'] ."</td>";
		  $strTbl .= "<td>". $data['tanggal_pengadaan'] ."</td>";
		  $strTbl .= "<td>Wandhi</td>";
		  $strTbl .= "<td>". $data['status'] ."</td>";
          $strTbl .= "<td> <a href='halaman_detail_tender.php?id=".$data['id_pengadaan']."&status=approved'>Lihat Detail</a></td>";
          $strTbl .= "</tr>";
          $nomor++;
        }
      } else {
        // jika data kosong, tampilkan pesan didalam tabel
        $strTbl .="<tr><td colspan='4'>Ooouppsss... Maaf, data masih kosong, tambahkan data dari Database terlebih dahulu</td></tr>";
      }
      $strTbl .= "</table>";
      // tampilkan tabel pada halaman
      print($strTbl);
		
	?>
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>

</body>
</html>