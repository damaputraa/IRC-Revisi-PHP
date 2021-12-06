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