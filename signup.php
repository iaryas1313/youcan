<?php
include 'config.php';
if(isset($_POST['btn']))
{
    $stmt=$conn->prepare("INSERT INTO customer(fname,phone,email,password)VALUES(?,?,?,?)");
    $stmt->bind_param("siss",$fname,$phone,$email,$pass);
    $fname=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $stmt->execute();
        header('location: loginp.php');
}
else{
    echo "Registration Unsuccessfull";
}

?>