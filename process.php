<?php
             $con = mysqli_connect('localhost','root','');
             mysqli_select_db($con,'project');
         
             $email = $_REQUEST['email'];
             $password = $_REQUEST['password'];

             $q = "insert into  login(email,password) values ('$email','$password')";

             mysqli_query($con,$q);

            header('location:login.php');


        ?>