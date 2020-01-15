<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from laravel.pixelstrap.com/endless/authentication/login-video by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2019 11:24:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <title>Login | Endless Admin Panel</title>
    <!-- Google font-->
<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Font Awesome-->
<link rel="stylesheet" type="text/css" href="./assets/css/fontawesome.css">
<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="./assets/css/icofont.css">
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="./assets/css/themify.css">
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="./assets/css/flag-icon.css">
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="./assets/css/feather-icon.css">

<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
<!-- App css-->
<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
<link id="color" rel="stylesheet" href="./assets/css/light-1.css" media="screen">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="./assets/css/responsive.css">  </head>
  <body main-theme-layout="main-theme-layout-1">
    <!-- Loader starts-->
    <!-- <div class="loader-wrapper">
      <div class="loader bg-white">
        <div class="whirly-loader"> </div>
      </div>
    </div> -->
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <!-- Page Body Start-->
      <div class="container-fluid p-0">
        <!-- login page with video background start-->
        <div class="auth-bg-video">
          <video id="bgvid" poster="./assets/images/other-images/coming-soon-bg.jpg" playsinline="" autoplay="" muted="" loop="">
            <source src="./assets/video/auth-bg.mp4" type="video/mp4">
          </video>
          <div class="authentication-box">
            <div class="text-center"><img src="./assets/images/endless-logo.png" alt=""></div>
            <div class="card mt-4">
              <div class="card-body">
                <div class="text-center">
                  <h4>LOGIN</h4>
                  <h6>Enter your Username and Password </h6>
                </div>
                <form class="theme-form" method="POST" action="{{ route('login') }}">
                        @csrf

                 <div class="form-group">
                 <label class="pt-0"><b> Role Type</b></label>
                 <select class="form-control">
                 <option>OFFICE</option>
                 <option>ASSOCIATE</option>
                 <option>CLIENT</option>
                 </select>
                  </div>

                  <div class="form-group">
                    <label class="pt-0"><b> User Name</b></label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  </div>
                  <div class="form-group">
                    <label><b>Password</b> </label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  </div>
                  <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label for="checkbox1">Remember me</label>
                  </div>
                  <div class="form-group form-row mt-3 mb-0">
                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                  </div>
            
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- login page with video background end-->
      </div>
      <!-- Page Body End-->
    </div> 
    <!-- page-wrapper End-->
    <!-- latest jquery-->
<script src="./assets/js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap js-->
<script src="./assets/js/bootstrap/popper.min.js"></script>
<script src="./assets/js/bootstrap/bootstrap.js"></script>
<!-- feather icon js-->
<script src="./assets/js/icons/feather-icon/feather.min.js"></script>
<script src="./assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="./assets/js/sidebar-menu.js"></script>
<script src="./assets/js/config.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="./assets/js/script.js"></script>
<!-- Plugin used-->  </body>

<!-- Mirrored from laravel.pixelstrap.com/endless/authentication/login-video by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2019 11:24:46 GMT -->
</html>