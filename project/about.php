<?php
 include('config.php'); ?>
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
  <section class="container">
<div class="row">
<div class="col-lg-4">
    <h1>WHO WE ARE</h1>
    <img src="img/about.jpg" width=90%>
    <p>E-store is an American electronic commerce company with headquarters in Washington. It is the largest internet-based retaller in the united states E-store started as an online blog. but soon diversited selling more phones E-store also sells certain low-end products like USB cables and other accessories. E-stire has separate retail websites for Unites states United kingdom & ireland, France, Canada, Germany, Italy, spain, the Netherland, Australia, Brazil, Japan, China, India and Maxico. Amazon also offers to international shopping to certain other.</p>
    </div>
    <div class="col-lg-4">
    <h1>OUR HISTORY</h1>
<p><a href="#">1998</a><br>The company was founded in 1998. spurred by what veios called his "initiating framework" which described his efforts as an initiate to participate in the internet business boom during that time in 1999.Veios left his employment as president of Ofcol & CO. and moved to seattle. He bega to work on business plan
for what would eventually become E-store.</p>
<p><a href="#">2002</a><br>In January 2002, E-store has received a funding of $12 million from Venture Partners and indo-US Venture Partners.
</p>

<p><a href="#">2008</a><br>In July 2008 the company rasied a further $45 million from Bessemer Venture Partners. along with existing investers Venture Partners and indo-US Venture Partners.
</p>
    </div>
    <div class="col-lg-4">
    <h1>OPORTUNITIES</h1>
<p>Available Roles
</p>
<p>1. Jr./Sr. Web Developer (Full Time Role + also available as a 6 Months Internship)<br>
2. Business Apprentice (6 Monthys Internship)<br>
3. Manager at backend operations(Full time Role + also available as a 6 Month Internship)</p>
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
