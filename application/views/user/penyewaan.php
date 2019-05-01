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
    <title>Penyewaan Ruangan</title>

</head>

<body>

    <?php $this->load->view('user/navbar'); ?>


    <!-- <div class="step">
        <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-1 activestep" id="daftar">
                    <div class="row">
                        <div class="col-md-10 pendataan" >
                            <p class="text-white">1  pendaftaran </p>
                        </div>
                        <div class="col-md-2">
                            <div class="segitigaactive" id="segitigad">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 steps" id="setuju">
                    <div class="row">
                            <div class="col-md-10 pendataan">
                                <p class="">2  penyetujuan </p>
                            </div>
                            <div class="col-md-2">
                                <div class="segitiga" id="segitigas">
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-3 stepsbyr">
                    <div class="tu">
                        <p>3 Pembayaran</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div> -->
    <?php $this->load->view('user/panel-steps'); ?>

    <div class="form-user" id="form-user">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                <form method="post" action="<?php echo site_url('/controller_utama/konfirmasi');?>">
                    <?php foreach ($data_ke_view as $data): ?>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email Address</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Penyewa</label>
                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Kartu Identitas (Ktp/Ktm/Sim)</label>
                        <input type="file" name="kartu" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Organisasi / Kepanitian</label>
                        <input type="text" name="organisasi" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jumlah Pengunjung</label>
                        <input type="number" name="jumlah" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Keperluan</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="keperluan">
                        <option>Seminar / Workshop</option>
                        <option>Rapat Kepanitiaan / Organisasi</option>
                        <option>Lainnya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal Penyewaan  <span class="text-danger">*</span><span class="text-secondary">(hari/bulan/tahun)</span></label>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-3" style="padding-right: 0px;padding-left: 15px;">
                                        <input type="number" name="hariawal" class="form-control" id="hariawal" required>
                                    </div>
                                    <div class="col-md-3" style="padding-right: 0px;padding-left: 10px;">
                                        <input type="number" name="bulanawal" class="form-control" id="bulanawal" required>
                                    </div>
                                    <div class="col-md-6" style="padding-right: 0px;padding-left: 10px;">
                                        <input type="number" name="tahunawal" class="form-control" id="tahunawal" placeholder="tahun" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 text-center">
                                <h2>-</h2>
                            </div>
                            <div class="col-md-5">
                            <div class="row">
                                    <div class="col-md-3" style="padding-right: 0px;padding-left: 15px;">
                                        <input type="number" name="hariakhir" class="form-control" id="hariakhir"  required>
                                    </div>
                                    <div class="col-md-3" style="padding-right: 0px;padding-left: 10px;">
                                        <input type="number" name="bulanakhir" class="form-control" id="bulanakhir"  required>
                                    </div>
                                    <div class="col-md-6" style="padding-right: 0px;padding-left: 10px;">
                                        <input type="number" name="tahunakhir" class="form-control" id="tahunakhir" placeholder="tahun" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="btn btn-warning text-white" id="check">check harga</a>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Total Harga</label>
                        <div class="col-md-12 harga">
                            <h1 class="text-dark">Rp <span id="totalharga"> 150.000</span></h1>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                        <label class="form-check-label text-secondary" style="font-size:12px;" for="gridCheck">
                           <span class="text-danger">*</span> Saya menyetujui segala kebijakan dan peraturan yang berlaku
                        </label>
                        </div>
                    </div>
                    <?php endforeach;?>

                    <a href="<?php echo site_url('/controller_utama/konfirmasi/'.$data["id"]);?>"></a><button type="submit" class="btn btn-danger btn-block" id="request">Request Penyewaan</button>
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
</body>

</html>