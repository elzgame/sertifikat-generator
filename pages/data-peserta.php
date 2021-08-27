<div id="label-page" class="mb-3">
	<h3>Data Perserta</h3>
</div>
<div class="container">
  <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">No.Sertifikat</th>
            <th scope="col">Kategori</th>
            <th scope="col">Tema</th>
            <th scope="col">Option</th>
        </tr>
    </thead>
    <tbody>
        <?php
		    $batas = 5;
		    extract($_GET);
            if (empty($hal)) {
                $posisi = 0;
                $hal = 1;
                $nomor = 1;
            } else {
                $posisi = ($hal - 1) * $batas;
                $nomor = $posisi + 1;
            }
            $query = "SELECT * FROM peserta LIMIT $posisi, $batas";
			$queryJml = "SELECT * FROM peserta";
			$no = $posisi * 1;
            $q_tampil_perserta = mysqli_query($db, $query);
            if (mysqli_num_rows($q_tampil_perserta) > 0) {
                while ($r_tampil_perserta = mysqli_fetch_array($q_tampil_perserta)) {
        ?>    
            <tr>
                <th scope="row"><?php echo $nomor; ?></th>
                <td><?php echo $r_tampil_perserta['nama']; ?></td>
                <td><?php echo $r_tampil_perserta['nosertifikat']; ?></td>
                <td><?php echo $r_tampil_perserta['kategori']; ?></td>
                <td><?php echo $r_tampil_perserta['tema']; ?></td>
                <td>
                <button type="button" class="btn btn-primary" onclick="window.location.href='index.php?p=peserta-edit&id=<?php echo $r_tampil_perserta['id']; ?>'">Edit</button>
                <button type="button" class="btn btn-danger"><a href="proses/peserta-hapus-proses.php?id=<?php echo $r_tampil_perserta['id']; ?>" onclick="return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')">Delete</a></button>
                <button type="button" class="btn btn-warning"><a target="_blank" href="proses/cetak-sertifikat.php?&id=<?php echo $r_tampil_perserta['id']; ?>">Cetak</a></button>
                </td>
            </tr> 
        <?php        
                    $nomor++;
                }
            }else{
                echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
            }
        ?>
    </tbody>
</table>
<div style="float: left;">
<?php
    $jml = mysqli_num_rows(mysqli_query($db, $queryJml));
        echo "Jumlah Data : <b>$jml</b>";
?>
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <?php
        $jml_hal = ceil($jml / $batas);
        for ($i = 1; $i <= $jml_hal; $i++) {
            if ($i != $hal) {
                echo '<li class="page-item"><a class="page-link" href="?p=data-peserta&hal='.$i.'">'.$i.'</a></li>';
            } else {
                echo '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
            }
        }
    ?>
  </ul>
</nav>
</div>

<!-- <?php $pages_dir='pages'; include($pages_dir.'/register_perserta.php'); ?> -->

  