<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            background-image: url('images/background-2.jpg');
        }

        form {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 80%;
            margin: 20px auto;
            background-image: linear-gradient(to right,red,green,blue);
            color: white;
        }

        h2 {
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        select {
            width: calc(100% - 10px);
            padding: 10px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: black;
            color: white;
            cursor: pointer;
        }

        .main {
            display: flex;
            justify-content: space-around;
        }
        #button1{
            width: 15%;  
            margin:auto; 
            margin-top:45px; 
        }
        #button2{
            width: 15%;  
            margin:auto; 
            
        }
        #button2 button{
            margin:auto; 
            background-color: black;
            padding: 8px 54px;
        }
        #button2 a{
            background-color: black;
            color: white;
            text-decoration: none;
          
        }
    </style>
</head>

<body>
    <form action="billsubmit.php" method="POST">
        <div class="main">
            <div class="col1">
                <h2>Product Management</h2>
                <label >Website Name:</label>
                <input type="text" name="pn" id="pn" required>

                <label >Website Description:</label>
                <textarea name="pd" id="pd" rows="3"></textarea>

                <label >Website Price:</label>
                <input type="number" name="pp" id="pp"  required>

                <label >No of websites:</label>
                <input type="number" name="iq" id="iq" required>
            </div>
            <div class="col2">
                <h2>Order Creation</h2>
                <label >Customer Name:</label>
                <input type="text" name="cn" id="cn" required>

                <label >Contact Information:</label>
                <input type="text" name="ci" id="ci" required>

                <label >Selected Products:</label>
                <textarea name="sp" id="sp" rows="3" required></textarea>

                <label >Total Order Amount:</label>
                <input type="number" name="to" id="to"  required>
            </div>
            <div class="col3">
                <h2>Order History</h2>
                <label >Order ID:</label>
                <input type="text" name="oi" id="oi" required>

                <label >Order Date and Time:</label>
                <input type="datetime-local" name="date" id="date" required>

                <label >Order Status:</label>
                <select name="os" id="os" required>
                    <option value="pending">Pending</option>
                    <option value="completed">Completed</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
        </div>
        <div id="button1">
            <input type="submit" value="Submit">
        </div>
        <div id="button2">
            <button ><a href="logout.php">logout</a></button>

        </div>
    </form>
</body>

</html>