<?php
session_start();
 include('config.php');
 if(isset($_POST["submit"])){
    $d=0;
    $id=$_POST['idset'];

	if(is_array($_COOKIE['item']))   //This is for checking cookie is available or not
	{
		foreach($_COOKIE['item'] as $name=>$value){
			$d=$d+1;
		}
		$d=$d+1;
	}
	else{
		$d=$d+1;
	
	}
	//To get item description from table 
	$res3=mysqli_query($conn,"select * from product where id=$id");
	while($row3=mysqli_fetch_array($res3)){
		$img1=$row3["product_image"];
		$nm=$row3["product_name"];
		$prize=$row3["price"];
		$qty=$_POST['q'];
		$total= $prize * $qty;
	}
	if(is_array($_COOKIE['item'])){

		foreach($_COOKIE['item'] as $name1 => $value)
		{
			$values11=explode("__",$value);
			$found=0;
			
			if($img1==$values11[0])
			{
				$found=$found+1;
				$qty= $values11[3] + 1;

				$tb_qty;
				$res = mysqli_query($conn, "select * from product where product_image='$img1'");
				while($row = mysqli_fetch_array($res)){
	$tb_qty= $row["product_qty"];
				} 
				if($tb_qty < $qty){
					?>
<script type="text/javascript">   
alert('This much quantity not available');
</script>
					<?php
				}
				else{


				$total=$values11[2]*$qty;
				
				setcookie("item[$name1]", $img1 . "__" . $nm . "__" . $prize . "__" . $qty . "__" . $total, time() + 8800);
			}
		}
	}
		if($found==0)
		{
			$tb_qty;
				$res = mysqli_query($conn, "select * from product where product_image='$img1'");
				while($row = mysqli_fetch_array($res)){
	$tb_qty= $row["product_qty"];
				} 
				if($tb_qty < $qty){
					?>
<script type="text/javascript">   
alert('This much quantity not available');
</script>
					<?php
				}
				else{

			
			setcookie("item[$d]", $img1 . "__" . $nm . "__" . $prize . "__" . $qty . "__" . $total, time() + 8800);
				}
		}
	}
		else{
			$tb_qty;
				$res = mysqli_query($conn, "select * from product where product_image='$img1'");
				while($row = mysqli_fetch_array($res)){
	$tb_qty= $row["product_qty"];
				} 
				if($tb_qty < $qty){
					?>
<script type="text/javascript">   
alert('This much quantity not available');
</script>
					<?php
				}
				else{

			setcookie("item[$d]", $img1 . "__" . $nm . "__" . $prize . "__" . $qty . "__" . $total, time() + 8800);
				}
		}
	
	}                 ?>     
 
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
<div class="container" style="margin-top: 40px;">
<?php 
                             $query="SELECT * FROM `product`";
                           $run=mysqli_query($conn,$query);
                        $i=1;
                           while  ($data=mysqli_fetch_assoc($run))
                               
                           {?>
    <div class="items">
     <form method="post" enctype="multipart/form-data">
        <img src="image/<?php echo $data['product_image']; ?>" class="thumbnail">
        <div class="caption">
    <h3><?php echo $data['product_name']; ?></h3>
 <p>
     Price Rs. <?php echo $data['price']; ?>.00
 </p>   
 <input type="hidden" name="idset" value="<?php echo $data['id']; ?>">
 <label>Quantity:</label>
									<input type="text" value="1" name="q" size="3" />
 <button type="submit" name="submit" class="btn btn-primary">Add to cart</button>
                           </form>
                      
</div>
    
    </div>

                           <?php
                        
                        } ?>                                 
                                </div>
                             
                                                             
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
