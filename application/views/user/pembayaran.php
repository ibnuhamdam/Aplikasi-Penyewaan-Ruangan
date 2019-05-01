<!DOCTYPE html>
<html lang="en">

<head>

    <!-- configuration for all page -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/');?>style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Open+Sans:400,600,700" rel="stylesheet">
    <!-- configuration for all page -->
    <title>pembayaran Ruangan</title>

</head>

<body>

    <?php $this->load->view('user/navbar'); ?>
    <?php $this->load->view('user/panel-steps3'); ?>

    <div class="form-pembayaran" id="form-pembayaran">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                <h3 class="payment">Payment Details</h3>
                <form method="post" action="<?php echo site_url('/controller_utama/konfirmasi');?>">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Pengirim</label>
                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <!-- <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Kartu Identitas (Ktp/Ktm/Sim)</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div> -->
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Metode Pembayaran</label>
                        <div class="row text-center text-secondary">
                            <div class="col-md-4 bni" >
                                <a href="#" id="bni">
                                <img src="<?php echo base_url('/assets/img/');?>BNI.png" alt="" class="img-fluid">
                                Transfer ATM BNI</a>
                            </div>
                            <div class="col-md-4 mandiri" >
                                <a href="#" id="mandiri">
                            <img src="<?php echo base_url('/assets/img/');?>mandiri.png" alt="" class="img-fluid">
                                Transfer ATM Mandiri
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group " id="transferatm">
                       <b> Transfer ATM BNI </b>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Penerima</label>
                        <input type="text" name="" class="form-control" id="exampleFormControlInput1" value="Bandung Techno Park" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">No. Rekening</label>
                        <input type="text" name="" class="form-control" id="norek" value="4425 0986" disabled="disabled">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal Penyewaan  <span class="text-danger">*</span><span class="text-secondary">(hari/bulan/tahun)</span></label>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-3" style="padding-right: 0px;padding-left: 15px;">
                                        <input type="number" name="tanggalawal" class="form-control" id="exampleFormControlInput1" required>
                                    </div>
                                    <div class="col-md-3" style="padding-right: 0px;padding-left: 10px;">
                                        <input type="number" name="tanggalawal" class="form-control" id="exampleFormControlInput1" required>
                                    </div>
                                    <div class="col-md-6" style="padding-right: 0px;padding-left: 10px;">
                                        <input type="number" name="tanggalawal" class="form-control" id="exampleFormControlInput1" placeholder="tahun" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 text-center">
                                <h2>-</h2>
                            </div>
                            <div class="col-md-5">
                            <div class="row">
                                    <div class="col-md-3" style="padding-right: 0px;padding-left: 15px;">
                                        <input type="number" name="tanggalawal" class="form-control" id="exampleFormControlInput1"  required>
                                    </div>
                                    <div class="col-md-3" style="padding-right: 0px;padding-left: 10px;">
                                        <input type="number" name="tanggalawal" class="form-control" id="exampleFormControlInput1"  required>
                                    </div>
                                    <div class="col-md-6" style="padding-right: 0px;padding-left: 10px;">
                                        <input type="number" name="tanggalawal" class="form-control" id="exampleFormControlInput1" placeholder="tahun" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Total Harga</label>
                        <div class="col-md-12 harga">
                            <h1 class="text-dark">Rp 150.000</h1>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Bukti Pembayaran</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" required>
                    </div>

                    <a href="<?php echo site_url('/controller_utama/konfirmasi');?>"></a><button type="submit" class="btn btn-danger btn-block" id="request">Request Penyewaan</button>
                </form>
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
    <script src="<?php echo base_url("/assets/js/");?>atm.js"></script>
</body>

</html>