<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/SignUp Form</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            background-color: black;
            color: white;
            
            
        }
       

        .frm {
                border: 1px solid white;
                width: 30%;
                margin: auto; 
                margin-top: 7%;
                
            }

         #sign{
            background-color: green;
            color: white;
            width: 100%;
            text-align: center;
            padding: 10px;
        }
        #footer{
            background-color: green;
            color: white;
            padding: 10px;
            width: 100%;
        }
        #footer h3{
            background-color: green;
        }
        #footer a{
            text-decoration: none;
            color: yellow;
            background-color: green;
        }
        #form{
            padding: 40px;
            width: 100%;
        }
        #form div{
            padding: 10px;
        }
        #form div input{
            padding: 10px;
            color: black;
            border: 1px solid white;
            font-size: 20px;
            margin: 0;
            background-color: white;
        }
      
    </style>
</head>
<body>
    <div class="frm">
        <h2 id="sign">Login</h2>
        <form action="loginprocess.php" id="form" method="post">
            <div>
                Email: <input type="email" name="email" id="name" required>
            </div>
            <div>
                Password: <input type="password" name="password" id="password" required>
            </div>
            <div >
                <input type="submit" value="Login"  style="background-color: black; color:white;cursor:pointer;" >
            </div>
        </form>
        
        <div id="footer">
            <h3>Already have No Account?&ensp;&ensp;<a href="signup.php">Sign Up</a></h3>
        </div>
    </div>
    
</body>
</html>