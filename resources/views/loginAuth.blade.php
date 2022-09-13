<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>CHROME</b> DM</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg" style="font-weight: 600;color: teal;">Login To Chrome</p>

      <form action="" method="GET">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" style="color: teal;">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope" style="color: teal;"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" style="color: teal;">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock" style="color: teal;"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember" style="color: teal;">
                Remember Me
              </label>
            </div>
          </div>
          
        </div>
        <br>
      <!-- /.col -->
      <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-block btn-primary" style="color: #fff;background-color: teal;border-color: teal;box-shadow: none;">Sign In</button>
      </div>
      </form>
      
      <!-- /.col -->

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->
      <br>
      <p class="mb-1">
        <a href="forgot-password.html" style="color: teal;">I forgot my password</a>
        <a href="register.html" class="text-center" style="float: right;color: teal;">Register Now</a>
      </p>
      
    </div>
    <!-- /.login-card-body --> 
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/js/adminlte.min.js')}}"></script>
</body>
</html>
