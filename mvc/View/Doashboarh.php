<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="http://localhost/fameworkMVC/index.php">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Trang quản trị  </title>
    <link href="./public/lib/icon/fontawesome/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="./public/doashboarh/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./public/doashboarh/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./public/doashboarh/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="./public/doashboarh/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="./public/doashboarh/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="./public/doashboarh/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="./public/doashboarh/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./public/doashboarh/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Hello <?php echo $data['useradmin'] ?></span></a>
            </div>

            <div class="clearfix"></div>

           <?php require_once './mvc/View/block/adminleftblock.php' ?>
                
         <?php if (isset($data['page'])) {
                
            ?>
             <?php require_once './mvc/View/pages/'.$data['page'].'.php' ?>
            
            <?php }  ?> 
           <?php require_once './mvc/View/block/adminfooterblock.php' ?>
      </div>
    </div>

    <!-- jQuery -->
    <script src="./public/doashboarh/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="./public/doashboarh/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="./public/doashboarh/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="./public/doashboarh/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="./public/doashboarh/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="./public/doashboarh/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="./public/doashboarh/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="./public/doashboarh/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="./public/doashboarh/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="./public/doashboarh/vendors/Flot/jquery.flot.js"></script>
    <script src="./public/doashboarh/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="./public/doashboarh/vendors/Flot/jquery.flot.time.js"></script>
    <script src="./public/doashboarh/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="./public/doashboarh/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="./public/doashboarh/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="./public/doashboarh/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="./public/doashboarh/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="./public/doashboarh/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="./public/doashboarh/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="./public/doashboarh/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="./public/doashboarh/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="./public/doashboarh/vendors/moment/min/moment.min.js"></script>
    <script src="./public/doashboarh/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="./public/doashboarh/build/js/custom.min.js"></script>
  
  </body>
</html>
