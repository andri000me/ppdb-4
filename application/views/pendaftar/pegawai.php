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
    <script src="<?php echo base_url(); ?>assets/template/front/theme/assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="<?php echo base_url(); ?>assets/template/front/theme/assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="<?php echo base_url(); ?>assets/template/front/theme/assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="<?php echo base_url(); ?>assets/template/front/theme/assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="<?php echo base_url(); ?>assets/template/front/theme/assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="<?php echo base_url(); ?>assets/template/front/theme/assets/plugins/input-mask/plugin.js"></script>
  </head>
  <body>
      <div class="container post">
        <div class="card-header">
                <h3 class="card-title">PEGAWAI</h3>
            </div>
          <div class="row">
            <?php 
              foreach($data_guru as $key => $value){
                echo "<div class='col-md-4'>
              <div class='card mb-4 box-shadow'>
                <img class='card-img-top' src='".base_url('upload/guru/').$value->foto_guru."' alt='Card image cap' width='600px' height='400px'>
                <div class='card-body'>
                  <p class='card-text'>$value->nama_guru</p>
                  <p class='card-text'>$value->jk_guru</p>
                  <p class='card-text'>NUPTK = $value->nuptk_guru</p>
                  <p class='card-text'>Mengajar $value->mapel_guru</p>
                  <p class='card-text'>Lulusan $value->ijazah_guru</p>
                  <div class='d-flex justify-content-between align-items-center'>
                    <div class='btn-group'>
                    </div>
                  </div>
                </div>
              </div>
            </div>";
            }
            ?>
            
 
            
        </div>
  </body>

  </html>