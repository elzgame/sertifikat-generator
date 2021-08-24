<?php
$nama = $_GET["nama"];
$nomor_sertifikat = $_GET["nomor_sertifikat"];
$sebagai = $_GET["sebagai"];
$tema = $_GET["tema"];

// Buat cek harus ada data yang diinput.
if (($nama == null || "") || ($nomor_sertifikat == null || "") || ($sebagai == null || "") || ($tema == null || "")) {
    header("Location: index.php");
}

?>
<html>

<head>
    <title> Hasil Sertifikat </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>

</head>

<body style="border: 5px solid black">


    <nav class="navbar navbar-light bg-light ">
        <div class="container-fluid justify-content-center align-item-center d-flex">
            <a class="btn btn-primary" href="cetak-sertifikat.php?<?= "nama=" . $nama . "&nomor_sertifikat=" . $nomor_sertifikat . "&sebagai=" . $sebagai . "&tema=" . $tema?>" > <i class="fas fa-download"></i> Simpan sebagai PDF...</a>
        </div>
    </nav>


    <div class="card p-3 bg-white">
        <div class="card-body bg-white" style="background-color: #e5e5f7; opacity: 1; background-size: 10px 10px;background-image: repeating-linear-gradient(45deg, #444cf7 0, #444cf7 1px, #e5e5f7 0, #e5e5f7 100%);border: 2px solid black; border-radius: 10pxs;">
            <div style="position: absolute; width: 93%">
                <img src="logo-pnc.png" alt="" style="float:right;max-width: 75px; max-height:75px; margin-left: 30px;">
                <img src="logo.png" alt="" style="float:right;max-width: 75px; max-height:75px; margin-left: 30px;">
            </div>
            <center class="mt-5">
                <h4> KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN </h4>
                <h4> POLITEKNIK NEGERI CILACAP </h4>
                <h4> PUSAT PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT </h4>

                <p style="font-size:50px; font-family: 'Pacifico', cursive;"> Sertifikat</p>

                <h4 style="font-family: 'Patrick Hand', cursive;"><?= $nomor_sertifikat ?></h4>
                <p> Diberikan Kepada </p>
                <h1 style="font-family: 'Patrick Hand', cursive;"><?= $nama ?></h1>
                <hr>
            </center>
            <p> Atas peran serta sebagai <b><?= $sebagai ?></b> dalam kegiatan Webinar dengan tema "<i><?= $tema ?></i>" yang diselenggarakan pada 25 Agustus 2021, dalam kurun waktu 4 (empat) jam pertemuan yang diselenggarakan oleh Pusat Penelitian dan Pengabdian kepada Masyarakat (P3M) Politeknik Negeri Cilacap. </p>
            <center>
                <h6> Cilacap, 26 Agustus 2021 </h6>
            </center>
            <center>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="ttd.png" alt="" style="max-width: 150px; max-height:150px;">
                        <h6> <u> Dr. Uzumaki Naruto </u></h6>
                        <p> <i> Direktur Kepala Konoha </i></p>
                    </div>
                    <div class="col-lg-6">
                        <img src="ttd2.png" alt="" style="max-width: 150px; max-height:150px;">
                        <h6> <u> Dr. Uchiha Sasuke </u> </h6>
                        <p> <i> Direktur Kepala Konoha Bagian Utara </i></p>
                    </div>
                </div>
            </center>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>