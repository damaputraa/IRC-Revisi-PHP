<!-- Main content -->
<div class="main-content" id="panel">
	<!-- Header -->
	<div class="header bg-primary pb-6">
		<div class="container-fluid">
			<div class="header-body">
				<div class="row align-items-center py-4">
					<div class="col-lg-6 col-7">
						<h6 class="h2 text-white d-inline-block mb-0">Tujuan</h6>
						<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
							<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
								<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tujuan</li>
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
						<h3 class="mb-0">List Tujuan</h3>
						<div class="text-right">
							<a href="#" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Data</a>
						</div>
					</div>
					<!-- Light table -->
					<div class="table-responsive">
						<table class="table align-items-center table-flush">
							<thead class="thead-light">
								<tr>
									<th scope="col" class="sort" data-sort="name">No</th>
									<th scope="col" class="sort" data-sort="budget">KD Tujuan</th>
									<th scope="col" class="sort" data-sort="status">Dari</th>
									<th scope="col" class="sort" data-sort="status">Tujuan</th>
									<th scope="col" class="sort" data-sort="completion">Harga Tiket</th>
									<!-- <th scope="col" class="sort" data-sort="completion">Harga Paket</th> -->
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody class="list">
								<?php
								include '../../config/koneksi.php';
								$no = 0;
								$sql = mysqli_query($koneksi, "SELECT * FROM tb_tujuan");
								while ($q = mysqli_fetch_array($sql)) {
									$no++;

								?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $q['kd_tujuan']; ?></td>
										<td><?php echo $q['dari']; ?></td>
										<td><?php echo $q['tujuan']; ?></td>
										<td>Rp <?php echo number_format($q['harga_tiket']); ?></td>
										<!-- <td>Rp <?php echo number_format($q['harga_paket']); ?></td> -->
										<td>
											<a href="index.php?p=edit-tujuan&id=<?php echo $q['kd_tujuan']; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
											<a href="./pages/delete-tujuan.php?id=<?php echo $q['kd_tujuan']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
										</td>
									</tr>

								<?php } ?>

							</tbody>
						</table>
					</div>
					<!-- Card footer -->
					<div class="card-footer py-4">
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>