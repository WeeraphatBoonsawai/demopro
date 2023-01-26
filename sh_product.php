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
        <!-- Bootstrap CSS -->

        <title>Shop</title>
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
                    <li><a href="book.php">book</a></li>
                    <li><a href="sh_product.php" class="active">Shop</a></li>
                    <li><a href="cart.php">order</a></li>
                    <li><a href="show_product.php"><?php echo $_SESSION['username']; ?></a></li>
                    <li><a href="index.php?logout='1'" style="color: red;">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>
    <?php endif ?>
    
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
    <div class="container mt-4">
    <div class="alert alert-dark h4 text-center mb-4 mt-4" role="alert">
  ดูสินค้า
</div>
    <div class="row">
<?php
include 'lightnoveldb.php';
$perpage = 8;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
  $page = 1;  
}
$start =($page -1) * $perpage;

$sql = "SELECT * FROM product ORDER BY pro_id limit {$start}, {$perpage} ";
$hand = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($hand)){
    $price = $row['price'];


?>
    <div class="col-md-3">
      <img src="image/<?=$row['image']?>" width="200" height="250" class="mt-5 p-2 my-2 border"> <br>
      ชื่อเรื่อง: 
      <?=$row['pro_name']?><br>
   <h5>ราคา <b class="text-danger"> <?=number_format($price,2)?></b> บาท </h5> <br>
 <a href="sh_product_detail.php?id=<?=$row['pro_id']?>" class="btn btn-info">รายละเอียด</a>
    </div>
  <?php      
}

  ?>

  </div>
<?php
$sql1 ="SELECT * FROM product ";
$query1 = mysqli_query($conn,$sql1);
$total_record = mysqli_num_rows($query1);
$total_page = ceil($total_record / $perpage );
?>
<br><br>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="sh_product.php?page=1">Previous</a></li>
    <?php for($i=1;$i<=$total_page;$i++) { ?>
    <li class="page-item"><a class="page-link" href="sh_product.php?page=<?=$i?>"><?=$i?></a></li>
    <?php } ?>
    <li class="page-item"><a class="page-link" href="sh_product.php?page=<?=$total_page?>">Next</a></li>
  </ul>
</nav>

<?php mysqli_close($conn); ?>
    </div>
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