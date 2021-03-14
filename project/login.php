<?php session_start(); ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel"><strong>Login</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
     
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="form-group modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="login" class="btn btn-primary">Login</button>
      </div>
      <p>Don't have an account <a href="signup.php">register here</a></p>

 </form>
 <?php 
  extract($_POST);
 if(isset($login)){
     $uname=$_POST['email'];
     $passwrd=$_POST['password'];
     $pass=md5($passwrd);
     $sel=mysqli_query($conn,"select *    from users
     where email='$uname' and password='$pass'");
    $arr=mysqli_fetch_assoc($sel);
    if($uname==$arr['email'] && $pass==$arr['password']){
        $_SESSION["sid"]=$arr['id'];
        
        $url="shop.php?id=".$_SESSION["sid"];
        ?>
        <script>window.location="<?php echo $url; ?>";</script>

        
     <?php }else{
        echo "<script> alert('Invalid Username or Password'); </script>";
    }
 }
 ?>
      </div>
      
    </div>
  </div>
</div>