<?php 
$host_db="localhost";
$user_db="root";
$pass_db="";
$nama_db="irc3";

$mysqli = new mysqli($host_db,$user_db,$pass_db,$nama_db);

if(isset($_POST['login'])){
	$username = $mysqli->real_escape_string($_POST['username']);
	$password = $mysqli->real_escape_string($_POST['password']);

	//cek user login 
	$cek_login = $mysqli->query("select * from tb_admin where username='$username'");
	$ktm_login = $cek_login->num_rows;
	$data_login = $cek_login->fetch_assoc();

	if($ktm_login>=1){
		//login username tersedia
		//verify password 
		if(password_verify($password,$data_login['password'])){
      echo "<script>alert('Login Berhasil');</script>";
			//silakan buat session dan redirect disini
			session_start();
			$_SESSION['kd_admin']=$data_login['kd_admin'];

			//redircet 
      
			header("location:../index.php?p=homeAdmin");
		}else{
      echo "<script>alert('Login Gagal ! , Silahkan Coba Lagi');</script>";
		}
	}else{
		//login gagal, username tidak tersedia
    echo "<script>alert('Login Gagal ! , username tidak ditemukan');</script>";
	}

	$mysqli->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Login Admin IRC</title>
  <link rel="icon" href="../../images/logo-irc.jpg">
  <link rel="stylesheet" href="../../config/fungsi.php">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="css/style.css" rel="style/css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h3 class="card-title text-center mb-5 fw-light fw-bold ">Login Admin IRC</h3><br>
            <!-- <?php if (isset($error)) { ?>
              <p style="font-style: italic; color: red;">Username / Password anda salah</p>
            <?php } ?> -->
            <form action="" method="post">
              <div class="form-floating mb-3">
                <input class="form-control" require name="username" id="username" type="text" placeholder="Username" autocomplete="off">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input require name="password" id="password" class="form-control" type="password" id="floatingPassword" placeholder="Password" autocomplete="off">
                <label for="floatingPassword">Password</label>

                <div class="d-grid my-3">
                  <input class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="login" value="Login">
                </div>
                <hr class="my-4">
                <div class="d-grid">
                  <!-- <p class="text-red" target="">
                    <i class="me-2"></i> *Username dan Password : admin
                  </p> -->
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
