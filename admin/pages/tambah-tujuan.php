<?php include '../../config/koneksi.php'; 
	// mengambil data barang dengan kode paling besar
	$query = mysqli_query($koneksi, "SELECT max(kd_tujuan) as kodeTerbesar FROM tb_tujuan");
	$data = mysqli_fetch_array($query);
	$kodeBarang = $data['kodeTerbesar'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kodeBarang, 3, 3);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "TJ";
	$kodeBarang = $huruf . sprintf("%03s", $urutan);

?>
<h1 class="text-center p-3">Tambah Tujuan</h1>
<form class="p-3" action="index.php?p=fungsi" method="POST">
	<div class="form-group">
		<label for="exampleInputEmail1">KD Tujuan</label>
		<input type="text" name="kd_tujuan" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="<?php echo $kodeBarang ?>" readonly >
	</div>
	<div class="form-group">
	<label for="exampleInputEmail1">Dari</label>
    <select name="dari" class="form-control w-50" value=""  readonly>
      <option value="Palangka Raya">Palangka Raya</option>
    </select>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Tujuan</label>
		<input type="text" name="tujuan" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan tujuan . . ." required>
	</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Harga</label>
				<input type="text" name="harga_tiket" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Harga . . ." required>
			</div>
	<button type="submit" name="tambah-tujuan" value="Submit" class="btn btn-primary">Tambah</button>
</form>