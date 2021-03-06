<!doctype html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Language" content="en" />
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="theme-color" content="#4188c9">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <link rel="icon" href="<?php echo base_url(); ?>assets/template/front/theme/logo_ristek.jpg " type="image/png"/>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/template/front/theme/logo_ristek.jpg" />
  <!-- Generated: 2018-04-16 09:29:05 +0200 -->
  <title><?php echo $title ?> | <?php echo $subtitle ?>  </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
  <script src="<?php echo base_url(); ?>assets/template/front/theme/assets/js/require.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">

  <style>
    
.notification .badge {
  position: absolute;
  top: -10px;
  right: -20px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
}
  </style>

  <script>
    requirejs.config({
      baseUrl: '<?php echo base_url();?>assets/template/front/theme/',

      paths: {
        'jquery': 'https://code.jquery.com/jquery-3.3.1',
        'bootstrap': 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min',
        'datatables': 'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min',
        'datatables.bootstrap': 'https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min',
      },

      shim: {
        'bootstrap': {
          deps: ['jquery']
        },
      },

      map: {
        '*': {
          'datatables.net': 'datatables',
        }
      },
    });
    require(['jquery', 'datatables.bootstrap'], function($) {
      'use strict';

      $('#example').dataTable();
    });
  </script>
  <!-- Dashboard Core -->
  <link href="<?php echo base_url(); ?>assets/template/front/theme/assets/css/dashboard.css" rel="stylesheet" />
  <script src="<?php echo base_url(); ?>assets/template/front/theme/assets/js/dashboard.js"></script><script src="<?php echo base_url(); ?>assets/template/front/theme/assets/js/jquery.min.js"></script>
  <!-- c3.js Charts Plugin -->
  <link href="<?php echo base_url(); ?>assets/template/front/theme/assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
  <script src="<?php echo base_url(); ?>assets/template/front/theme/assets/plugins/charts-c3/plugin.js"></script>
  <!-- Google Maps Plugin -->
  <link href="<?php echo base_url(); ?>assets/template/front/theme/assets/plugins/maps-google/plugin.css" rel="stylesheet" />
  <script src="<?php echo base_url(); ?>assets/template/front/theme/assets/plugins/maps-google/plugin.js"></script>
  <!-- Input Mask Plugin -->
  <script src="<?php echo base_url(); ?>assets/template/front/theme/assets/plugins/input-mask/plugin.js"></script>
</head>
<body class="">
  <div class="page">
    <div class="page-main">
      <div class="header py-4">
        <div class="container">
          <div class="d-flex">
            <img src="<?php echo base_url(); ?>assets/template/front/theme/demo/brand/logo_ristek.jpg" class="header-brand-img" alt="ristek">
            <center>
              <a class="brand-text font-weight-light"> 
                <h2>SELAMAT DATANG DI SMK RISTEK INDRAMAYU</h2>
            </center> 
              </a>
          
          <?php if ($this->session->userdata('username_register')) { ?>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="pull-right">

                <a class="d-block" style="color:#000000;">HAI, <?= $user['nama_register']; ?></a>
                <!-- <i class="fa fa-bell" aria-hidden="true"></i> -->
                <div class="dropdown show">
                  <a class="btn btn-secondary dropdown-toggle notification" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <i class="fa fa-bell" aria-hidden="true"></i>
                    <span class="badge"><?=$count?></span> 
                    <!-- //value Count -->
                  </a>

                  <!-- <a href="#" class="notification">
  <span>Inbox</span>
  <span class="badge">3</span>
</a> -->

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <?php foreach ($notif as $notif) { ?>
                     <?php if ($notif->id_register == $user['id_register']) { ?>
                       <!-- <a class="dropdown-item" href="#"><?=$notif->message?></a> -->
                       <span class="w3-badge w3-green"><?=$notif->message?></span>
                     <?php } ?>
                   <?php } ?>

    <!-- <button type="button" class="btn btn-primary">
  Messages <span class="badge badge-light">4</span>
</button> -->

<!-- <p>News <span class="w3-badge w3-green">6</span></p>
 -->
</div>
</div>
<a href="<?php echo base_url('pendaftar/C_login/logout'); ?>" class="btn btn-default btn-flat">Logout</a>
<!-- <span class="avatar" style="background-image: url(<?php echo base_url(); ?>assets/template/front/theme/demo/faces/female/25.jpg)"></span> -->


<!-- <small class="text-muted d-block mt-1">Administrator</small> -->

</a>
</div>
</div>
<?php }else{ ?>
  <div class="d-flex order-lg-2 ml-auto">
    <div >
      <a href="<?php echo base_url('pendaftar/C_login'); ?>" >
        <!-- <span class="avatar" style="background-image: url(<?php echo base_url(); ?>assets/template/front/theme/demo/faces/female/25.jpg)"></span> -->
        <span class="ml-2 d-none d-lg-block">
          <span class="text-default">Login</span>
          <!-- <small class="text-muted d-block mt-1">Administrator</small> -->
        </span>
      </a>
    </div>
  </div>

  <div class="d-flex order-lg-2 ml-auto">
    <div >
      <a href="<?php echo base_url('pendaftar/C_register'); ?>" >
        <!-- <span class="avatar" style="background-image: url(<?php echo base_url(); ?>assets/template/front/theme/demo/faces/female/25.jpg)"></span> -->
        <span class="ml-2 d-none d-lg-block">
          <span class="text-default">Register</span>
          <!-- <small class="text-muted d-block mt-1">Administrator</small> -->
        </span>
      </a>
    </div>
  </div>
<?php } ?>
<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
  <span class="header-toggler-icon"></span>
</a>
</div>
</div>
</div>