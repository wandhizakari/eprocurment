<?php 
include '../koneksi.php';
$id = $_GET['id'];
$status =$_GET['status'];

$input=mysqli_query($koneksi,"UPDATE `pengadaan` SET status ='$status' WHERE id_pengadaan=$id ");
$cek = mysqli_num_rows($input);
if($input){
    $message = true;
}else{
    $message = false;
}

header("location:../halaman_pengadaan_manajer.php?message=$message");
?>