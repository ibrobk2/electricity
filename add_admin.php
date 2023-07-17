<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRegister New Admin</title>
    <style>
        body{
            background-color: #1cc88a;
            color: #fff;
        }

        .container{
            height: 100vh;
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: whitesmoke;
            margin: 0 350px;
        }

        input{
            padding: 12px;
            width: 95%;
        }
        button{
            padding: 14px;
            width: 110%;
            background-color: #1cc88a;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            font-weight:bold;
        }

        h2{
            color: #1cc88a;
            font-size: 32px;
            font-family: sans-serif;
        }
        h3{
            position: absolute;
            color: azure;
            font-size: 26px;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<h3><a href="./admin_dashboard.php" id="admin"><i class="las la-home"></i>Admin Dashboard</a></h3>

    <div class="container">
        <h2>Add New Admin</h2>
        <form action="process.php" method="post">
            <input type="text" placeholder="Full Name" name="fname"><br><br>
            <input type="text" placeholder="Username" name="user"><br><br>
            <input type="password" placeholder="Password" name="pass"><br><br>
            <button type="submit" name="btn_add_admin">Register</button>
        </form>
    </div>
</body>
</html>