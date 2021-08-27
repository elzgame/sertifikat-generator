<?php
include '../koneksi.php';
$nama			= $_POST['nama'];
$no_sertifikat	= $_POST['nomor_sertifikat'];
$kategori		= $_POST['sebagai'];
$tema			= $_POST['tema'];

if (isset($_POST['simpan'])) {
	extract($_POST);

	$sql =
		"INSERT INTO peserta
		VALUES('','$nama','$no_sertifikat','$kategori','$tema')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=data-peserta");
}
