<?php
    include 'config.php';
    
    error_reporting(0);
    if(isset($_POST['submit'])){
        $name =$_POST['name'];
        $email =$_POST['email'];
        $coment =$_POST['coment'];

        $sql = "INSERT INTO coments (name,email,coment)
        VALUES ('$name','$email','$coment')";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            echo "<script>alert('comment telah berhasil')</script>";
        } else {
            echo "<script>alert('comment tidak berhasil')</script>";
        }
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/logo2.png"href="image/logo2.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>BUMDES AMANAH | BERANDA</title>
</head>
<body>
    <!--nav-->
    <section class="header">
       <nav><a href="index.php"><img src="image/logo2.png"></a>
       <div class="nav-links" id="navLinks">
       <i class='bx bx-x'onclick="hideMenu()"></i>
        <ul>
            <li><a href="index.php">BERANDA</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="barang.php">BARANG</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
       </div>
       <i class='bx bx-menu'onclick="showMenu()"></i>
    </nav>
    <div class="text-box">
        <h1>BUMDES AMANAH</h1>
        <p>BUMDES SAYANG KEC.JATINANGOR KAB.SUMEDANG</p>
        <a href="barang.php" class="hero-btn">TOMBOL UNTUK KE HALAMAN BARANG</a>
    </div>
    </section>
    <!--about content-->
    <section class="about-us">
        <div class="row">
            <div class="about-col"><br><br><br><br>
                <h1>Apa Itu BUMDES?</h1>
                <p>bumdes adalah badan hukum yang didirikan oleh desa dan/atau bersama desa-desa guna mengelola usaha, memanfaatkan aset, mengembangkan investasi dan produktivitas,
                     menyediakan jasa pelayanan, dan/atau menyediakan jenis usaha lainnya untuk sebesar-besarnya kesejahteraan masyarakat Desa.</p>
                    <a href="about.php" class="hero-btn yellow-btn">pelajari lebih lanjut &#8594;</a>
            </div>
            <div class="about-col">
                <img src="image/nyoba.jpg">
            </div>
        </div>
         <!--foto kegiatan-->
    <section class="facilities">
        <h1>tentang kegiatan</h1>
        <p>descripsi</p>
        <div class="row">
            <div class="facilities-col">
                <img src="image/fototentang1.jpg">
                <h3>isi dari judul tersebut</h3>
                <p>Lorem ipsum disebut juga dengan greeking (melatinkan/meyunanikan) karena kalimat ini berasal dari bahasa Latin.</p>
            </div>
            <div class="facilities-col">
                <img src="image/fototentang2.jpg">
                <h3>isi dari judul tersebut</h3>
                <p>Lorem ipsum disebut juga dengan greeking (melatinkan/meyunanikan) karena kalimat ini berasal dari bahasa Latin.</p>
            </div>
            <div class="facilities-col">
                <img src="image/fototentang3.jpg">
                <h3>isi dari judul tersebut</h3>
                <p>Lorem ipsum disebut juga dengan greeking (melatinkan/meyunanikan) karena kalimat ini berasal dari bahasa Latin.</p>
            </div>
        </div>
    </section>
    </section>
     <!--foto category-->
     <div class="small-container">
        <h2 class="facilities">fiture produk</h2>
        <div class="row2">
            <div class="col-4">
                <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
            </div>
            <div class="col-4">
                <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
            </div>
            <div class="col-4">
                <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
            </div>
            <div class="col-4">
                <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
            </div>
            <div class="col-4">
                <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
            </div>
            <div class="col-4">
                <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
            </div>
        </div>
        <div class="page-btn">
            <a href="barang.php"><span>1</span></a>
            <a href="barang2.php"><span>2</span></a>
            <a href="barang3.php"><span>3</span></a>
            <a href="barang4.php"><span>4</span></a>
            <a href="barang4.php"><span>&#8594;</span></a>
        </div>
     </div>
    <!--comment-->
    <section class="testimonials">
        <h1>COMMENT</h1>
        <br>
        <div class="row2">
            <?php
            $sql = "SELECT * FROM coments";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    ?>

                  <div class="testimonial-col">
                   <h3><?php echo $row['name']; ?></h3>
                   <h9 href="#"><?php echo $row['email']; ?></h9>
                   <p><?php echo $row['coment']; ?></p>
                   </div>
                  <?php
                }
            }
            ?>
        </div>
    </section>
    <!--contact-->
    <section class="cta">
        <h1>ketuk untuk beralih ke Halaman Contact</h1>
        <a href="contact.php" class="hero-btn">CONTACT US</a>
    </section>
    <!--footer-->
    <footer class="footer">
        
        <div class="footer-left">
            <a href="https://www.desasayang.desa.com/">
            <h3>WEB DESA</h3>
            <div class="credit-cards">
                <img src="image/logo.png">
            </div>
            <p class="footer-copyright">desasayang.com</p>
            </a>
        </div>
        <div class="footer-center">
            <h3>CONTACT</h3>
            <div>
            <i class='bx bxs-home'></i>
            <p><span>indonesia</span>jawa barat , sumedang</p>
            </div>
            <div>
            <i class='bx bxs-envelope'></i>
            <p>youremail@gmail.com</p>
            </div>
            <div>
            <i class='bx bxs-phone'></i>
            <p>+62 1234 5678 8910</p>
            </div> 
        </div>
        <div class="footer-right">
            <h3>ABOUT</h3>
            <p class="footer-about">
                Bahasa merupakan  alat komunikasi bagi manusia untuk mengungkapkan perasaan, menyampaikan buah fikiran kepada sesama manusia. bahasa terbagi 3 : Lisan, Tulisan dan Pertanda atau lambing.
                    bahasa hukum mempunyai ciri-ciri yang tegas yang berfungsi sebagai pembeda yaitu yang mencakup dengan konsep bahasa itu sendiri (istilah).
            </p>
        </div><br><br><br><br><br>
        <div class="copyright">
        <p>BUMDES Sayang <i class='bx bx-copyright' ></i>2022</p>
        </div>
    </footer>
    <!--script menu-->
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>
</body>
</html>