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
    <link rel="stylesheet" href="css/card.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>book-Light novel</title>
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
                    <li><a href="about.php">About</a></li>
                    <li><a href="book.php" class="active">book</a></li>
                    <li><a href="sh_product.php">Shop</a></li>
                    <li><a href="cart.php">order</a></li>
                    <li><a href="show_product.php"><?php echo $_SESSION['username']; ?></a></li>
                    <li><a href="index.php?logout='1'" style="color: red;">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>
    <?php endif ?>
    <section id="hero-section2"></section>
    
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
<h1 class="mb-8 text-center text-3xl text-white mt-10 rounded-lg border-2 border-slate-100 bg-black ml-40 mr-40 shadow-2xl">Light novel</h1>
<div class="genshin">
<div class="row">
        <div class="imgWrapper">
            <img src="img/bookv1.jpg" alt="">
        </div>
        <div class="contentWrapper">
            <div class="content">
                <span class="textWrapper">
                    <span></span>ไลต์โนเวล
                </span>
                <h2>Light novel</h2>
                <p>ในญี่ปุ่นนั้นมีค่ายหนังสือที่พิมพ์ไลท์โนเวลออกมามากมาย แล้วเรื่องที่ดังๆ เองก็มีอยู่ไม่น้อยเช่นกัน ในไทยเองก็มีค่ายหนังสือที่แปลไลท์โนเวลมาเป็นภาษาไทย
                     เช่นค่าย LuckPim , Zenshu , J-Light , Bongkoch แต่ละค่ายเองก็ดำเนินการผลิตออกมาให้โดนใจผู้บริโภคมากที่สุด<br>
                     ไลท์โนเวลเป็นหนังสือที่มีหลายหน้า ถึงกระนั้นก็ยังมีความแตกต่างมากมายระหว่างหนังสือธรรมดาหรือวรรณกรรมธรรมดากับไลท์โนเวล เรามาดูความแตกต่างกันบ้างไหม
ไลท์โนเวลโดยทั่วไปมี 100 ถึง 300 หน้าและวางจำหน่ายเป็นเล่ม โดยปกติไลท์โนเวลที่มีชื่อเสียงจะได้รับมากกว่า 20 เล่มซึ่งมีเนื้อหามากมายพอ ๆ กับงานในมังงะ
บทหนึ่งในนวนิยายเรื่องแสงมักจะมีคำประมาณ 5,000 ถึง 7000 คำโดยปกติปริมาณ (หนังสือ) ที่สมบูรณ์จะมีคำประมาณ 40,000 
คำและโดยปกติจะแบ่งออกเป็น 5 บทประมาณ 200 หน้า</p>
            </div>
        </div>
    </div>
</div>
<div>
<!-- หัว -->

<!-- หัว -->
<h1 class="mb-8 text-center text-3xl text-white mt-10 rounded-lg border-2 border-slate-100 bg-black ml-40 mr-40 shadow-2xl">Book</h1>

<div class="genshin">
<div class="card" style="--i:url(https://kbimages1-a.akamaihd.net/29216134-5f0b-4080-a492-4a58461f91f1/1200/1200/False/86-eighty-six-vol-4-light-novel.jpg)">
    <div class="cardcontent">
        <h2 class="text-center">86ーEighty-Sixー<br>
        86ーエイティシックスー</h2>
        <a href="#">อ่านต่อ</a>
    </div>
</div>

<div class="card" style="--i:url(https://www.baka-tsuki.org/project/images/4/4a/Tantei_wa_Mou_Shindeiru.jpg)">
    <div class="cardcontent">
        <h2 class="text-center">Tantei wa Mou,Shindeiru<br>
        探偵はもう、死んでいる</h2>
        <a href="#">อ่านต่อ</a>
    </div>
</div>

<div class="card" style="--i:url(https://kbimages1-a.akamaihd.net/a1c7fe63-0c2d-4217-a823-5d0119a919a8/1200/1200/False/overlord-vol-11-light-novel.jpg)">
    <div class="cardcontent">
        <h2 class="text-center">OVERLORD<br>
        オーバーロード</h2>
        <a href="#">อ่านต่อ</a>
    </div>
