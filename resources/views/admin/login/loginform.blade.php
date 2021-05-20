
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Who Cares Today</title>
  <link rel="icon" href="{{asset('admin/uploads/settings/logo1.png')}}" type="image/gif" sizes="16x16">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('/admin/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="{{asset('/admin/assets/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
  <style>
  .toast-top-right{ top:43% !important; right:39% !important;background-color: #20a9d2!important}
    .vl {border-left: 3px solid green;height:100px;}
  .white{background-color:#ffffffd6;padding: 36px;border: 1px solid red;}.btn{border-radius: 0px;}.center{text-align: center;}
  .gap{padding-top:110px;}.form-control{border-radius: 0px !important;border: 1px solid #675e5e;}
</style>
</head>
<body class="hold-transition login-page" style="background-image: url('http://myprojectstaging.com/custom/whocares_dev/uploads/developer/banner-1.jpg');background-repeat:no-repeat;background-size: cover;background-position: center;height: 100vh;">
     <div class="container gap">
    <div class="col-md-offset-4 col-sm-offset-4  col-sm-4 col-md-4 white">

      <div align="center" data-tilt>

        <img style="width: 200px;" src="{{asset('admin/uploads/settings/logo1.png')}}" alt="IMG">
        <div class="form-main">
            <h1>login to your account</h1>
            @if(session('error'))
            <div class="alert alert-danger">
              <span>{{session('error')}}</span>
            </div>
            @endif
      </div>
    </div>
      <h2 class="center"><b><span style="color:red;">Admin</span> Pannel</b></h2>
      <p class="login-box-msg center"><b>Sign in to start your session</b></p>
      <form action="{{route('admin-login')}}" method="POST">
        @csrf
        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" placeholder="Email" value="">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Password" value="">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox" name="remember" type="true" value="yes"> Remember Me
              </label>
            </div>
          </div>
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
        </div>
      </form>
      <a href="">I forgot my password</a><br>
    </div>
  </div>

</body>
<script src="{{asset('assets/admin/assets/js/tilt.jquery.min.js')}}"></script>
</html>
