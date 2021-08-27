<?php
include '../koneksi.php';
$id_peserta     = $_POST['id_peserta'];
$nama           = $_POST['nama'];
$no_sertifikat  = $_POST['nomor_sertifikat'];
$kategori       = $_POST['sebagai'];
$tema           = $_POST['tema'];

if (isset($_POST['edit'])) {
	extract($_POST);

	$sql =
        "UPDATE peserta
		SET nama='$nama',nosertifikat='$no_sertifikat',kategori='$kategori',tema='$tema'
		WHERE id='$id_peserta'";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=data-peserta");
}
