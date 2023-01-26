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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/NAV.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <title>SHOW</title>
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
                    <li><a href="sh_product.php">Shop</a></li>
                    <li><a href="cart.php">order</a></li>
                    <li><a href="show_product.php"  class="active"><?php echo $_SESSION['username']; ?></a></li>
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
    <div class="alert alert-dark h4 text-center mb-4 mt-4" role="alert">
  ปรับแต่งสินค้า
</div>
    <a class="btn btn-primary mb-4" href="add_lightbovel.php" role="button">add++</a>
            <table class="table table-dark table-striped">
            <tr>
                <th>รหัสสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th>เล่มที่</th>
                <th>ผู้แต่ง</th>
                <th>หมวดหมู่สินค้า</th>
                <th>ราคาสินค้า</th>
                <th>จำนวน</th>
                <th>รูปภาพ</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
            <?php
            $sql="SELECT * FROM product ,category WHERE product.category_id =category.category_id " ;
            $hand = mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($hand)){
            ?>
            <tr>
                <td><?=$row['pro_id']?> </td>
                <td><?=$row['pro_name']?> </td>
                <td><?=$row['volume']?> </td>
                <td><?=$row['Writer']?> </td>
                <td><?=$row['category_name']?> </td>
                <td><?=$row['price']?> </td>
                <td><?=$row['amount']?> </td>
                <td><img src="image/<?=$row['image']?>" width="150px" hieght="100px"></td>
                <td><a href="edit_product.php?id=<?=$row['pro_id']?>" class="btn btn-primary "   > edit</a></td>
                <td><a href="delete_product.php" class="btn btn-danger">delete</a></td>
            </tr>
            <?php 
        }
        mysqli_close($conn)
        ?>

        </table>

    </div>
</body>
</html>