<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai procurment
	if($data['level']=="procurment"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "procurment";
		// alihkan ke halaman dashboard procurment
		header("location:halaman_pengadaan.php");

	// cek jika user login sebagai supplier
	}else if($data['level']=="supplier"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "supplier";
		// alihkan ke halaman dashboard supplier
		header("location:halaman_supplier.php");

	// cek jika user login sebagai purchasing
	}else if($data['level']=="purchasing"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "purchasing";
		// alihkan ke halaman dashboard purchasing
		header("location:halaman_purchasing.php");

	}else if($data['level']=="manajer"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "manajer";
		// alihkan ke halaman dashboard purchasing
		header("location:halaman_pengadaan_manajer.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}

	
}else{
	header("location:index.php?pesan=gagal");
}



?>