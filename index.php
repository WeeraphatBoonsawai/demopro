<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/NAV.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <!-- nav -->
     <?php if (isset($_SESSION['username'])) : ?>
<header class="header-area">
        <div class="header-container">
            <div class="site-logo">
                <a href="index.php">Light <span>novel</span></a>
            </div>
            <div class="mobile-nav">
                <i class="fas fa-bars"></i>
            </div>
            <div class="site-nav-menu">
                <ul class="primary-menu">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="book.php">book</a></li>
                    <li><a href="sh_product.php">Shop</a></li>
                    <li><a href="cart.php">order</a></li>
                    <li><a href="show_product.php"><?php echo $_SESSION['username']; ?></a></li>
                    <li><a href="index.php?logout='1'" style="color: red;">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>
    <?php endif ?>
    <section id="hero-section"></section>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <script>
        $(document).ready(function(){
    $(".mobile-nav i").click(function(){
        $(".site-nav-menu").toggleClass("mobile-menu");
    });
 });
    </script>
</div>
<!-- nav -->
<!-- หัว -->

<div class="genshin">
<div class="row">
        <div class="imgWrapper">
            <img src="img/home1-1.jpg" alt="">
        </div>
        <div class="contentWrapper">
            <div class="content">
                <span class="textWrapper">
                    <span></span>ไลต์โนเวล
                </span>
                <h2>Light novel</h2>
                <p>ไลต์โนเวล (ญี่ปุ่น: ライトノベル; โรมาจิ: raito noberu) ย่อว่า LN หมายถึงนิยายประเภทหนึ่งจากประเทศญี่ปุ่น เป็นนิยายสำหรับวัยรุ่นโดยเฉพาะกลุ่มนักเรียนมัธยมปลาย
                     ไลต์โนเวลหนึ่งเล่มมีความยาว 50,000 คำ ซึ่งถือว่าใกล้เคียงกับเกณฑ์ขั้นต่ำของนวนิยายตะวันตก ไลต์โนเวลนิยมตีพิมพ์ด้วยรูปเล่มขนาด A5<br>
                     ในประเทศญี่ปุ่น ไลต์โนเวล แบบ "ต้นตำรับ" นั้นได้มีการนำการใช้ฟุริงะนะเข้ามาใช้เป็นอย่างมากด้วยสองเหตุผล <br>
                     หนึ่งคือสำหรับนักอ่านวัยเยาว์ที่ยังไม่ชำนาญในตัวอักษรคันจิให้สามารถเข้าใจในเนื้อหาได้ สองคือในหลายๆ เรื่องของ ไลต์โนเวล ผู้เขียนมักจะสร้างคำอ่านฟุริงะนะขึ้นมาใหม่ 
                     ซึ่งไม่สามารถพบเห็นได้ในการใช้ภาษาญี่ปุ่นทั่วๆ ไป</p>
                <a href="about.php">อ่านต่อ</a>
            </div>
        </div>
    </div>
</div>
<div>
<!-- หัว -->
<!-- footer -->
<div class="footer-basic">
        <footer>
            <div class="social"><a href="https://www.instagram.com/bakaimitai/?hl=th"><i class="icon ion-social-instagram"></i></a><a href="https://twitter.com/wee336677"><i class="icon ion-social-twitter"></i></a><a href="https://www.facebook.com/pan.boonsawai.5"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php">Home</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Book</a></li>
                <li class="list-inline-item"><a href="#">Shop</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Light novel © 2023</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!-- footer -->
</body>
</html>