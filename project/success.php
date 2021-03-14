<?php
session_start();
include('config.php'); ?>

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
     position: fixed;
     left: 0;
    padding: 10px 0;
    background-color: #101010;
    color:#9d9d9d;
    bottom: 0;
    width: 100%;
    text-align: center;
 }
</style>
<body>
    <header>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="shop.php">E Store</a>
        </div>
         <ul class="nav navbar-nav navbar-right">
      <li><a href="shop.php"><span class="glyphicon glyphicon-gift"></span>Shop</a></li>
      <li><a href="confirm.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Setting</a></li>
      <li><a href="logout.php"><span class="	glyphicon glyphicon-log-out"></span> Logout</a></li>

        </ul>
      </div>
    </nav>
    </header> 

    <div >
<p style="text-align:center">Thank you for ordering from <strong>E-Store</strong>. The order shall be delivered to you shortly </p>
<p style="text-align:center">Order some more electronics items <a href="shop.php">here</a></p>
</div>
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

     
    <p><a href="#" style="color:#9d9d9d">Login</a></p>
    <p><a href="#" style="color:#9d9d9d">Signup</a></p>
 
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
