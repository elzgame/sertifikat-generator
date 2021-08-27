<div id="label-page" class="mb-5">
	<h3>Input Data Perserta</h3>
</div>
<form action="proses/peserta-input-proses.php" method="post" enctype="multipart/form-data">
<div class="container">
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

    <div class="d-grid gap-2 col col-lg-2">
        <button class="btn btn-primary" type="submit" name="simpan">Register</button>
    </div>
</div>
</form>