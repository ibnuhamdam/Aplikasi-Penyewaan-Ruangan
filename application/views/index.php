<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Style Css -->
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/");?>style.css">
    <title>Penyewaan Ruangan</title>
  </head>
  <body>
    <?php $this->load->view('navbar'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center penyewaan">
               <h2> PENYEWAAN RUANGAN </h2>
            </div>
        </div>
    </div>

    <div class="view d-none" id="view">
        <a href="#" type="button" data-toggle="modal" data-target="#exampleModal"> 
        <span style="font-size: 80px;">
            <i class="fas fa-search fa-xl text-white"></i>
        </span><br>
        <p> QUICK VIEW </p>
        </a>
    </div>

    <div class="view2 d-none" id="view">
        <a href="#" type="button" data-toggle="modal" data-target="#exampleModal"> 
        <span style="font-size: 80px;">
            <i class="fas fa-search fa-xl text-white"></i>
        </span><br>
        <p> QUICK VIEW </p>
        </a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:5%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <img src="https://getsmartworkspaces.com/wp-content/uploads/2014/05/Screen-Shot-2014-05-30-at-4.34.57-PM.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-1 col-sm-12 justify-content-end">
                <div class="card" >
                    
                    <div class="card-body text-center">
                    <div class="quick-view" id="quick-view">
                    </div>
                        <h3 class="card-title">office space</h3>
                        <p class="card-text">We offer flexible office space with prestigious business address, complete furnish, and all things you need for an office.</p>
                        
                    </div>
                    <a href="<?php echo site_url('controller_utama/detail');?>" class="btn btn-secondary btn-block btn-detail">Detail</a>
                </div>
            </div>
            <div class="col-md-5 col-sm-12 col-sm-12 justify-content-end">
                <div class="card" >
                    
                    <div class="card-body text-center">
                    <div class="quick-view" id="quick-view">
                    </div>
                        <h3 class="card-title">office space</h3>
                        <p class="card-text">We offer flexible office space with prestigious business address, complete furnish, and all things you need for an office.</p>
                        
                    </div>
                    <a href="<?php echo site_url('controller_utama/detail');?>" class="btn btn-secondary btn-block btn-detail">Detail</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Script JS -->
    <script src="<?php echo base_url("/assets/js/");?>script.js"></script>
  </body>
</html>