<?php
session_start();
$msg="";
include 'config.php';
if(!empty($_POST['logbtn']))
{
    $email=$_POST['email'];
    $psw=$_POST['psw'];
    $sql="select * from customer where email='$email' and password='$psw'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($res);
    if(is_array($row))
    {
        $_SESSION["id"]=$row['id'];
        $_SESSION["fname"]=$row['fname'];
        $_SESSION["phone"]=$row['phone'];
        $_SESSION["email"]=$row['email'];
        $_SESSION["password"]=$row['password'];
    }
    else{
        $msg="Incorrect password or email";
    }
}
if(isset($_SESSION["id"])){
    header('location:hello.php');
}
?>
