
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="http://myprojectstaging.com/custom/whocares_dev/uploads/settings/tree-img.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Who Cares Today</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/animate.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('/admin/assets/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet"/>
    <link href="{{ asset('/admin/assets/css/demo.css') }}" rel="stylesheet" />
    <link href="{{ asset('/admin/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/admin/assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css">
    <script src="{{ asset('/admin/assets/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admin/assets/ckeditor/ckeditor.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('/admin/assets/css/jquery.dataTables.css') }}">
    <script type="text/javascript" charset="utf8" src="{{ asset('/admin/assets/js/jquery.dataTables.js') }}"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>

 <div class="wrapper">

<div class="sidebar" data-color="purple" data-image="http://myprojectstaging.com/custom/whocares_dev/uploads/developer/sidebar-5.jpg">
    <style>
        .sidebar:after {background: linear-gradient(to bottom, #340134 0%, #301452 133%) !important;}
    </style>
    <div class="sidebar-wrapper">
        <div class="logo"><a href="#" class="simple-text"><img style="max-width:200px;" class="img-responsive" src="http://myprojectstaging.com/custom/whocares_dev/uploads/settings/logo1.png"></a></div>
        <ul class="nav">
            <li class="active"><a href="{{ route('admin-dashboard') }}"><i class="pe-7s-graph"></i><p>Dashboard</p></a></li>
            <li><a href="{{ route('user-profile') }}"><i class="pe-7s-user"></i><p>User Profile</p></a></li>

            <li><a href="{{ route('site-setting') }}"><i class="pe-7s-config"></i><p>Site Settings</p></a></li>
            <!-- li><a href="http://myprojectstaging.com/custom/whocares_dev/admin/events"><i class="pe-7s-news-paper"></i><p>Event News</p></a></li -->

            <li class="dropdown">
              <a href="#" class="dropdown-toggle bcktrans" data-toggle="collapse" data-target="#demo">
                <i class="pe-7s-note2"></i>
                <p>
                    Pages Setting
                    <b class="caret"></b>
                </p>
            </a>
            <ul id="demo" class="collapse">

                <li><a href="{{ route('home') }}">Home Page</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Contact-us</a></li>
                <li><a href="">Socailmedia-link</a></li>

            </ul>
        </li>

            </ul>
</div>
</div>

<style type="text/css">
    .dropdown-menu li a
    {
        color:#000 !important;
    }
    .bcktrans
    {
        background: rgba(255, 255, 255, 0.14);
    }
    .collapse li a
    {
        font-size: 16px;
    }
</style><div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="javascript:">Dashboard</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ route('login') }}">
                            <p>Log out</p>
                        </a>
                    </li>
                    <li class="separator hidden-lg"></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

 <footer class="footer">
  <div class="container-fluid">
    <nav class="pull-left">
    </nav>
    <p class="copyright pull-right">
      © 2019 WHO CARES | All Rights Reserved    </p>
  </div>
</footer>

</div>
</div>


<script src="http://myprojectstaging.com/custom/whocares_dev/assets/admin/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="http://myprojectstaging.com/custom/whocares_dev/assets/admin/assets/js/bootstrap-notify.js"></script>
<script src="http://myprojectstaging.com/custom/whocares_dev/assets/admin/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<script src="http://myprojectstaging.com/custom/whocares_dev/assets/admin/assets/js/demo.js"></script>
<script>
    const getBase64 = function(e){


   //             // $('#base_image').attr('src',e.target.result);
           }
             let img_elem;
             const reader = new FileReader();
               reader.addEventListener('load',function(e){
               img_elem.setAttribute('src',e.target.result);
             });
             function getFile(e){
               img_elem = e.parentNode.querySelector(".base_img");
                   let file = e.files[0];
                   reader.readAsDataURL(file)
             }
           </script>
            <script>
   if ($("#contact_form").length > 0) {
       $("#contact_form").validate({

           rules: {
             service_heading: {
                   required: true,

               },

           },
           messages: {

             service_heading: {
                   required: "Please enter name",
               },



           },
       })
   }
   </script>


<script>
    $(document).ready(function(){
        $('.editor').each(function(e) {
          CKEDITOR.replace( this.id,{
            allowedContent : true,
          });
        });
      })
    </script>
</body>
    </html>
