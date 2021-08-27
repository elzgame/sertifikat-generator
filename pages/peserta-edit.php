<?php
	$id_peserta=$_GET['id'];
	$q_tampil_perserta=mysqli_query($db,"SELECT * FROM peserta WHERE id='$id_peserta'");
	$r_tampil_perserta=mysqli_fetch_array($q_tampil_perserta);
?>
<form action="proses/peserta-edit-proses.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="input-group mb-3">
            <input type="hidden" class="form-control" value="<?php echo $r_tampil_perserta['id']; ?>" name="id_peserta">
            <input type="text" class="form-control" value="<?php echo $r_tampil_perserta['nama']; ?>" name="nama">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" value="<?php echo $r_tampil_perserta['nosertifikat']; ?>"
                name="nomor_sertifikat">
        </div>

        <select class="form-select mb-3" name="sebagai">
            <option selected><?php echo $r_tampil_perserta['kategori']; ?></option>
            <option value="Peserta">Peserta</option>
            <option value="Pengajar">Pengajar</option>
            <option value="Relawan">Relawan</option>
            <option value="Peserta Terbaik">Peserta Terbaik</option>
        </select>

        <div class="input-group mb-3">
            <input type="text" class="form-control" value="<?php echo $r_tampil_perserta['tema']; ?>" name="tema">
        </div>

        <div class="d-grid gap-2 col col-lg-2 ">
            <button class="btn btn-primary" type="submit" name="edit" value="edit">Simpan</button>
        </div>
    </div>
</form>