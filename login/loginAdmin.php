<?php
  include '../config/koneksi.php';

 
$user = $_POST['user'];
$pas1 = $_POST['pass'];

$pass=md5($pas1);

$login = mysqli_query($koneksi,"SELECT * FROM tb_admin WHERE username='$user' AND password='$pass'");

$ketemu= mysqli_num_rows($login);
$r = mysqli_fetch_array($login);
 
// Apabila username dan password ditemukan
if ($ketemu > 0){
    
 session_start();
 $_SESSION[ad] = $r['kd_admin'];
 
  header("location: ../admin/index.php");
}
else{
 echo "
 <script>
 alert('Username atau password salah.!');
 </script>
 ";
 echo "<meta http-equiv=refresh content=0;url=../admin/loginAdmin/>";
}

?>
