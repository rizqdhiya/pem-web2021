<!DOCTYPE html>
<html>
    <head>
        <title>Joki Game</title>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial scale=1">
        <link rel="stylesheet" type="text/css" href="buku_tamu.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body>
        <div class="header">
            <h1>-We are Joki-</h1>
        </div>
        <div class="nav">
        <a href="index.html">Home</a>
                <a href="aboutme.html">About</a>
                <a href="order.html">Daftar Menjadi Joki</a> 
                <a href="buku_tamu.php">Buku Tamu</a>
                <br>
        </div>
        <br><br>
        <div id="container">
            <h1>Buku Tamu</h1>
            <p>Terima Kasih sudah datang, Silahkan isi buku tamu dan tinggalkan pesan/saran Anda!</p>
        <div class="buku">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="nama">
                <label>Nama</label>
                <input type="text" name="fnama">
            </div>
            <div class="nomerhp">
                <label>No Hp</label>
                <input type="number" name="fnomer">
            </div>
            <div class="email">
                <label>Email</label>
                <input type="email" name="femail">
            </div>
            <div class="alamat">
                <label>Alamat</label>
                <input type="text" name="falamat">
            </div>
            <div class="pesan">
                <label>Pesan</label>
                <input type="text" name="fpesan">
            </div>
            <div>
                <input type="submit" value="Kirim">
        </form>
        </div>

        </div>
        
        <div class="php">
            <?php
            if(isset($_POST['fnama'])){
                $nama = $_POST['fnama'];
                $nomer = $_POST['fnomer'];
                $email = $_POST['femail'];
                $alamat = $_POST['falamat'];
                $pesan = $_POST['fpesan'];
                echo "Nama: $nama | No.Hp: $nomer | Email: $email | Alamat: $alamat | Pesan: $pesan |";
            }
            ?>
        </div>
          <br><br><br>
                     
        <script type="text/javascript">
            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth();
            var thisDay = date.getDay(),
                thisDay = myDays[thisDay];
            var yy = date.getYear();
            var year = (yy < 1000) ? yy + 1900 : yy;
            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
         </script>

          
<!-- Footer -->
    <footer class="kaki">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href="#"> Rizq Dhiya Ulhaq</a>
    </div>
    <!-- Copyright -->
  </footer>
    </body>
</html>