<?php 
include 'function.php';
if (isset($_POST["submit"]) ){
    // cek apakah data berhasil ditamhakan
     if ( register($_POST) > 0 ) {
       echo "
         <script>
           alert('Pembuatan Akun Sukses');
           document.location.href = 'starting_template.html'; 
         </script>
       ";
     }else{
       echo "<script>
           alert('Pembuatan Akun Gagal');
           document.location.href = 'regist.php';
         </script>";
     }
   } 

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ngobar With Team Rebahan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="bootstrap/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/icheck-bootstrap.min.css">
  <!-- Tema Stylenya -->
  <link rel="stylesheet" href="bootstrap/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="register-page">
<div class="register-box">
  <div class="register-logo">
    <b>Team</b> Rebahan
  </div>

  <div class="card">
    <div class="card-body">
      <p class="login-box-msg"><b>Register Account</b></p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <!-- <span class="fas fa-user"></span> -->
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <!-- <span class="fas fa-envelope"></span> -->
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
             <!-- <span class="fas fa-lock"></span> -->
            </div>
          </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-info col-5 ">Registrasi</button>
            <button type="submit" class="btn btn-info col-5 float-right">Back</button>
        </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="bootstrap/js/adminlte.min.js"></script>
</body>
</html>
