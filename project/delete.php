<?php
include('config.php');
if($_REQUEST['pid']){
    $id=$_REQUEST['pid'];
    $delete=mysqli_query($conn,"delete from orders where id=$id");
    header("Location:confirm.php");
}