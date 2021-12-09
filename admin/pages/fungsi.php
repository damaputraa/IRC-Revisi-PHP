<?php
include '../../config/koneksi.php';

// Tabel Tujuan
// Deklarasikan Query
$kd_tujuan		= $_POST['kd_tujuan'];
$dari					= $_POST['dari'];
$tujuan				= $_POST['tujuan'];
$harga_tiket	= $_POST['harga_tiket'];

// --------------------------- Tambah tb_tujuan --------------------------------
// Untuk Tambah Data tb_tujuan
if ($_POST['tambah-tujuan']) {
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

	$queryTambah = mysqli_query($koneksi, "INSERT INTO tb_tujuan VALUES('$kodeBarang', '$dari', '$tujuan', '$harga_tiket', '')");

	if ($queryTambah) {
		header("location:index.php?p=tujuan");
	} else {
		echo "ERROR, Tidak Berhasil Tambah Data " . mysqli_error($koneksi);
	}
}

// Untuk Edit Data tb_tujuan
if (isset($_POST['edit-tb_tujuan'])) {
	$queryEdit = mysqli_query($koneksi, "UPDATE tb_tujuan SET dari='$dari', tujuan='$tujuan', harga_tiket='$harga_tiket' WHERE kd_tujuan = '$kd_tujuan' ");

	if ($queryEdit) {
		header("location: index.php?p=tb-tb_tujuan");
	} else {
		echo "ERROR, Tidak Berhasil Edit Data " . mysqli_error($koneksi);
	}
}

// Untuk Hapus Data tb_tujuan
if (isset($_GET['id'])) {
	$kd_tujuan = $_GET['id'];

	$queryHapus = mysqli_query($koneksi, "DELETE FROM tb_tujuan WHERE kd_tujuan = '$kd_tujuan'");

	if ($queryHapus) {
		header("location: index.php?p=tb_tujuan");
	} else {
		echo "ERROR, Tidak Berhasil Hapus Data " . mysqli_error($koneksi);
	}
}

// Tabel List Keberangkaktan
// Deklarasikan Query
$kd_keberangkatan	= $_POST['kd_keberangkatan'];
$dari					= $_POST['dari'];
$keberangkatan					= $_POST['keberangkatan'];
$harga_tiket				= $_POST['harga_tiket'];

// --------------------------- Tambah tb_keberangkatan --------------------------------
// Untuk Tambah Data tb_keberangkatan
if ($_POST['tambah-keberangkatan']) {

	$newid = "SELECT (MAX(id)+1) FROM table";

	$query = "INSERT INTO pelanggan (uniqueid, username, email, alamat, telp, password) VALUES ( CONCAT('pelangan',$newid), '$dari', '$email', '$alamat', '$telp', '$pass' )";

	$queryTambah = mysqli_query($koneksi, "INSERT INTO tb_keberangkatan VALUES('', '$dari', '$keberangkatan', '$harga_tiket')");

	if ($queryTambah) {
		header("location: index.php?p=tb-tb_keberangkatan");
	} else {
		echo "ERROR, Tidak Berhasil Tambah Data " . mysqli_error($koneksi);
	}
}

// Untuk Edit Data tb_keberangkatan
if (isset($_POST['edit-tb_keberangkatan'])) {
	$queryEdit = mysqli_query($koneksi, "UPDATE tb_keberangkatan SET dari='$dari', keberangkatan='$keberangkatan', harga_tiket='$harga_tiket' WHERE kd_keberangkatan = '$kd_keberangkatan' ");

	if ($queryEdit) {
		header("location: index.php?p=tb-tb_keberangkatan");
	} else {
		echo "ERROR, Tidak Berhasil Edit Data " . mysqli_error($koneksi);
	}
}

// Untuk Hapus Data tb_keberangkatan
if (isset($_GET['id'])) {
	$kd_keberangkatan = $_GET['id'];

	$queryHapus = mysqli_query($koneksi, "DELETE FROM tb_keberangkatan WHERE kd_keberangkatan = '$kd_keberangkatan'");

	if ($queryHapus) {
		header("location: index.php?p=tb-tb_keberangkatan");
	} else {
		echo "ERROR, Tidak Berhasil Hapus Data " . mysqli_error($koneksi);
	}
}

?>










































<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
	// Buat Data Tidak Ada
	function warning() {
		Swal.fire({
			position: 'center',
			icon: 'warning',
			title: 'Data Tidak Terdaftar',
			showConfirmButton: true,
			confirmButtonColor: '#3085d6'
		})
	}

	// Buat Berhasil Login
	function berhasilLogin() {
		Swal.fire(
			'Manteb',
			'Anda Berhasil Login!',
			'success'
		)
	}

	// Buat Berhasil Login
	function gagalLogin() {
		Swal.fire(
			'Yahhh!',
			'Anda Gagal Login!',
			'error'
		)
	}

	// Buat Sukses Tambah Data
	function tambahData() {
		Swal.fire(
			'Manteb',
			'Berhasil Tambah Data!',
			'success'
		)
	}

	// Buat Sukses edit Data
	function editData() {
		Swal.fire(
			'Manteb',
			'Berhasil Edit Data!',
			'success'
		)
	}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>