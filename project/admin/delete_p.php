<?php
include('../config.php');
if($_REQUEST['id']){
    $id=$_REQUEST['id'];
    $delete=mysqli_query($conn,"delete from product where id=$id");
    header("Location:product.php");
}else if($_REQUEST['cid']){
    $id=$_REQUEST['cid'];
    $delete=mysqli_query($conn,"delete from contact where id=$id");
    header("Location:contact.php");
}else{
    $id=$_REQUEST['oid'];
    $delete=mysqli_query($conn,"delete from users where id=$id");
    header("Location:user.php");
}

?> 