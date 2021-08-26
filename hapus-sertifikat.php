<?php
require 'koneksi.php';

$id = $_GET["id"];

$sql = "DELETE FROM `sertifikat-data` WHERE id = '$id'";
mysqli_query($db, $sql) or die(mysqli_error($db));

header("Location: index.php");
?>



