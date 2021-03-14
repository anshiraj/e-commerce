<?php include('config.php');?>
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
<div class="container">
 <div class="row">
     <div class="col-lg-6">
<img src="img/signs.jpg" width=80.8%>
     </div>
     <div class="col-lg-6">
     <form method="post">
         <h2 style="color:blue">Sign Up</h2>
         <div class="form-group">
     <input type="text" class="form-control" id="exampleInputEmail1" name="name"   placeholder="Name">
   </div>
  <div class="form-group">
     <input type="email" class="form-control" id="exampleInputEmail1" name="email"   placeholder="Email">
   </div>
  <div class="form-group">
     <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
  <div class="form-group">
     <input type="text" class="form-control" id="exampleInputEmail1" maxlength="10" name="contact"  placeholder="Contact">
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="exampleInputEmail1" name="city"  placeholder="City">
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="exampleInputEmail1" name="address"   placeholder="Address">
   </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Signup</button>
</form>
<?php
extract($_POST);
if(isset($submit)){
    $pass=$_POST['password'];
    $password_m=md5($pass);
    if(mysqli_query($conn,"INSERT INTO `users`(`name`, `email`, `password`, `contact`, `city`, `address`) VALUES ('$name','$email','$password_m','$contact','$city','$address')")){
        echo "<script> alert('Registered successfully');</script>";
    }

}
?>
</div>
</div>

</div>
<?php include('login.php'); ?>
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
