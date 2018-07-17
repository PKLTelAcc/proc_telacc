<?php
date_default_timezone_set('Asia/Bangkok');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT. TELKOM AKSES | <?php if(isset($title)) echo $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/proj_telacc/asset1/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/proj_telacc/asset1/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/proj_telacc/asset1/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/proj_telacc/asset1/dist/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap.min.css">
  <!-- <link rel="stylesheet" href="/proj_telacc/asset1/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="/proj_telacc/asset1/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/proj_telacc/asset1/dist/css/skins/_all-skins.min.css">

  <!-- Grafik -->
  <!-- Morris charts -->
  <link rel="stylesheet" href="/proj_telacc/asset1/bower_components/morris.js/morris.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>

    .autocomplete {
  /*the container must be positioned relative:*/
      position: relative;
      
      }
    .autocomplete-items {
      position: absolute;
      border: 1px solid #d4d4d4;
      border-bottom: none;
      border-top: none;
      z-index: 99;
      /*position the autocomplete items to be the same width as the container:*/
      top: 100%;
      left: 0;
      right: 0;
    }
    .autocomplete-items div {
      padding: 10px;
      cursor: pointer;
      background-color: #fff; 
      border-bottom: 1px solid #d4d4d4; 
    }
    .autocomplete-items div:hover {
      /*when hovering an item:*/
      background-color: #e9e9e9; 
    }
    .autocomplete-active {
      /*when navigating through the items using the arrow keys:*/
      background-color: DodgerBlue !important; 
      color: #ffffff; 
    }

    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
    /*tambahan*/
    .right{
      text-align: right !important;
    }
    .center{
      text-align: center !important;
    }
    .left{
      text-align: left !important;
    }

    thead tr th{
      text-align: center !important; 
    }
    thead tr td{
      text-align: center !important; 
    }
  </style>

  <!-- jquery -->
  <script src="/proj_telacc/asset1/dist/js/jquery-1.11.2.min.js"></script>
  <script src="/proj_telacc/asset1/dist/js/adminlte.min.js"></script>
 
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-red layout-top-nav">

  <header class="main-header" >
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="C_dashboard" class="navbar-brand"><b>TELKOM AKSES</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
               <?php
                  if ($_SESSION['level'] == 'SUPER USER') {
                    ?>
                      <li class="<?php if(isset($menu)) if($menu == 'work_order') echo 'active'?>">
                        <!--sistem-->
                        <a class="dropdown-toggle" style="cursor: pointer;" type="button" data-toggle="dropdown">
                          <i class="fa fa-industry"></i>
                          Sistem
                          <span class="caret"></span></a>
                          <ul class="dropdown-menu">  
                            <li><a href="<?php echo base_url()?>c_witel">Input Witel</a></li>
                            <li><a href="<?php echo base_url()?>c_subWitel">Input Sub Witel</a></li>
                            <li><a href="<?php echo base_url()?>c_mitra">Input Mitra</a></li>
                            <li><a href="<?php echo base_url()?>c_pegawai">Input Pegawai</a></li>
                            <li><a href="<?php echo base_url()?>c_user">Input User</a></li>
                            <li><a href="<?php echo base_url()?>c_level">Input Level</a></li>
                            <li><a href="<?php echo base_url()?>c_status">Input Status</a></li>
                            <li><a href="<?php echo base_url()?>c_program">Input Program</a></li>
                          </ul>
                      </li>
                <!--WO-->
                <li >
                  <a href="<?php echo base_url()?>c_workOrder">
                    <i class="glyphicon glyphicon-list-alt"></i>
                    Work Order
                  </a>
                </li>
                <!--survey-->
                <li >
                  <a href="<?php echo base_url()?>c_survey">
                    <i class="glyphicon glyphicon-list-alt"></i>
                    Survey
                  </a>
                </li>
                <!--instalasi-->
                <li >
                  <a href="<?php echo base_url()?>c_instalasi">
                    <i class="glyphicon glyphicon-list-alt"></i>
                    Instalasi
                  </a>
                </li>
                <?php
                  }
                  ?>
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
                    <span class="hidden-xs">SUDO</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="user-header">
                      <img src="/proj_telacc/asset1/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                      <p>
                        SUDO - <span> Admin </span>
                        <small>Member since Nov. 2012</small>
                      </p>
                    </li>

                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="<?php echo base_url() ?>C_profil" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="<?php echo base_url() ?>C_login/logout" class="btn btn-default btn-flat">Sign out</a>
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