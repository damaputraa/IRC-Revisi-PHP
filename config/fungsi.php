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