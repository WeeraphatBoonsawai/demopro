<?php 
include 'lightnoveldb.php';
$idpro = $_GET['id'];
$sql1 = "SELECT * FROM product WHERE pro_id='$idpro'";
$result = mysqli_query($conn,$sql1);
$rs=mysqli_fetch_array($result);
$p_categoryid = $rs['category_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- Bootstrap CSS -->
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
         <script src="bootstrap/js/bootstrap.min.js" ></script>
    <title>edit_LightNovel-Shop</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="alert alert-dark h4 text-center mb-4 mt-4" role="alert">
  แก้ไขสินค้า
</div>
            <div class="col-sm-6">
<form name="form1" method="post" action="update_product.php" enctype="multipart/form-data">
<label>รหัสสินค้า : </label>
    <input type="text" name="proid" class="form-control" value=<?=$rs['pro_id']?> ><br>   
    <label>ชื่อสินค้า : </label>
    <input type="text" name="pname" class="form-control" value=<?=$rs['pro_name']?> ><br>
    <label>เล่มที่ : </label>
    <input type="number" name="vol" class="form-control" value=<?=$rs['volume']?> ><br>
    <label>เรื่องย่อ : </label>
    <input type="text" name="detail" class="form-control" value=<?=$rs['detail']?> ><br>
    <label>ผู้แต่ง : </label>
    <input type="text" name="Writer" class="form-control" value=<?=$rs['Writer']?> ><br>
    <label>หมวดหมู่สินค้า : </label>
  <select class="form-select" name="category_id" >
  <?php 
   $sql="SELECT * FROM category ORDER BY category_name";
   $hand=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($hand)){ 
    $ccategoryid = $row['category_id'];
  ?>
  <option value="<?=$row['category_id']?>" <?php if($p_categoryid==$ccategoryid){echo "selected=selected";} ?> >
  <?=$row['category_name']?></option>
  <?php
}
mysqli_close($conn);
?>

  </select><br>
  <label>ราคาสินค้า : </label>
    <input type="number" name="price" class="form-control" value=<?=$rs['price']?> ><br>
    <label>จำนวน : </label>
    <input type="number" name="num" class="form-control" value=<?=$rs['amount']?> ><br>
   
    <label>รูปภาพ : </label>
    <img  src="image/<?=$rs['image']?>" width="120px"><br><br>
    <input type="file" name="file1" ><br><br>
    <input type="hidded" name="txtimg" class="form-control" value=<?=$rs['image']?> ><br>
    <button type="submit" class="btn btn-primary">up</button>
   <a class="btn btn-danger" href="show_product.php" role="button">calcel</a>
</form>
            </div>
        </div>
    </div>
</body>
</html>