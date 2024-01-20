<?php

    $pn =$_REQUEST['pn'];
    $pd =$_REQUEST['pd'];
    $pp =$_REQUEST['pp'];
    $iq =$_REQUEST['iq'];
    $cn =$_REQUEST['cn'];
    $ci =$_REQUEST['ci'];
    $sp =$_REQUEST['sp'];
    $to =$_REQUEST['to'];
    $oi =$_REQUEST['oi'];
    $date =$_REQUEST['date'];
    $os =$_REQUEST['os'];

    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'project');

    $q = "INSERT INTO orders (productName, productDescription, productPrice, inventoryQuantity, customerName, contactInformation, selectedProducts, totalOrderAmount, orderID, orderDate, orderStatus)
    VALUES ('$pn', '$pd', '$pp', '$iq', '$cn', '$ci', '$sp', '$to', '$oi', '$date', '$os')";

    mysqli_query($con,$q);

    header('location:bill.php');

?>