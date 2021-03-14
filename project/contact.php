<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>E Store</title>
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
    margin-top:50px;
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
      <a class="navbar-brand" href="index.php">E Store</a>
    </div>
     <ul class="nav navbar-nav navbar-right">
     <li><a href="index.php"><span class="glyphicon glyphicon-gift"></span>Shop</a></li>

     <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Signup</a></li>
      <li><a href="" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="about.php"><span class="glyphicon glyphicon-th-list"></span>About</a></li>
      <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact us</a></li>
 
    </ul>
  </div>
</nav>
</header> 
<section class="container">
    <div class="row">
        <div class="col-lg-10">
  <h1>LIVE SUPPORT</h1>
  <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
  <p>It is a long established fact that a reader will be distracted by the readable content of the page when looking at its layout.The point of using Lorem lpsum is that it has a more of less distribution of letters.There are many variations of passages of Lorem lpsum availabe. But the majority have suffer alteration of some form, by injected humour,or randonized words which don't look even slightly believable. if you are going to use a passage of Lorem lpsum, you need to be sure there isn't anything embarrassing hidden in the middle of the text.
</p>
</div>
<div class="col-lg-2">
    <img src="img/telecaller.png" width=100%>
</div>
</div>

</section>
<section class="container">
<div class="row">
        <div class="col-lg-8">
            <h1>CONTACT US</h1>
        <form method="post">
        <div class="form-group">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1">
   </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1">
   </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Address:</label>
    <textarea type="text" class="form-control" name="address" id="exampleInputEmail1"></textarea>
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
    if(mysqli_query($conn,"INSERT INTO `contact`(`name`, `email`, `address`) VALUES ('$name','$email','$address')")){
        echo "<script> alert('Request sent successfully');</script>";
    }

}
?>
</div>
<div class="col-lg-4">
<h1>Company Information: </h1>
<strong><p>500 Lorem lpsum dolor sit,<br>22-56-2-9 sit Amet Lorem,
<br>USA<br>Phone(00)222 666 444
<br>Fax(000)000 00 00 0<br>
Email:info@mycompany.com<br>
Follow on Facebook,twitter</p></strong>

</div>
</div>

</section>
<?php include('login.php');?>

<footer>
    <div class="container">
 <div class="row">
     <div class="col-lg-4">
         <h2>Information</h2>
 
    <p><a href="about.php" style="color:#9d9d9d">About us</a></p>
    <p><a href="contact.php" style="color:#9d9d9d">Contact us</a></p>
 
     </div>
     <div class="col-lg-4">
     <h2>My Account</h2>

     
    <p><a href="" data-toggle="modal" data-target="#exampleModal" style="color:#9d9d9d">Login</a></p>
    <p><a href="signup.php" style="color:#9d9d9d">Signup</a></p>
 
</div>
<div class="col-lg-4">
<h2>Contact us</h2>
 
     <p><a href="contact.php" style="color:#9d9d9d">Contact: +91-123-0000000</a></p>
      </div>

 </div>
 </div>
</footer>

</body>
</html>
