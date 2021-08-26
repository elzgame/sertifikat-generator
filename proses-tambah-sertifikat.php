<?php
require 'koneksi.php';

$nama = $_GET["nama"];
$nomor_sertifikat = $_GET["nomor_sertifikat"];
$sebagai = $_GET["sebagai"];
$tema = $_GET["tema"];

$sql = "INSERT INTO `sertifikat-data`(nama, nomor_sertifikat, sebagai, tema) VALUES('$nama', '$nomor_sertifikat', '$sebagai', '$tema')";
mysqli_query($db, $sql) or die(mysqli_error($db));

header("Location: index.php");

?>



