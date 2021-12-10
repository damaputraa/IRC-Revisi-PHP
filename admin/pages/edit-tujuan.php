<?php 
	include '../../config/koneksi.php';

	$kd_tujuan = $_GET['id'];
	$query = "SELECT * FROM tb_tujuan WHERE kd_tujuan='$kd_tujuan'";
	$result = mysqli_query($koneksi, $query);
	while ($row = mysqli_fetch_assoc($result)) {

?>

<h1 class="text-center p-3">Edit Tujuan</h1>
<form class="p-3" action="index.php?p=fungsi" method="POST">
	<div class="form-group">
		<label for="exampleInputEmail1">KD Tujuan</label>
		<input type="text" name="kd_tujuan" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="<?= $row ['kd_tujuan']; ?>"  readonly />
	</div>
	<div class="form-group">
	<label for="exampleInputEmail1">Dari</label>
    <select name="dari" class="form-control w-50" value=""  readonly>
      <option value="<?= $row ['dari']; ?>">Palangka Raya</option>
    </select>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Tujuan</label>
		<input type="text" name="tujuan" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan tujuan . . ." value="<?= $row ['tujuan']; ?>" required>
	</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Harga</label>
				<input type="text" name="harga_tiket" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Harga . . ." value="<?= $row ['harga_tiket']; ?>" required>
			</div>
	<button type="submit" name="edit-tujuan" value="Submit" class="btn btn-primary">Tambah</button>
</form>
<?php } ?>