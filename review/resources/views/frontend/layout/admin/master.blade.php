<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8" />
 <link rel="icon" type="image/png" href="/light-bootstrap-dashboard-master/assets/img/favicon.ico">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

 <title>Light Bootstrap Dashboard by Creative Tim</title>

 <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
 <meta name="viewport" content="width=device-width" />


 <!-- Bootstrap core CSS     -->
 <link href="/light-bootstrap-dashboard-master/assets/css/bootstrap.min.css" rel="stylesheet" />

 <!-- Animation library for notifications   -->
 <link href="/light-bootstrap-dashboard-master/assets/css/animate.min.css" rel="stylesheet"/>

 <!--  Light Bootstrap Table core CSS    -->
 <link href="/light-bootstrap-dashboard-master/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


 <!--  CSS for Demo Purpose, don't include it in your project     -->
 <link href="/light-bootstrap-dashboard-master/assets/css/demo.css" rel="stylesheet" />


 <!--     Fonts and icons     -->
 <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
 <link href="/light-bootstrap-dashboard-master/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="{{route('home')}}" class="simple-text">
            HOME
          </a>
        </div>
        <!-- Phần sửa link -->
        <ul class="nav">
          <li>
            <a href="{{route('adminProfile')}}">
              <i class="pe-7s-user"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="{{route('restaurantManagement')}}">
              <i class="pe-7s-note2"></i>
              <p>Insert new restaurant</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="pe-7s-news-paper"></i>
              <p>Typography</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="pe-7s-science"></i>
              <p>Icons</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="pe-7s-map-marker"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="{{route('list.Slide')}}">
              <i class="pe-7s-bell"></i>
              <p>Slider list</p>
            </a>
          </li>
          <li class="#">
            <a href="{{route('create.Slide')}}">
              <i class="pe-7s-rocket"></i>
              <p>Insert pic for slider</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-panel">
      <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">Home</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p>
                  Chào mừng :
                  <b class="caret"></b>
                </p>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
            <li>
              <a href="#">
                <p>Log out</p>
              </a>
            </li>
            <li class="separator hidden-lg"></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="content">
     @yield('contentadmin')
   </div>
   <!-- không động tới -->
   <footer class="footer">
    <div class="container-fluid">
      <nav class="pull-left">
        <ul>
          <li>
            <a href="#">
              Home
            </a>
          </li>
          <li>
            <a href="#">
              Company
            </a>
          </li>
          <li>
            <a href="#">
              Portfolio
            </a>
          </li>
          <li>
            <a href="#">
             Blog
           </a>
         </li>
       </ul>
     </nav>
     <p class="copyright pull-right">
      &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
    </p>
  </div>
</div>

</footer>

</div>
</div>
<script src="/light-bootstrap-dashboard-master/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="/light-bootstrap-dashboard-master/assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="/light-bootstrap-dashboard-master/assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="/light-bootstrap-dashboard-master/assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="/light-bootstrap-dashboard-master/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="/light-bootstrap-dashboard-master/assets/js/demo.js"></script>

<script type="text/javascript">
 $(document).ready(function(){

   demo.initChartist();

   $.notify({
     icon: 'pe-7s-gift',
     message: "hello admin"

   },{
    type: 'info',
    timer: 4000
  });

 });
</script>
</body>

</html>