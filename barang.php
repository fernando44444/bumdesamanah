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
    <title>BUMDES AMANAH | BARANG</title>
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
    <h1>Keseluruhan Barang</h1>
    </section>
    <!--kategory-->
    <section class="kategory">
        <h1>Category</h1><br>
        <div class="row2 row-container">
            <div class="category-col">
                <a href="#"><i class='bx bxs-book'></i></a>
                <p>tag kategory</p>
            </div>
            <div class="category-col">
                <a href="#"><i class='bx bxs-t-shirt'></i></a>
                <p>tag kategory</p>
            </div>
            <div class="category-col" >
                <a href="#"><i class='bx bxs-package'></i></a>
                <p>tag kategory</p>
            </div>
            <div class="category-col top">
                <a href="#"><i class='bx bxs-shopping-bags'></i></a>
                <p>tag kategory</p>
            </div>
            <div class="category-col top">
                <a href="#"><i class='bx bxs-bank'></i></a>
                <p>tag kategory</p>
            </div>
        </div>
    </section>
    <!--barang-->
    <div class="small-container">
        <h2 class="facilities">Semua Barang</h2><br><br>
        <div class="row2">
            <div class="col-4">
            <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
                <h6>category</h6>
                <h6><a href="#">tag category</a></h6>
                <a href="singleproduct.php" class="btn">LIHAT</a>
            </div>
            <div class="col-4">
            <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
                <h6>category</h6>
                <h6><a href="#">tag category</a></h6>
                <a href="singleproduct.php" class="btn">LIHAT</a>
            </div>
            <div class="col-4">
                <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
                <h6>category</h6>
                <h6><a href="#">tag category</a></h6>
                <a href="singleproduct.php" class="btn">LIHAT</a>
            </div>
            <div class="col-4">
            <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
                <h6>category</h6>
                <h6><a href="#">tag category</a></h6>
                <a href="singleproduct.php" class="btn">lihat</a>
            </div>
            <div class="col-4">
            <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
                <h6>category</h6>
                <h6><a href="#">tag category</a></h6>
                <a href="singleproduct.php" class="btn">LIHAT</a>
            </div>
            <div class="col-4">
            <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
                <h6>category</h6>
                <h6><a href="#">tag category</a></h6>
                <a href="singleproduct.php" class="btn">LIHAT</a>
            </div>
            <div class="col-4">
            <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
                <h6>category</h6>
                <h6><a href="#">tag category</a></h6>
                <a href="singleproduct.php" class="btn">LIHAT</a>
            </div>
            <div class="col-4">
            <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
                <h6>category</h6>
                <h6><a href="#">tag category</a></h6>
                <a href="singleproduct.php" class="btn">LIHAT</a>
            </div>
            <div class="col-4">
            <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
                <h6>category</h6>
                <h6><a href="#">tag category</a></h6>
                <a href="singleproduct.php" class="btn">LIHAT</a>
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
    <!--footer-->
    <div class="footer">
        <div class="copyright">
        <p>BUMDES Sayang<i class='bx bx-copyright' ></i>2022</p>
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