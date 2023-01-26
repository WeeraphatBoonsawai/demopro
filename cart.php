<?php 
session_start();
include 'lightnoveldb.php';
/*
$id=$_GET['id'];
$sql = "SELECT * FROM product WHERE pro_id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
      <!-- Bootstrap CSS -->
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
         <script src="bootstrap/js/bootstrap.min.js" ></script>
         <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/NAV.css">
    <link rel="stylesheet" href="css/footer.css">
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
                    <li><a href="cart.php" class="active">order</a></li>
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
    <div class="container mt-4 mr-0.5 ">
        <form id="form1" method="POST" action="">
    <div class="row">
    <div class="col-md-10">
    <table class="table table-dark table-striped">
    <tr>
        <Th>ลำดับที่</Th>
        <Th>ชื่อสินค้า</Th>
        <Th>ราคา</Th>
        <Th>จำนวน</Th>
        <Th>ราคารวม</Th>
        <th>ลบ</th>
    </tr>
<?php 
$Total = 0;
$sumPrice = 0;
$m = 1;
for ($i=0; $i <= (int)$_SESSION["intLine"]; $i++){ 
    if(($_SESSION["strProductID"][$i]) != ""){
        $sql1="SELECT * FROM product WHERE pro_id ='" . $_SESSION["strProductID"][$i] ."' " ;
        $result1 = mysqli_query($conn,$sql1);
        $row_pro = mysqli_fetch_array($result1);

        $_SESSION["price"] = $row_pro['price'];
        $Total = $_SESSION["strQty"][$i];
        $sum = $Total * $row_pro['price'];
        $sumPrice =(float) $sumPrice + $sum;
        $_SESSION["sum_price"] = $sumPrice;
?>
    <tr>
        <td><?=$m?></td>
        <td>
            <img src="image/<?=$row_pro['image']?>" width="80px" height="100" >
            <?=$row_pro['pro_name']?>
        
    </td>
        
        <td><?=$row_pro['price']?></td>
        <td><?=$_SESSION["strQty"][$i]?></td>
        <td><?=$sum?></td>
        <td><a href="pro_delete.php?Line=<?=$i?>"><img src="img/x.png" width="30px"></a></td>
    </tr>

<?php 
$m=$m+1;
}
}
?>
    <tr>
        <td class="text-end" colspan="4">รวมเป็นเงิน</td>
        <td lass="text-end"><?=$sumPrice?></td>
        <td>บาท</td>
    </tr>
    </table>
    <div style="text-align:right">
    <a href="sh_product.php"><button type="button" class="btn btn-success">เลือกสินค้า</button></a>
    <button type="button" class="btn btn-success">ยืนยัน</button>
    </div>
</div>
    </form>
    </div>
    </div>
</body>
</html>