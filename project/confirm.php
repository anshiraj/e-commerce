<?php session_start();
include('config.php');

 if (is_array($_COOKIE['item']))  //this is for chec cookies are available or nor
{
    foreach ($_COOKIE['item'] as $name1 => $value)
    {

        if (isset($_POST["delete$name1"]))
        {

            setcookie("item[$name1]", "", time()-8800);
            ?>
            <script type="text/javascript">
                window.location.href = window.location.href;
            </script>
            <?php
        }else{
			
			
		}
    }
} 
else{
	
?>
<script> alert('no cart available now'); 

	window.location="shop.php";

</script>  
<?php	
	
}?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lifestyle Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
</style>
<body>
    <header>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="shop">E Store</a>
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
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
        <?php
					$d=0;
					if (is_array($_COOKIE['item']))  //this is for check cookies are available or nor
					{
						$d=$d+1;

					}
					if($d==0)
					{
						echo "no record available in cart";
						echo "<br>";echo "<br>";echo "<br>";echo "<br>";
					}
					else
					{
						?>
                        <thead>
                            <tr>
                                <th style="width:10%">Item number</th>
                                <th style="width:50%">Item name</th>
                                <th style="width:10%">Qunatity</th>
                                <th style="width:10%">Price</th>
                                 <th style="width:10%">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                         
                        <?php
					$i=1;
					if (is_array($_COOKIE['item']))  //this is for check cookies are available or nor
					{
					foreach ($_COOKIE['item'] as $name1 => $value)   //this is for looping as per cookies if 3 cookies then loop move
					{
						$values11 = explode("__", $value);
                      
						?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-2 hidden-xs"><img src="image/<?php echo $values11[0]; ?>" alt="..." class="img-responsive"/></div>
                                        <div class="col-sm-10">
                                            <h4 class="nomargin"><?php echo $values11[1]; ?></h4>
                                         </div>
                                    </div>
                                </td>
                                <td>  <?php echo $values11[3]; ?></td>

                                <td data-th="Price">₹ <?php echo $values11[2]; ?>.00</td>
                                 <?php 
                                  ?>
                                 <form action="" method="post">
							<td class="cart_delete">
							<button type="submit" class="btn btn-danger" name="delete<?php echo $name1; ?>"><span class="glyphicon glyphicon-trash	
"></span></button> 
							</td>
                            </tr>
                           <?php
                       
                        }
                           }
                         } ?>
                    
                        </tbody>
                        </form>
                        <tfoot>
                             
                            <tr>
                                <td><a href="shop.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                                <td colspan="1" class="hidden-xs"></td>
                                <td class="hidden-xs text-center"><strong>Total <?php

					
$tot=0;
if (is_array($_COOKIE['item']))  //this is for check cookies are available or nor
					{
foreach ($_COOKIE['item'] as $name1 => $value)   //this is for looping as per cookies if 3 cookies then loop move
{
    $values11 = explode("__", $value);
$tot=$tot+$values11[4];
}

echo "₹".$tot;
					}
?>.00</strong></td>
 
                                <td><a href="success.php" name="order" class="btn btn-primary btn-block">Confirm Order <i class="fa fa-angle-right"></i></a></td>
                            </tr>
                        </tfoot>
                            

                    </table>
    </div>

     

</body>
</html>
