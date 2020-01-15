5<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register Siswa</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- Favicons -->
    <link rel="shortcut icon" href="../../images/logo.png">   
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

                    <?php include "../../koneksi.php"?>
<body background="images/bgku.jpg">
    <div class="bangsat">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <form action='aksi_register.php' method='GET'>

                    <h2 class="title">Registrasi Siswa</h2>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Username" id="username" name="username">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="Password" id="password" name="password">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nama" id="nama" name="nama">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Telepon" id="telepon" name="telepon">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Kelas" id="kelas" name="kelas">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Jurusan" id="jurusan" name="jurusan">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Kelompok" id="kelompok" name="kelompok">
                        </div>

                        <div class="input-group">
                            Apakah anda seorang siswa prakerin ?<input class="input--style-1" type="radio" name="level"
                            <?php if (isset($level) && $level == "siswa") {echo "checked";}?>value="siswa"><div style="text-align: center;"> Ya</div>
                        </div>


                    <div class="input-group">
                       <td colspan="3">
                            <div align="center">
                            <input type='hidden' name='id' value="<?php echo "$data[id]"; ?>"><input type='submit' value='REGISTRASI'>
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
