
<?php
if(isset($_GET['exist'])){
    echo "<script>
        alert('Sorry User Already Exist!');
    </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="static/index.css">
    <style>

        body{
            background-image: linear-gradient(to bottom right, #052923, #a5d9c7);
	        color: #fff;
        }
        p{
            color: azure;
        }

        p a{
            color: gray;
        }

       
    </style>
</head>
<body>
    <div class="container">
        <h2>Customer Registration Page</h2>
        <form action="process.php" method="post">
            <label for="">Full Name:</label>
            <input type="text" placeholder="Enter Your Full Name" name="fname" required><br>
            <label for="">Username:</label>
            <input type="text" placeholder="Enter Your Username" name="user" required><br>
            <label for="">Email:</label>
            <input type="text" placeholder="Enter Your Email" name="email" required><br>
            <label for="">Phone Number:</label>
            <input type="text" placeholder="Enter Your Phone Number" name="phone" minlength="11" maxlength="15" required><br>
            <label for="">Password:</label>
            <input type="password" placeholder="Enter Your Password" name="pass" minlength="4" maxlength="12" required><br>
            <button name="btn_reg">Register</button>
            <p>Already Have an Account? Login <a href="index.php">Here</a></p>
        </form>
    </div>
    <footer>
		<p>&copy; <?php  echo date("Y"); ?>  Department of Computing and Artificial Intelligence, Federal University Dutsinma .</p>
	</footer>
</body>
</html>