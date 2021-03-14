<?php 
session_start();
include('config.php');
session_unset();
session_destroy();
?>
<script>window.location="signup.php"</script>
