<?php
require 'koneksi.php';

$nama = $_GET["nama"];
$nomor_sertifikat = $_GET["nomor_sertifikat"];
$sebagai = $_GET["sebagai"];
$tema = $_GET["tema"];
$id = $_GET["id"];

$sql = "UPDATE `sertifikat-data` SET nama = '$nama', nomor_sertifikat = '$nomor_sertifikat', sebagai = '$sebagai', tema = '$tema' WHERE id = $id";
mysqli_query($db, $sql) or die(mysqli_error($db));

header("Location: index.php");
?>



