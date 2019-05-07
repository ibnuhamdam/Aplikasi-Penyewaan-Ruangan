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
    <title>konfirmasi Ruangan</title>

</head>

<body>

    <?php 
        if($this->session->flashdata('alert')=='Pendaftaran_berhasil'){
        echo "<script> alert('Selamat ! Pendaftaran anda berhasil');</script>";
    }?>

    <?php $this->load->view('user/navbar'); ?>
    <?php $this->load->view('user/panel-steps2'); ?>

    <div class="konfirmasi" id="konfirmasi">
        <div class="container">
            <div class="col-md-9 offset-md-1 text-center text-dark">
                <h2>Silahkan cek email anda untuk mendapatkan konfirmasi penyetujuan. Anda akan mendapatkan link menuju halaman pembayaran jika sudah disetujui</h2>
                <a href="https://gmail.com" target="_blank"><button class="btn btn-danger text-white" style="margin-top:20px;">Cek Email</button></a>
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