</div>

<div class="card" style="--i:url(https://i0.wp.com/100wordanime.blog/wp-content/uploads/2019/02/goblin4a.jpg)">
    <div class="cardcontent">
        <h2 class="text-center">Goblin Slayer<br>
        ゴブリンスレイヤー</h2>
        <a href="#">อ่านต่อ</a>
    </div>
</div>
</div>
</div>
<!-- หัว -->

<!-- หัว1 -->
<div class="genshin">
<div class="card" style="--i:url(https://cgtranslations321782266.files.wordpress.com/2020/07/p1alt2en.png)">
    <div class="cardcontent">
        <h2 class="text-center">KonoSuba<br>
        この素晴らしい世界に祝福を</h2>
        <a href="#">อ่านต่อ</a>
    </div>
</div>

<div class="card" style="--i:url(https://m.media-amazon.com/images/I/81EeOEJF3rS.jpg)">
    <div class="cardcontent">
        <h2 class="text-center">Classroom of the Elite<br>
        ようこそ実力至上主義の教室へ</h2>
        <a href="#">อ่านต่อ</a>
    </div>
</div>

<div class="card" style="--i:url(https://i.pinimg.com/originals/0e/d5/cf/0ed5cfa5a6174339d1168e5e619f3d74.jpg)">
    <div class="cardcontent">
        <h2 class="text-center">Tensei Shitara Suraimu Datta Ken<br>
        転生したらスライムだった件</h2>
        <a href="#">อ่านต่อ</a>
    </div>
</div>

<div class="card" style="--i:url(https://i.imgur.com/FJZTTBR.jpeg)">
    <div class="cardcontent">
        <h2 class="text-center">Mushoku Tensei<br>
        無職転生</h2>
        <a href="#">อ่านต่อ</a>
    </div>
</div>
</div>
</div>
<!-- หัว1 -->

<!-- หัว2 -->
<div class="genshin">
<div class="card" style="--i:url(https://i0.wp.com/jnovels.com/wp-content/uploads/2021/08/russian.jpg?fit=500%2C710&ssl=1)">
    <div class="cardcontent">
        <h2 class="text-center">Tokidoki Bosotto Roshiago de Dereru Tonari no Ārya-san<br>
        時々ボソッとロシア語でデレる隣のアーリャさん</h2>
        <a href="#">อ่านต่อ</a>
    </div>
</div>

<div class="card" style="--i:url(https://animeuknews.net/app/uploads/2022/03/Banished-from-the-Heros-Party-volume-5-cover-scaled.jpeg)">
    <div class="cardcontent">
        <h2 class="text-center">banished from the hero's party<br>
        真の仲間じゃないと勇者のパーティーを追い出されたので</h2>
        <a href="#">อ่านต่อ</a>
    </div>
</div>

<div class="card" style="--i:url(https://i.imgur.com/LVtuUBg.jpg)">
    <div class="cardcontent">
        <h2 class="text-center">Otonari no Tenshi-sama ni Itsu no Ma ni ka Dame Ningen ni Sareteita Ken<br>
        お隣の天使様にいつの間にか駄目人間にされていた件</h2>
        <a href="Otonari.php">อ่านต่อ</a>
    </div>
</div>

<div class="card" style="--i:url(https://i0.wp.com/englishlightnovels.com/wp-content/uploads/2020/12/genius_prince_vol4_cover.jpg?ssl=1)">
    <div class="cardcontent">
        <h2 class="text-center">Tensai Ōji no Akaji Kokka Saisei Jutsu ~Sō da, Baikoku Shiyō~<br>
        天才王子の赤字国家再生術〜そうだ、売国しよう〜</h2>
        <a href="#">อ่านต่อ</a>
    </div>
</div>
</div>
</div>
<!-- หัว2 -->

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

