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
            <div class="col-md-12 text-center text-secondary penyewaan">
                DETAIL RUANGAN
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row space">
            <div class="col-md-6">
                <img src="https://getsmartworkspaces.com/wp-content/uploads/2014/05/Screen-Shot-2014-05-30-at-4.34.57-PM.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <h3 class="text-secondary">OFFICE SPACE</h3>
                <span class="text-warning">
                    <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
                </span>
                <div class="desc ">
                    <p class="text-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex sint eius in consequatur, qui aspernatur totam porro modi vitae optio cupiditate cumque dolores repellat culpa voluptate explicabo dolorem. Quia, quasi?</p> 
                </div>
                <span>
                    <p class="text-secondary"><i class="fas fa-users fa-lg text-info" style="margin-right: 11px;"></i> Max. 50 people </p>
                </span>
                <span>
                    <p class="text-secondary"><i class="fas fa-wifi fa-lg text-info" style="margin-right: 10px;"></i> Free Wifi</p>
                </span>
                <span>
                    <p class="text-secondary"><i class="fas fa-map-marker-alt fa-lg text-info" style="margin-right: 14px;margin-left: 6px;"></i> Easy Access </p>
                </span>
                <div class="price">
                    <h2 class="text-success">Rp 150.000 / day</h2>
                </div>
                <a href="#"><button type="button" class="btn btn-secondary btn-sewa">sewa sekarang</button></a>
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