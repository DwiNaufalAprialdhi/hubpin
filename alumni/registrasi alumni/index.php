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
    <title>Register Alumni</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

                    <?php include "../../koneksi.php"?>
<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <form action='aksi_register_alumni.php' enctype="multipart/form-data" method='post'>

                    <h2 class="title">Registrasi Alumni</h2>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nama Lengkap" id="nama" name="nama" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Alamat" id="alamat" name="alamat" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Telepon" id="telepon" name="telepon" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Tahun Lulus" id="tahun_lulus" name="tahun_lulus" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Keahlian" id="keahlian" name="keahlian" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Username" id="username" name="username" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="Password" id="password" name="password" required>
                        </div>
                         <div class="input-group">
                            <label>Pilih File Cv</label> <input class="input--style-1" type="file" placeholder="file_cv" id="file_cv" name="file_cv">
                        </div>


                    <div class="input-group">
                       <td colspan="3">
                            <div align="center">
                            <input type='hidden' name='id' value="<?php echo "$data[id]"; ?>"> <input type='submit' value='REGISTRASI'>
                            </div>
                        </td>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
