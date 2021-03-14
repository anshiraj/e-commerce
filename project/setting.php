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
<div class="container">    
    <div   style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Change Password</div>
                 </div>     

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" class="alert alert-danger col-sm-12"></div>
                    <form   class="form-horizontal" role="form" method="post">
                                
                         
                        <div class="form-group">
                            <label for="old_password" class="col-md-3 control-label">Old Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="old_password" placeholder="Old Password" required>
                            </div>
                        </div>
                          
                        <div class="form-group">
                            <label for="new_password" class="col-md-3 control-label">New Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="new_password" placeholder="New Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="c_password" class="col-md-3 control-label">Re-type New Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="c_password" placeholder="Re-type New Password" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <!-- Button -->                                        
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" name="submit" class="btn btn-info"> Change</button>
                             </div>
                        </div>
                    </form> 
                    <?php
 $id=$_SESSION['sid'];
                     extract($_POST);
                    if(isset($submit)){
                        $old_p=$_POST['old_password'];

                        $old=md5($old_p);
                        $new_p=$_POST['new_password'];
                        $new=md5($new_p);
                        $new_r_p=$_POST['c_password'];
                        $new_r=md5($new_r_p);
                        $query=mysqli_query($conn,"select password from users where id=$id");
                        $data=mysqli_fetch_array($query);
                        if($data['password']==$old && $new===$new_r){
                            $result=mysqli_query($conn,"UPDATE `users` SET `password`='$new' WHERE `id`='$id'");
                            if($result){
                                ?>
                            <script>alert('Password updated successfully'); </script>
                                <?php
                            }
                        }else{
                        
                     echo "<script>alert('Password does not exits!'); </script>";

                         }
                         
                        

                    }
                    ?>  
                    </div>                     
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
