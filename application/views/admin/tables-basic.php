<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Pages</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <!-- <link rel="stylesheet" href="assets/css/cs-skin-elastic.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/'); ?>style-admin.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->
    <?php $this->load->view('admin/left-panel');?>
    <!-- /#left-panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
       <?php $this->load->view('admin/header');?>
        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Daftar Penyewa</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Penyewa</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tabel Penyewa</strong>
                        </div>
                        <div class="card-body">
                        <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Nama Penyewa</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Organisasi/Kepanitian</th>
                                          <th scope="col">Jumlah</th>
                                          <th scope="col">Keperluan</th>
                                          <th scope="col">Lama</th>
                                          <th scope="col">Status</th>
                                          <th scope="col"></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach ($data_ke_view as $data): ?>
                                    <tr>
                                        <th scope="row"><?php echo $data["id"];?></th>
                                        <td><?php echo $data["nama"]; ?></td>
                                        <td><?php echo $data["email"]; ?></td>
                                        <td><?php echo $data["organisasi"]; ?></td>
                                        <td><?php echo $data["jumlah"]; ?></td>
                                        <td><?php echo $data["keperluan"]; ?></td>
                                        <td><?php echo $data["Lama"]; ?> hari</td>
                                        <td><?php echo $data["status"]; ?></td>
                                        <td class="text-center"><a href="<?php echo site_url('controller_admin/form/'.$data["id"]);?>"> <i class="fas fa-edit text-success"></i></a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                  </tbody>
                                </table>

                        </div>
                    </div>
                </div>

        </div>
    </div>
    <!-- .animated -->
    </div>
    <!-- .content -->

<div class="clearfix"></div>

<footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
                Copyright &copy; 2018 Ela Admin
            </div>
            <div class="col-sm-6 text-right">
                Designed by <a href="https://colorlib.com">Colorlib</a>
            </div>
        </div>
    </div>
</footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?php echo base_url('/assets/js/'); ?>main.js"></script>


</body>
</html>
