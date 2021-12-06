<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
 berhasilLogin();
</script>
<?php
error_reporting(0);
session_start();
echo "<script> berhasilLogin(); </script>";
if (empty($_SESSION['kd_admin'])) {
	echo "<script>
          location.replace('../index.php')</script>";
} else {
	$id = $_SESSION['kd_admin'];
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="author" content="Creative Tim">
	<title>IRC Travel</title>
	<link rel="icon" href="../images/logo-irc.jpg">
	<link rel="stylesheet" href="../config/fungsi.php">
	
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
	<!-- Icons -->
	<link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
	<link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
	<!-- Page plugins -->
	<!-- Argon CSS -->
	<link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
	<link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css" type="text/css">
	<link rel="stylesheet" href="../assets/plugins/datatables/dataTables.bootstrap.css" type="text/css">
	
</head>

<body>
	<!-- Sidenav -->
	<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
		<div class="scrollbar-inner">
			<!-- Brand -->
			<div class="sidenav-header  align-items-center">
				<a class="navbar-brand" href="/">
					<img src=""   class="navbar-brand-img" alt="">
				IRC Travel</a>
			</div>
			<div class="navbar-inner">
				<!-- Collapse -->
				<div class="collapse navbar-collapse" id="sidenav-collapse-main">
					<!-- Nav items -->
					<ul class="navbar-nav">
						<?php
						include '../config/koneksi.php';
						$query4 = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE kd_admin='$id'");
						$q = mysqli_fetch_array($query4);

						?>
						<li class="nav-item">
							<a class="nav-link active" href="index.php?p=homeAdmin">
								<i class="ni ni-tv-2 text-primary"></i>
								<span class="nav-link-text">Beranda</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?p=admin">
								<i class="ni ni-single-02 text-yellow"></i>
								<span class="nav-link-text">Admin</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?p=tujuan">
								<i class="ni ni-send text-dark"></i>
								<span class="nav-link-text">Tujuan</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="pages/icons.html">
								<i class="ni ni-planet text-orange"></i>
								<span class="nav-link-text">Icons</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="pages/map.html">
								<i class="ni ni-pin-3 text-primary"></i>
								<span class="nav-link-text">Google</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="pages/tables.html">
								<i class="ni ni-bullet-list-67 text-default"></i>
								<span class="nav-link-text">Tables</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="pages/login.html">
								<i class="ni ni-key-25 text-info"></i>
								<span class="nav-link-text">Login</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="pages/daftar.php">
								<i class="ni ni-circle-08 text-pink"></i>
								<span class="nav-link-text">Register</span>
							</a>
						</li>
					</ul>
					<!-- Divider -->
					<hr class="my-3">
					<!-- Heading -->
					<!-- <h6 class="navbar-heading p-0 text-muted">
						<span class="docs-normal">Documentation</span>
					</h6> -->
					<!-- Navigation -->
					<!-- <ul class="navbar-nav mb-md-3">
						<li class="nav-item">
							<a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
								<i class="ni ni-spaceship"></i>
								<span class="nav-link-text">Getting started</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
								<i class="ni ni-palette"></i>
								<span class="nav-link-text">Foundation</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
								<i class="ni ni-ui-04"></i>
								<span class="nav-link-text">Components</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
								<i class="ni ni-chart-pie-35"></i>
								<span class="nav-link-text">Plugins</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active active-pro" href="page/upgrade.html">
								<i class="ni ni-send text-dark"></i>
								<span class="nav-link-text">Upgrade to PRO</span>
							</a>
						</li>
					</ul> -->
				</div>
			</div>
		</div>
	</nav>
	<!-- Main content -->
	<div class="main-content" id="panel">
		<!-- Topnav -->
		<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Search form -->
					<form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
						<div class="form-group mb-0">
							<div class="input-group input-group-alternative input-group-merge">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-search"></i></span>
								</div>
								<input class="form-control" placeholder="Search" type="text">
							</div>
						</div>
						<button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</form>
					<!-- Navbar links -->
					<ul class="navbar-nav align-items-center  ml-md-auto ">
						<li class="nav-item d-xl-none">
							<!-- Sidenav toggler -->
							<div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
								<div class="sidenav-toggler-inner">
									<i class="sidenav-toggler-line"></i>
									<i class="sidenav-toggler-line"></i>
									<i class="sidenav-toggler-line"></i>
								</div>
							</div>
						</li>
						<li class="nav-item d-sm-none">
							<a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
								<i class="ni ni-zoom-split-in"></i>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="ni ni-bell-55"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
								<!-- Dropdown header -->
								<div class="px-3 py-3">
									<h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
								</div>
								<!-- List group -->
								<div class="list-group list-group-flush">
									<a href="#!" class="list-group-item list-group-item-action">
										<div class="row align-items-center">
											<div class="col-auto">
												<!-- Avatar -->
												<img alt="Image placeholder" src="assets/img/theme/team-1.jpg" class="avatar rounded-circle">
											</div>
											<div class="col ml--2">
												<div class="d-flex justify-content-between align-items-center">
													<div>
														<p>
													
														<h4 class="mb-0 text-sm"><?php echo $q['nama']; ?></h4>
													</p>
												</div>
												<div class="text-right text-muted">
													<small>2 hrs ago</small>
												</div>
											</div>
											<p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
										</div>
									</div>
								</a>
								<a href="#!" class="list-group-item list-group-item-action">
									<div class="row align-items-center">
										<div class="col-auto">
											<!-- Avatar -->
											<img alt="Image placeholder" src="assets/img/theme/team-2.jpg" class="avatar rounded-circle">
										</div>
										<div class="col ml--2">
											<div class="d-flex justify-content-between align-items-center">
												<div>
														<h4 class="mb-0 text-sm"><?php echo $q['nama']; ?></h4>
													</div>
													<div class="text-right text-muted">
														<small>3 hrs ago</small>
													</div>
												</div>
												<p class="text-sm mb-0">A new issue has been reported for Argon.</p>
											</div>
										</div>
									</a>
									<a href="#!" class="list-group-item list-group-item-action">
										<div class="row align-items-center">
											<div class="col-auto">
												<!-- Avatar -->
												<img alt="Image placeholder" src="assets/img/theme/team-3.jpg" class="avatar rounded-circle">
											</div>
											<div class="col ml--2">
												<div class="d-flex justify-content-between align-items-center">
													<div>
														<h4 class="mb-0 text-sm">John Snow</h4>
													</div>
													<div class="text-right text-muted">
														<small>5 hrs ago</small>
													</div>
												</div>
												<p class="text-sm mb-0">Your posts have been liked a lot.</p>
											</div>
										</div>
									</a>
									<a href="#!" class="list-group-item list-group-item-action">
										<div class="row align-items-center">
											<div class="col-auto">
												<!-- Avatar -->
												<img alt="Image placeholder" src="assets/img/theme/team-4.jpg" class="avatar rounded-circle">
											</div>
											<div class="col ml--2">
												<div class="d-flex justify-content-between align-items-center">
													<div>
														<h4 class="mb-0 text-sm">John Snow</h4>
													</div>
													<div class="text-right text-muted">
														<small>2 hrs ago</small>
													</div>
												</div>
												<p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
											</div>
										</div>
									</a>
									<a href="#!" class="list-group-item list-group-item-action">
										<div class="row align-items-center">
											<div class="col-auto">
												<!-- Avatar -->
												<img alt="Image placeholder" src="assets/img/theme/team-5.jpg" class="avatar rounded-circle">
											</div>
											<div class="col ml--2">
												<div class="d-flex justify-content-between align-items-center">
													<div>
														<h4 class="mb-0 text-sm">John Snow</h4>
													</div>
													<div class="text-right text-muted">
														<small>3 hrs ago</small>
													</div>
												</div>
												<p class="text-sm mb-0">A new issue has been reported for Argon.</p>
											</div>
										</div>
									</a>
								</div>
								<!-- View all -->
								<a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="ni ni-ungroup"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
								<div class="row shortcuts px-4">
									<a href="#!" class="col-4 shortcut-item">
										<span class="shortcut-media avatar rounded-circle bg-gradient-red">
											<i class="ni ni-calendar-grid-58"></i>
										</span>
										<small>Calendar</small>
									</a>
									<a href="#!" class="col-4 shortcut-item">
										<span class="shortcut-media avatar rounded-circle bg-gradient-orange">
											<i class="ni ni-email-83"></i>
										</span>
										<small>Email</small>
									</a>
									<a href="#!" class="col-4 shortcut-item">
										<span class="shortcut-media avatar rounded-circle bg-gradient-info">
											<i class="ni ni-credit-card"></i>
										</span>
										<small>Payments</small>
									</a>
									<a href="#!" class="col-4 shortcut-item">
										<span class="shortcut-media avatar rounded-circle bg-gradient-green">
											<i class="ni ni-books"></i>
										</span>
										<small>Reports</small>
									</a>
									<a href="#!" class="col-4 shortcut-item">
										<span class="shortcut-media avatar rounded-circle bg-gradient-purple">
											<i class="ni ni-pin-3"></i>
										</span>
										<small>Maps</small>
									</a>
									<a href="#!" class="col-4 shortcut-item">
										<span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
											<i class="ni ni-basket"></i>
										</span>
										<small>Shop</small>
									</a>
								</div>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
						<li class="nav-item dropdown">
							<a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<div class="media align-items-center">
									<span class="avatar avatar-sm rounded-circle">
										<!-- <img alt="Image placeholder" src="../images/users/<?php echo $q['foto']; ?>"> -->
										<img alt="Image placeholder" src="../images/users/default.png">
									</span>
									<div class="media-body  ml-2  d-none d-lg-block">
										<span class="mb-0 text-sm  font-weight-bold"><?= $q['nama'] ;?></span>
									</div>
								</div>
							</a>
							<div class="dropdown-menu  dropdown-menu-right ">
								<div class="dropdown-header noti-title">
									<h6 class="text-overflow m-0"><?= $q['nama'] ;?></h6>
								</div>
								<a href="#!" class="dropdown-item">
									<i class="ni ni-single-02"></i>
									<span>Profile</span>
								</a>
								<!-- <a href="#!" class="dropdown-item">
									<i class="ni ni-settings-gear-65"></i>
									<span>Settings</span>
								</a>
								<a href="#!" class="dropdown-item">
									<i class="ni ni-calendar-grid-58"></i>
									<span>Activity</span>
								</a>
								<a href="#!" class="dropdown-item">
									<i class="ni ni-support-16"></i>
									<span>Support</span>
								</a> -->
								<div class="dropdown-divider"></div>
								<a href="../page/logout.php" class="dropdown-item">
									<i class="ni ni-user-run"></i>
									<span>Logout</span>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Header -->
		
		<!-- Page content -->
	<!-- Fungsi Halaman -->
	      
	<?php
                            $page_dir='pages';
                            if(!empty($_GET['p'])){
                                $page=scandir($page_dir,0);
                                unset($page[0],$page[1]);
                                $p=$_GET['p'];
                                if(in_array($p.'.php',$page)){
                                    include($page_dir.'/'.$p.'.php');
                                }
                                else{
                                    include ($page_dir.'/404-page.php');
                                }
                            }
                            else{
                                 include ($page_dir.'../index.php');
                            }
                            ?>
	</div>
	<!-- Argon Scripts -->
	<!-- Core -->
	<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/js-cookie/js.cookie.js"></script>
	<script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
	<script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
	<!-- Optional JS -->
	<script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
	<script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
	<!-- Argon JS -->
	<script src="assets/js/argon.js?v=1.2.0"></script>
	<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>

    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
	
	<script>
      $(function () {
        $("#example1").DataTable({
          "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
            "sEmptyTable": "Tidak ada data di database",
            "sProcessing":   "Sedang memproses...",
    "sLengthMenu":   "Tampilkan _MENU_ entri",
    "sZeroRecords":  "Tidak ditemukan data yang sesuai",
    "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
    "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
    "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
    "sInfoPostFix":  "",
    "sSearch":       "Cari:",
    "sUrl":          "",
    "oPaginate": {
        "sFirst":    "Pertama",
        "sPrevious": "Sebelumnya",
        "sNext":     "Selanjutnya",
        "sLast":     "Terakhir"
    }
        }
        });
        $('#example2').DataTable({
             
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
</body>

</html>