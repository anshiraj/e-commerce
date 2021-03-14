<?php 
include('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lifestyle Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
</head>

<style>
    footer{
     position: relative;
     left: 0;
    padding: 10px 0;
    background-color: #101010;
    color:#9d9d9d;
    bottom: 0;
    width: 100%;
    text-align: center;
 }
 .items{
    width: 20%;
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 2.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    float: left;
    margin-left: 4%;
}
.thumbnail{
    display: block;
    max-width: 100%;
    height: auto;
}
.caption{
    color: #000;
    padding: 0px 10px 10px;
    font-weight: bold;
    text-align: center;
}
</style>
<body>
<header>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E Store</a>
    </div>
     <ul class="nav navbar-nav navbar-right">
     <li><a href="index.php"><span class="glyphicon glyphicon-save-file"></span>Add product</a></li>
     <li><a href="contact.php"><span class="glyphicon glyphicon-save-file"></span>Contact</a></li>

     <li><a href="user.php"><span class="glyphicon glyphicon-user"></span>User</a></li>
      <li><a href="product.php"><span class="glyphicon glyphicon-tasks"></span> product view</a></li>
      
    </ul>
  </div>
</nav>
</header> 
<section class="container">
    <div style="border:2px solid #9d9d9d;padding:20px 20px 20px 20px;width:475px;margin:auto;">
         
<form method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Product name</label>
    <input type="text" name="p_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product name">
   </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="file" name="file" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" name="p_price" class="form-control" id="exampleInputPassword1" placeholder="Price">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<?php
extract($_POST);
if(isset($submit)){
    $fn=$_FILES['file']['name'];
    $tmp=$_FILES['file']['tmp_name'];
    $ext=pathinfo($fn,PATHINFO_EXTENSION);
    if($ext=="jpg" || $ext=="png"|| $ext=="jpeg"|| $ext=="pdf")
    {
        $imgName="file-".rand()."-".time().".$ext";
         if(move_uploaded_file($tmp,'../image/'.$imgName))
           {
             if(mysqli_query($conn,"INSERT INTO `product`(`product_name`, `product_image`, `price`) VALUES ('$p_name','$imgName','$p_price')")){
             echo "<script> alert('Uploaded successfully'); </script>";

           } }}}
?>

</div>
</section>
</body>
</html>
