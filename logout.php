<?php
include('config.php');
session_start();
unset($_SESSION['id']);
unset($_SESSION['email']);
header("location:loginp.php");
?>