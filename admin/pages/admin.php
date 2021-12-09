<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.11.3/css/jquery.dataTables.css"/>
 
<script type="text/javascript" src="DataTables/datatables.min.js"></script>

<!-- Main content -->
<div class="main-content" id="panel">
	<!-- Header -->
	<div class="header bg-primary pb-6">
		<div class="container-fluid">
			<div class="header-body">
				<div class="row align-items-center py-4">
					<div class="col-lg-6 col-7">
						<h6 class="h2 text-white d-inline-block mb-0">Admin</h6>
						<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
							<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
								<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item active" aria-current="page">Admin</li>
							</ol>
						</nav>
					</div>
					<!-- <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral"><i class="fa fa-plus-circle"></i>  Tambah Data</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page content -->
	<div class="container-fluid mt--6">
		<div class="row">
			<div class="col">
				<div class="card">
					<!-- Card header -->
					<div class="card-header border-0">
						<h3 class="mb-0">List Admin</h3>
						<div class="text-right">
							<a href="index.php?p=daftar" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Data</a>
						</div>
					</div>
					<!-- Light table -->
					<div class="table-responsive">
						<table id="dataTable" class="table align-items-center table-flush">
							<thead class="thead-light">
								<tr>
									<th scope="col" class="sort" data-sort="name">No</th>
									<th scope="col" class="sort" data-sort="budget">KD Admin</th>
									<!-- <th scope="col" class="sort" data-sort="status">Nama</th>
									<th scope="col" class="sort" data-sort="status">Jenis Kelamin</th> -->
									<th scope="col" class="sort" data-sort="completion">HP</th>
									<th scope="col" class="sort" data-sort="completion">Username</th>
									<th scope="col" class="sort" data-sort="completion">Password</th>
									<!-- <th scope="col" class="sort" data-sort="completion">Foto</th> -->
									<!-- <th scope="col" class="sort" data-sort="completion">Harga Paket</th> -->
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody class="list">
								<?php
								include '../../config/koneksi.php';
								$no = 0;
								$sql = mysqli_query($koneksi, "SELECT * FROM tb_admin");
								while ($q = mysqli_fetch_array($sql)) {
									$no++;

								?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $q['kd_admin']; ?></td>
										<!-- <td><?php echo $q['nama']; ?></td>
										<td><?php echo $q['jekel']; ?></td> -->
										<td><?php echo $q['telp']; ?></td>
										<td><?php echo $q['username']; ?></td>
										<td><?php echo $q['password']; ?></td>
										<!-- <td><?php echo $q['foto']; ?></td> -->
										<td>
											<!-- <a href="index.php?p=edit-admin&id=<?php echo $q['kd_admin']; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a> -->
											<a class="btn btn-danger" href="index.php?p=fungsi&id=<?= $q['kd_admin']; ?>"><i class="fa fa-trash" onclick="return confirm ('Apakah Ingin Hapus Data Ini ?')"></i></a>
										</td>
									</tr>

								<?php } ?>

							</tbody>
						</table>
					</div>
					<!-- Card footer -->
					<!-- <div class="card-footer py-4">
						<nav aria-label="...">
							<ul class="pagination justify-content-end mb-0">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1">
										<i class="fas fa-angle-left"></i>
										<span class="sr-only">Previous</span>
									</a>
								</li>
								<li class="page-item active">
									<a class="page-link" href="#">1</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
								</li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#">
										<i class="fas fa-angle-right"></i>
										<span class="sr-only">Next</span>
									</a>
								</li>
							</ul>
						</nav>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- jquery datatable -->
<script type="text/javascript" charset="utf8" src="DataTables/DataTables-1.11.3/js/jquery.dataTables.js"></script>

<script>
	$(document).ready(function() {
    $('#dataTable').DataTable();
} );
</script>