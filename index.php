<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Staatliches&display=swap');

    * {
      font-family: 'Montserrat', sans-serif;
    }
  </style>

  <title>Hello, world!</title>
</head>

<body style="background-color: #e5e5f7;
opacity: 1;
background-image: radial-gradient(#444cf7 0.5px, #e5e5f7 0.5px);
background-size: 10px 10px;">

  <div class="container text-center mt-5">
    <h1 style="font-family: 'Staatliches', cursive; color:white; text-shadow:  1px 1px 4px black">Sertifikat Generator DTS JWD </h1>

    <form action="hasil-sertifikat.php" method="GET" class="mt-3">
      <div class="card" style="border-radius: 30px;">
        <div class="card-body p-5">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukkan nama..." name="nama">
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukkan nomor sertifikat..." name="nomor_sertifikat">
          </div>

          <select class="form-select mb-3" name="sebagai">
            <option selected>Pilih sertifikat sebagai...</option>
            <option value="Peserta">Peserta</option>
            <option value="Pengajar">Pengajar</option>
            <option value="Relawan">Relawan</option>
            <option value="Peserta Terbaik">Peserta Terbaik</option>
          </select>

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukkan tema..." name="tema">
          </div>

        </div>
      </div>

      <input type="submit" class="btn btn-primary text-white p-4 mt-4" value="GENERATE!" style="font-family: 'Staatliches', cursive;font-size: 30px; border-radius: 30px; border: 5px solid blue">

    </form>



  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>