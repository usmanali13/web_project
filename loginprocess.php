
<?php

    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'project');

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    
    $q = "select * from login where email='$email' and password='$password'";

    $rs = mysqli_query($con,$q);
    $cont = mysqli_num_rows($rs);
    if($cont==1){
        session_start();
        $_SESSION['login']=$email;
        header('location:bill.php');
    }else{
        header('location:signup.php');
    }

?>