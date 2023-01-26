<?php 
include 'lightnoveldb.php';
?>
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
    <title>my-shop</title>
     <!-- Bootstrap CSS -->
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/NAV.css">
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
<div class="container">
  <div class="row">
 <?php 
 $ids=$_GET['id'];
$sql = "SELECT * FROM product,category WHERE product.category_id= category.category_id and product.pro_id='$ids' ";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result)
?>
<div class="alert alert-dark h4 text-center mb-4 mt-4" role="alert">
    <?=$row['pro_name']?>
</div>
    <div class="col-md-4">
      <img src="image/<?=$row['image']?>" width="350px">
    </div>

    <div class="col-md-6 mt-2">
  ชื่อเรื่อง :<?=$row['pro_name']?><br>
  เรื่องย่อ :<?=$row['detail']?><br>
  ผู้แต่ง : <?=$row['Writer']?><br>
  ราคา <?=$row['price']?> บาท<br>
  <a class="btn btn-info mt-4" href="order.php?id=<?=$row['pro_id']?>" >add</a>
  </div>
  </div>
</div>
<?php 
mysqli_close($conn);
?>
</body>
</html>