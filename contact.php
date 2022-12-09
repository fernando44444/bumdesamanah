<?php
    include 'config.php';
    
    error_reporting(0);
    if(isset($_POST['submit'])){
        $name =$_POST['name'];
        $email =$_POST['email'];
        $subject =$_POST['subject'];
        $coment =$_POST['coment'];

        $sql = "INSERT INTO contact (name,email,subject,coment)
        VALUES ('$name','$email','subject','$coment')";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            echo "<script>alert('terimakasih pesan anda telah berhasil')</script>";
        } else {
            echo "<script>alert('pesan tidak bisa di kirim')</script>";
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
    <title>BUMDES AMANAH | CONTACT US</title>
</head>
<body>
    <section class="sub-header">
       <nav><a href="index.html"><img src="image/logo2.png"></a>
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
    <h1>Contact Us</h1>
    </section>
    <!--contact page-->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5154943484577!2d107.76998241431743!3d-6.94835476995278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c49bd2063153%3A0xc5cd7a500e1a0bdd!2sKantor%20Desa%20Sayang!5e0!3m2!1sid!2sid!4v1664753973694!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class='bx bxs-home'></i>
                    <span>
                        <h5>Nama Alamat</h5>
                    </span>
                </div>
                <div>
                    <i class='bx bxs-envelope'></i>
                    <span>
                        <h5>youremail@gmail.com</h5>
                    </span>
                </div>
                <div>
                    <i class='bx bxs-phone' ></i>
                    <span>
                        <h5>+62 1234 5678 910</h5>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form method="POST">
                    <input type="text" name="name" placeholder="enter name" autocomplete="off">
                    <input type="email"name="email" placeholder="enter email" autocomplete="off">
                    <input type="text" name="subject" placeholder="enter subject" autocomplete="off">
                    <textarea rows="5" name="coment" placeholder="your coment" autocomplete="off"></textarea>
                    <button  type="submit" name="submit" class="hero-btn yellow-btn">ENTER</button>
                </form>
            </div>
        </div>
    </section>
    <!--footer-->
    <div class="footer">
        <div class="copyright">
        <p>Desa Sayang BUMDES <i class='bx bx-copyright' ></i>2022</p>
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
</body
