<?php 
include '../koneksi.php';
$namabarang = $_POST['inamabarang'];
$jumlah = $_POST['ijumlah'];
$spesifikasi = $_POST['ispesifikasi'];
$tgl = $_POST['itgl'];
$message = false;

$input=mysqli_query($koneksi,"INSERT INTO `pengadaan`(nama_barang, jumlah, spesifikasi, tanggal_pengadaan, admin_pengadaan, status, id_supplier) VALUES ('$namabarang','$jumlah','$spesifikasi','12-10-2014',1,'unapprove',0)");
$cek = mysqli_num_rows($input);
if($input){
    $message = true;
}else{
    $message = false;
}

header("location:../halaman_pengadaan.php?message=$message");
?>