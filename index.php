<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Cetak Sertifikat</title>
</head>

<body>
    <div class="container">
        <div>
            <h2>Sertifikat Generation V.2.E.Z</h2>
        </div>
        <form  action="cetak-sertifikat.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Masukan Nama</label>
                <input type="text" class="form-control" aria-describedby="nama" name="nama">
            </div>
            <div class="mb-3">
                <label class="form-label">Masukan No.Sertifikat</label>
                <input type="text" class="form-control" aria-describedby="no.sertifikat" name="no_sertifikat">
            </div>
            <div class="mb-3">
                <label class="form-label"></label>
                <select class="form-select" aria-label="Default select example" name="sebagai">
                    <option selected>Jenis Sertifikat</option>
                    <option value="Peserta">Perserta</option>
                    <option value="Penonton">Penonton</option>
                </select>
            </div> 
            <div class="mb-3">
                <label class="form-label">Masukan Tema</label>
                <input type="text" class="form-control" aria-describedby="no.sertifikat" name="tema">
            </div>
            <!-- spinner tombol -->
            <div class="d-grid gap-2">
                <label class="form-label"></label>
                <button class="btn btn-primary" type="submit">
                    <span class="spinner-border-sm" role="status" aria-hidden="true"></span>
                    <h>GENERATE!<h></button>
            </div>
        </form>
    </div>

    <script src="js/loading.js"></script>
</body>

</html>