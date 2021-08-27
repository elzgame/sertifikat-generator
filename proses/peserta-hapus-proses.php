<?php
include '../koneksi.php';
$id_peserta=$_GET['id'];

mysqli_query($db,
	"DELETE FROM peserta
	WHERE id='$id_peserta'"
);
header("location:../index.php?p=data-peserta");