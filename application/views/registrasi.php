<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registrasi Pasien</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url(); ?>assets/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>assets/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>

<?php
    $parameter = array(
        'id' => 'constURL',
        'class' => 'constURL',
        'type' => 'hidden',
        'value' => base_url('/index.php'),
        );
        echo form_input($parameter);
    ?>

    <!-- <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins"> -->
    <div class="page-wrapper bg-gra-02 p-t-50 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Form Registrasi Pasien</h2>
                    <form method="POST">
                        <div class="input-group">
                                <label class="label">Nama</label>
                                <input class="input--style-4" type="text" name="nama" id="nama" placeholder="nama pasien">
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Jenis Kelamin</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Pria
                                            <input type="radio" checked="checked" name="gender" id="pria">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Wanita
                                            <input type="radio" name="gender" id="wanita">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tanggal Lahir</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday" id="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">HP</label>
                                    <input class="input--style-4" type="text" name="phone" id="phone">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" id="email">
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">Layanan</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                            <!--     <select name="layanan" id="layanan">
                                    <option disabled="disabled" selected="selected">Pilihan layanan</option>
                                    <option>Konsultasi</option>
                                    <option>Buat Perjanjian</option>
                                    <option>Lain-lain</option>
                                </select> -->

                                <?php
                                    //print_r($daftarlayanan);die;

                                    $parameter = array(
                                        'id' => 'layanan',
                                        'name' => 'layanan',
                                        'class' => 'layanan',
                                        'required' => 'required',
                                        'options' => isset($daftarlayanan) ? array('0' => 'Pilihan layanan') + $daftarlayanan : array()
                                        //'selected' => isset($coderole) ? $coderole : 0,
                                        //'onchange' => "selectedRole()"
                                    );
                                    echo form_dropdown($parameter);
                                ?>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button id="btnSubmit" class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/select2/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url(); ?>assets/js/global.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/register.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
