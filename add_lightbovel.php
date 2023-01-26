<?php 
include 'lightnoveldb.php';
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
    <title>add_LightNovel-Shop</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="alert alert-dark h4 text-center mb-4 mt-4" role="alert">
  เพิ่มสินค้า
</div>
            <div class="col-sm-6">
<form name="form1" method="post" action="insert_product.php" enctype="multipart/form-data">
    <label>ชื่อสินค้า : </label>
    <input type="text" name="pname" class="form-control" placeholder="ชื่อสินค้า..." required ><br>
    <label>เล่มที่ : </label>
    <input type="number" name="vol" class="form-control" placeholder="เล่มที่..." required ><br>
    <label>เรื่องย่อ : </label>
    <input type="text" name="detail" class="form-control" placeholder="เล่มที่..." required ><br>
    <label>ผู้แต่ง : </label>
    <input type="text" name="Writer" class="form-control" placeholder="ชื่อสินค้า..." required ><br>
    <label>หมวดหมู่สินค้า : </label>
  <select class="form-select" name="category_id" >
  <?php 
   $sql="SELECT * FROM category ORDER BY category_name";
   $hand=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($hand)){ 
  ?>
  <option value="<?=$row['category_id']?>"><?=$row['category_name']?></option>
  <?php
}
mysqli_close($conn);
?>

  </select><br>
  <label>ราคาสินค้า : </label>
    <input type="number" name="price" class="form-control" placeholder="ราคาสินค้า..." required ><br>
    <label>จำนวน : </label>
    <input type="number" name="num" class="form-control" placeholder="จำนวน..." required ><br>
   
    <label>รูปภาพ : </label>
    <input type="file" name="file1" required ><br><br>
    <button type="submit" class="btn btn-primary">submit</button>
   <a class="btn btn-danger" href="show_product.php" role="button">calcel</a>
</form>
            </div>
        </div>
    </div>
</body>
</html>