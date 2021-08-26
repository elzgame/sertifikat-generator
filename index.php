<?php
require 'koneksi.php';

$sql = "SELECT * FROM `sertifikat-data`";
$query = mysqli_query($db, $sql) or die(mysqli_error($db));
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" href="icon.png" type="image/png">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');

        * {
            font-family: 'Pacifico', cursive;
        }
    </style>
    <title>Sertifikat Generator DTS JWD</title>
</head>

<body style="background-color: #e5e5f7;
opacity: 1;
background-image: radial-gradient(#458cf7 0.35000000000000003px, #e5e5f7 0.35000000000000003px);
background-size: 7px 7px;">

    <div class="container text-center">
        <a href="tambah-sertifikat.php" style="font-size:40px; border-radius: 30px; margin-top:30px; border: 5px solid black;" class="text-white btn btn-primary w-100"> <i class="fas fa-plus"></i> Tambah Sertifikat </a>

        <table class="table mt-5">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor Sertifikat</th>
                    <th scope="col">Sebagai</th>
                    <th scope="col">Tema</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($query) > 0) {
                    $no = 1;
                    while ($sertifikat_data = mysqli_fetch_array($query)) : ?>
                        <tr class="bg-white">
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $sertifikat_data["nama"] ?></td>
                            <td><?= $sertifikat_data["nomor_sertifikat"] ?></td>
                            <td><?= $sertifikat_data["sebagai"] ?></td>
                            <td><?= $sertifikat_data["tema"] ?></td>
                            <td> <a href="edit-sertifikat.php?id=<?= $sertifikat_data["id"] ?>" class="btn btn-warning text-white" style="border: 3px solid black;"> <b> Edit </b> </a> <a onclick="return confirm('Apakah anda ingin menghapus sertifikat dengan nama\n<?= $sertifikat_data["nama"]; ?>?')" href="hapus-sertifikat.php?id=<?= $sertifikat_data["id"]   ?>" class="btn btn-danger text-white" style="border: 3px solid black;"> <b> Hapus </b> </a> </td>
                        </tr>
                <?php 
                $no++;    
                endwhile;
                } else {
                    echo "<tr><td colspan=10> Tidak ada data </td></tr>";
                }
                ?>
            </tbody>
        </table>





    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>