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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/NAV.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>about-Light novel</title>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php" class="active">About</a></li>
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
    <section id="hero-section1"></section>
    
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
<h1 class="mb-8 text-center text-3xl text-white mt-10 rounded-lg border-2 border-slate-100 bg-black ml-40 mr-40 shadow-2xl">ความเป็นมา</h1>

<div class="genshin">
<div class="row">
        <div class="imgWrapper">
            <img src="img/about 1-1.jpg" alt="">
        </div>
        <div class="contentWrapper">
            <div class="content">
                <span class="textWrapper">
                    <span></span>ไลต์โนเวล
                </span>
                <h2>Light novel</h2>
                <p>ไลต์โนเวล (ญี่ปุ่น: ライトノベル; โรมาจิ: raito noberu) ย่อว่า LN หมายถึงนิยายประเภทหนึ่งจากประเทศญี่ปุ่น 
                    เป็นนิยายสำหรับวัยรุ่นโดยเฉพาะกลุ่มนักเรียนมัธยมปลาย
                     ไลต์โนเวลหนึ่งเล่มมีความยาว 50,000 คำ ซึ่งถือว่าใกล้เคียงกับเกณฑ์ขั้นต่ำของนวนิยายตะวันตก ไลต์โนเวลนิยมตีพิมพ์ด้วยรูปเล่มขนาด A5<br>
                     ในประเทศญี่ปุ่น ไลต์โนเวล แบบ "ต้นตำรับ" นั้นได้มีการนำการใช้ฟุริงะนะเข้ามาใช้เป็นอย่างมากด้วยสองเหตุผล <br>
                     หนึ่งคือสำหรับนักอ่านวัยเยาว์ที่ยังไม่ชำนาญในตัวอักษรคันจิให้สามารถเข้าใจในเนื้อหาได้ สองคือในหลายๆ เรื่องของ ไลต์โนเวล 
                     ผู้เขียนมักจะสร้างคำอ่านฟุริงะนะขึ้นมาใหม่ 
                     ซึ่งไม่สามารถพบเห็นได้ในการใช้ภาษาญี่ปุ่นทั่วๆ ไป<br><br>
                     <span class="textWrapper">
                    <span></span>ในการเขียนไลต์โนเวลนั้น
                </span>
                      จะใช้เพียงแค่ประโยคสั้นๆ ในหนึ่งย่อหน้ามีเพียงแค่ 1 หรือ 2 ประโยคเท่านั้น ซึ่งทำให้การอ่านเป็นไปได้อย่างรวดเร็วยิ่งขึ้น 
                      โดยจะมีลักษณะโดยรวมดังนี้<br>
                      1. พล๊อตเรื่อง มีการวางพล๊อตที่มีส่วนคล้ายเกมส์หรือการ์ตูนอยู่มาก และมักมีกลิ่นของแฟนตาซีปะปนอยู่เสมอ<br>
                        2. ภาษาเข้าใจง่าย ดำเนินเรื่องไว มีตัวหนังสือน้อย กระชับฉับไว ไม่เน้นบรรยายหรือประโยคยืดยาวให้น่ารำคาญ<br>
                        3. ภายในรูปเล่มมีภาพประกอบแบบการ์ตูน-คอมมิคแทรกเป็นระยะ ๆ</p>
                        <span class="textWrapper">
                    <span></span>ความสัมพันธ์กับภาพยนตร์อนิเมะ
                </span>
                <p>ด้วยความสามารถของหนังสือประเภท "ไลต์โนเวล" ที่โด่งดังในกลุ่มนั้นมีบ้างเรื่องที่สามารถ 
                    สร้างกระแสจนกลายเป็น อนิเมะหรือมังงะ เช่นเก็คคัง ดรากอน แมกกาซีน และ เดอะ สนีคเกอร์, 
                    เด็งเกคิ hp หรือแม้แต่นิตยสารในเครือ มีเดียมิกซ์ เช่น คอมพ์ทีค และ เด็งเกคิ G’s แมกกาซีน โดยเรื่องที่ได้ตีพิมพ์ได้แก่เรื่อง 
                    สเลเยอร์ส ฉบับนิยายซึ่งเป็นผลงานของ คันซากะ 
                    ฮาจิเมะ ซึ่งเรื่อง สเลเยอส์ นี้เองก็ได้เคยสร้างเป็นอนิเมะหรือมังงะในชื่อเดียวกัน</p>
                    <p>ในประเทศญี่ปุ่น ไลต์โนเวลเป็นที่นิยมมาก และสำนักพิมพ์ต่าง ๆ ก็ได้มีการจัดการประกวดไลต์โนเวล 
                        เพื่อค้นหาไลต์โนเวลที่เป็นที่น่าสนใจ ซึ่งถ้าหากเรื่องใดได้รับรางวัลชนะเลิศ ก็จะมีรางวัลสำหรับผู้จัดทำไลต์โนเวลเรื่องนั้นๆ
                         และผลงานของพวกเขายังได้รับการตีพิมพ์จัดจำหน่ายภายหลังการประกวด เช่น รางวัล เด็งเกคิ โนเวล ไพร์ซ 
                        ซึ่งเป็นรางวัลใหญ่ที่สุดซึ่งในแต่ละปีจะมีผู้ร่วมส่งผลงานกันเข้ามามากกว่า 2000 ชิ้น และเป็นแหล่งสร้าง ไลต์โนเวล ให้แก่วงการที่มีชื่อเสียง</p>
            </div>
        </div>
    </div>
</div>
<div>
<!-- หัว -->

<!-- หัว1 -->
<h1 class="mb-8 text-center text-3xl text-white mt-10 rounded-lg border-2 border-slate-100 bg-black ml-40 mr-40 shadow-2xl">สำนักพิมพ์ที่ตีพิมพ์ไลต์โนเวลในเมืองไทย</h1>
<div class="genshin">
<div class="row">
        <div class="imgWrapper">
            <img src="img/about 1-2.jpg" alt="">
        </div>
        <div class="contentWrapper">
            <div class="content">
                <span class="textWrapper">
                    <span></span>Light novel
                </span>
                <h2>สำนักพิมพ์ที่ตีพิมพ์ไลต์โนเวลในเมืองไทย</h2>
                <p>บลิส พับลิชชิ่ง ใช้ชื่อว่า J-Light (ปิดตัวไปแล้ว)<br>
บงกช พับลิชชิ่ง<br>
รักพิมพ์<br>
เดกซ์ พับลิชชิ่ง<br>
เซนชู พับลิชชิ่ง<br>
เอ-พลัส (เอบุ๊ค)<br>
จีพลัส (เอบุ๊ค)<br>
อนิแม็กบุ๊คส์ (เอบุ๊ค)<br>
สำนักพิมพ์แจ่มใส (เลิกตีพิมพ์ไลท์โนเวลแล้ว)<br>
เอ็นเธอร์บุ๊คส์ (เลิกตีพิมพ์ไลท์โนเวลแล้ว)<br>
เฟิร์สเพจโปร<br>
ฟินิกซ์เน็กซ์<br>
สยามอินเตอร์<br>
กิฟท์บุ๊ค พับลิชชิ่ง<br>
พะโล้ พับลิชชิ่ง<br>
สำนักพิมพ์วิบูลย์กิจ<br>
นิดา พับลิชชิ่ง</p>
            </div>
        </div>
    </div>
</div>
<div>
<!-- หัว1 -->

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