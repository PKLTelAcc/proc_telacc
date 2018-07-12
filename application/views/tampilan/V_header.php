<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/proj_telacc/asset1/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/proj_telacc/asset1/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/proj_telacc/asset1/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Morris charts -->
  <link rel="stylesheet" href="/proj_telacc/asset1/bower_components/morris.js/morris.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/proj_telacc/asset1/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/proj_telacc/asset1/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">

  <header class="main-header" >
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="dashboard.html" class="navbar-brand"><b>CORPORATE</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <!-- Stock -->
                <li >
                  <a href="stock.html">
                    <i class="fa fa-industry"></i>
                    Stock
                  </a>
                </li>
                <!-- Keuangan -->
                <li >
                  <a href="finance.html">
                    <i class="fa fa-balance-scale"></i>
                    Finance
                  </a>
                </li>
                <!-- Report -->
                <li >
                  <a href="report.html">
                    <i class="fa fa-bar-chart-o"></i>
                    Report
                  </a>
                </li>

                <!-- User Account Menu -->
                <li class="dropdown user user-menu active">
                  <!-- Menu Toggle Button -->
                  <a href="dashboard.html" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                    <img src="/proj_telacc/asset1/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class="hidden-xs">Krena Aji Hidayat</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="user-header">
                      <img src="/proj_telacc/asset1/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                      <p>
                        Kresna Aji Hidayat - <span> Admin </span>
                        <small>Member since Nov. 2012</small>
                      </p>
                    </li>

                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="profile.html" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- /.navbar-custom-menu -->
          </div>
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>