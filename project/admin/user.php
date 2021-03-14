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
<div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Conatct</th>     
      <th scope="col">City</th>
      <th scope="col">Address</th>
      <th scope="col">Delete</th>


    </tr>
  </thead>
  <tbody>
  <?php 
							
                            $query="SELECT * FROM `users`";
                           $run=mysqli_query($conn,$query);
                        $i=1;
                           while  ($data=mysqli_fetch_assoc($run))
                               
                           {?>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo $data['name']; ?></td>
      <td><?php echo $data['email']; ?></td>
      <td><?php echo $data['password']; ?></td>
      <td><?php echo $data['contact']; ?></td>
      <td><?php echo $data['city']; ?></td>
      <td><?php echo $data['address']; ?></td> 
      <td><a href="delete_p.php?oid=<?php echo $data['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></td>

    </tr>
                           <?php } ?>
       </tbody>

  </table>
</div>
</body>
</html>
