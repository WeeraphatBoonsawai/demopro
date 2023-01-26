<?php 
include 'lightnoveldb.php';
$p_name=$_POST['pname'];
$volume=$_POST['vol'];
$detail=$_POST['detail'];
$category_id=$_POST['category_id'];
$Writer=$_POST['Writer'];
$price=$_POST['price'];
$num=$_POST['num'];


if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $new_image_name = 'p_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./image/".$new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "";
    }


$sql="INSERT INTO product(pro_name,volume,detail,category_id,Writer,price,amount,image) 
VALUES('$p_name','$volume','$detail','$category_id','$Writer','$price','$num','$new_image_name')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script> alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script> window.location='add_lightbovel.php'; </script>"  ;
}else{
    echo "<script> alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
}
?>