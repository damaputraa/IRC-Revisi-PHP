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
<?php 
$host_db="localhost";
$user_db="root";
$pass_db="";
$nama_db="irc3";

$mysqli = new mysqli($host_db,$user_db,$pass_db,$nama_db);

if(isset($_POST['daftar'])){
	$nama = $mysqli->real_escape_string($_POST['nama']);
	$jekel = $mysqli->real_escape_string($_POST['jekel']);
	$telp = $mysqli->real_escape_string($_POST['telp']);
	$username = $mysqli->real_escape_string($_POST['username']);
	$password = $mysqli->real_escape_string($_POST['password']);
	$password_hash = password_hash($password, PASSWORD_DEFAULT); // hash password

	$add_data = $mysqli->prepare("insert into tb_admin(nama,jekel,telp,username,password)values(?,?,?,?,?)");
	$add_data ->bind_param("sssss",$nama,$jekel,$telp,$username,$password_hash);
	if($add_data ->execute()){
		echo "<script>alert('Sukses tambah Akun!');history.go(-1);</script>";
	}else{
		echo "Gagal";
	}

	$mysqli->close();
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Daftar Akun IRC</title>
  <!-- Favicon -->
  <link rel="icon" href="../../assets/img/logo.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/bootstrap/dist/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default">
  <!-- Navbar -->
  
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-4 py-lg-8 pt-lg-9">
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--9 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <h1>Daftar Akun IRC</h1>
              </div>
              <form role="form" action="homeAdmin.php" method="POST">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" name="nama" placeholder="Nama" type="text" maxlength="30" required oninvalid="this.setCustomValidity('Ini Harus Diisi ya')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-air-baloon"></i></span>
                    </div>
                    <input class="form-control" name="jekel" placeholder="Jenis Kelamin (Ketik L/P)" type="text" required oninvalid="this.setCustomValidity('Ini Harus Diisi ya')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-album-2"></i></span>
                    </div>
                    <input class="form-control" name="telp" placeholder="No. HP" type="number" maxlength="13" required oninvalid="this.setCustomValidity('Ini Harus Diisi ya')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="username" placeholder="username" type="text" maxlength="12" required oninvalid="this.setCustomValidity('Ini Harus Diisi ya')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password" placeholder="Password" type="password" maxlength="12" required oninvalid="this.setCustomValidity('Ini Harus Diisi ya')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="text-center">
								<input class="btn btn-primary" type="submit" name="daftar" value="Daftar">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>