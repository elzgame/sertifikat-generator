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
    <script src="html2canvas.min.js"> </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="icon.png" type="image/png">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');


        .float {
            position: fixed;
            width: 600px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #0C9;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
        }
    </style>
    <script src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
</head>

<body style="border: 5px solid black">
    <center>
        <button onclick="return capture()" style="font-size:20px; border-radius: 30px; margin-top:30px; border: 5px solid black;" class="text-white btn btn-primary mb-3"> <i class="fas fa-download"></i> Generate sebagai gambar... (.png) </button>
    </center>
    <div class="card p-3 bg-white" id="capture">
        <div class="card-body" style="   background:url(bg.png) repeat;border: 2px solid black; border-radius: 10pxs;">
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
    <div class="float" style="display: none;" id="perintah">
        <p style="margin-top: 20px; font-size:15px; font-family: 'Pacifico', cursive;"><i class="fas fa-exclamation-triangle"></i> <b> SILAHKAN KLIK KANAN PADA GAMBAR -> SAVE IMAGE AS... </b> </p>
    </div>

    <script src="html2canvas.min.js"> </script>
    <script>
        count = 0;

        function capture() {
            if (count < 1) {
                html2canvas(document.querySelector("#capture")).then(canvas => {
                    document.body.appendChild(canvas)
                });
                count++;
            }
            document.getElementById("perintah").style.display = 'block';
            updateScroll();
        }

        function updateScroll() {
            window.scrollTo(0, document.body.scrollHeight);
            setInterval(updateScroll, 1);
        }


        //once a second
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>