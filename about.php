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
            echo "<script>alert('comment not sucses')</script>";
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
    <title>BUMDES AMANAH | ABOUT US</title>
</head>
<body>
    <section class="sub-header">
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
    <h1>About Us</h1>
    </section>
    <!--blog content-->
    <div class="blog-content">
        <div class="row">
            <div class="blog-left">
                <img src="image/nyoba2.jpg">
                <h2>Penjelasan Tentang about</h2>
                <p>Akhir tahun 2009, terjadi perseteruan antara pimpinan Komisi Pemberantasan Korupsi (Bibit & Chandra) dengan Bareskrim POLRI. Perseteruan tersebut memunculkan istilah “ CICAK VS BUAYA”[6], dan istilah yang sering muncul saat itu adalah “Deponering” ketika Jaksa Agung mengenyampingkan perkara pidana dengan  menerbitkan Surat Keputusan Penghentian Penuntutan (SKPP) sebagaimana rekomendasi Tim 8 [7]. Begitu pula saat pimpinan KPK (Samad & Bambang) dijadikan tersangka tahun 2015 dan Jaksa Agung mengenyampingkan perkara pidana dengan  menerbitkan Surat Keputusan Penghentian Penuntutan (SKPP) [8], istilah “Deponering” muncul kembali di media cetak maupun elektronik.</p>
                <br>
                <p>Akhir tahun 2009, terjadi perseteruan antara pimpinan Komisi Pemberantasan Korupsi (Bibit & Chandra) dengan Bareskrim POLRI. Perseteruan tersebut memunculkan istilah “ CICAK VS BUAYA”[6], dan istilah yang sering muncul saat itu adalah “Deponering” ketika Jaksa Agung mengenyampingkan perkara pidana dengan  menerbitkan Surat Keputusan Penghentian Penuntutan (SKPP) sebagaimana rekomendasi Tim 8 [7]. Begitu pula saat pimpinan KPK (Samad & Bambang) dijadikan tersangka tahun 2015 dan Jaksa Agung mengenyampingkan perkara pidana dengan  menerbitkan Surat Keputusan Penghentian Penuntutan (SKPP) [8], istilah “Deponering” muncul kembali di media cetak maupun elektronik.</p>
                <br>
                <p>Akhir tahun 2009, terjadi perseteruan antara pimpinan Komisi Pemberantasan Korupsi (Bibit & Chandra) dengan Bareskrim POLRI. Perseteruan tersebut memunculkan istilah “ CICAK VS BUAYA”[6], dan istilah yang sering muncul saat itu adalah “Deponering” ketika Jaksa Agung mengenyampingkan perkara pidana dengan  menerbitkan Surat Keputusan Penghentian Penuntutan (SKPP) sebagaimana rekomendasi Tim 8 [7]. Begitu pula saat pimpinan KPK (Samad & Bambang) dijadikan tersangka tahun 2015 dan Jaksa Agung mengenyampingkan perkara pidana dengan  menerbitkan Surat Keputusan Penghentian Penuntutan (SKPP) [8], istilah “Deponering” muncul kembali di media cetak maupun elektronik.</p>
                <div class="coment-box">
                    <h3>leave a comment</h3>
                    <form class="comment-form" method="POST">
                        <input type="text" name="name"placeholder="enter name">
                        <input type="email"name="email" placeholder="enter email">
                        <textarea rows="5"name="coment" placeholder="your coment"></textarea>
                        <button type="submit" name="submit" class="hero-btn yellow-btn">POST COMMENT</button>
                    </form>
                </div>
            </div>
            <div class="blog-right"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <h3>Jumlah Barang Kategory</h3>
                <div>
                    <span>nama barang</span>
                    <span>11</span>
                </div>
                <div>
                    <span>nama barang</span>
                    <span>13</span>
                </div>
                <div>
                    <span>nama barang</span>
                    <span>17</span>
                </div>
                <div>
                    <span>nama barang</span>
                    <span>20</span>
                </div>
                <div>
                    <span>nama barang</span>
                    <span>18</span>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <div class="footer">
        <div class="copyright">
        <p>BUMDES Sayang <i class='bx bx-copyright' ></i>2022</p>
        </div>
    </div>
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