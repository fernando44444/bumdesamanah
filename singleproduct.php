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
    <title>BUMDES AMANAH | SINGLE PRODUCT</title>
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
    <h1>Keseluruhan Barang</h1>
    </section>
     <!--single product-->
     <div class="small-container single-product">
        <div class="row">
            <dic class="col-2">
                <img src="image/contohbarang4.jpg" width="100%">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="image/singleproduct1.jpg" width="100%">  
                    </div>
                    <div class="small-img-col">
                        <img src="image/singleproduct2.jpg" width="100%">  
                    </div>
                    <div class="small-img-col">
                        <img src="image/singleproduct4.jpg" width="100%">  
                    </div>
                </div>
            </dic>
            <div class="col-2">
                <p>Home / single-product</p>
                <h1>Nama Barang</h1>
                <select>
                    <option>size</option>
                    <option>xxl</option>
                    <option>xl</option>
                    <option>s</option>
                </select><br>
                
                <h3>Product Delails</h3>
                <br>
                <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>xxxxxxx</p>
            </div>
        </div>
    </div>
    <!--barang-->
    <div class="small-container">
        <h2 class="facilities">Semua Barang</h2>
        <div class="row2">
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
                <a href="singleproduct.php" class="btn">lihat</a>
            </div>
            <div class="col-4">
            <img src="image/contohbarang4.jpg">
                <h4>Nama Barang</h4>
                <h6>category</h6>
                <h6><a href="#">tag category</a></h6>
                <a href="singleproduct.php" class="btn">lihat</a>
            </div>
        </div>
    </div>
    <!--footer-->
    <div class="footer">
        <div class="copyright">
        <p>BUMDES Sayang<i class='bx bx-copyright' ></i>2022</p>
        </div>
    </div>
    <!--script sidebar ukuran handpone-->
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