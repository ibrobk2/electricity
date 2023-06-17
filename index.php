<!DOCTYPE html>
<html>
<head>
	<title>Electricity Bill Payment and Complain Management System</title>
	<link rel="stylesheet" type="text/css" href="static/index.css">
	<style>
		img{
			position: absolute;
			top: 10px;
			width: 150px;
			height: 150px;
			border-radius: 150px;
			right: 10px;
		}
	</style>
</head>
<body>
	<header>
		<marquee behavior="" direction=""><h1>Electricity Bill Payment & Complain Management System</h1></marquee>
	</header>

	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Login</a></li>
			<li><a href="#">Register</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">FAQs</a></li>
		</ul>
	</nav>
	<img src="images/fudma_logo.jpeg" alt="">
	<main>
		<h2>Login to Purchase Meter Token or Foward Your Complain</h2>
		

		<!-- Login form -->
		<form action="process.php" method="post">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required><br><br>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required><br><br>
			<button type="submit">Log In</button>
		</form>

		

		<p>Don't have an account? <a href="#">Sign up here</a></p>
	</main>

	<footer>
		<p>&copy; <?php  echo date("Y"); ?>  Department of Computing and Artificial Intelligence, Federal University Dutsinma .</p>
	</footer>

	<script>
		// alert("Welcome to Electricity Bill Pay");
	</script>
</body>
</html>
