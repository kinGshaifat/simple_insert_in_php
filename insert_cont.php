<?php include('connnection.php'); ?>
<?php
if(isset($_POST['save'])){
$name=$_POST['name'];
$price=$_POST['price'];
$image=$_FILES['file']['image'];
$timage=$_FILES['file']['tmp_image'];
move_uploaded_file($image,"img/".$img);
$ins="INSERT INTO crt SET name='$name', price='$price',image='$timage'";
$connection->query($ins);

}
header("location:index.php");
?>