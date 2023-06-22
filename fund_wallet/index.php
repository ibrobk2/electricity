<?php
// Include your server.php file with the database connection
require_once '../includes/connection.php';
require_once '../includes/core.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the amount entered by the user
    $amount = $_POST['amount'];
    $username = $user['username'];
    $wallet = $user['wallet'];

    // Validate the amount (you can add more validation as per your requirements)
    if (!is_numeric($amount) || $amount <= 0) {
        $error = 'Invalid amount entered.';
    } else {
        // Add the amount to the wallet balance in the database
        $query = "UPDATE customers SET wallet = $wallet + $amount WHERE username= '$username'";
        $result = mysqli_query($conn, $query);
        // $statement = $conn->prepare($query);
        // $statement->bindValue(':amount', $amount, ':username', $username, PDO::PARAM_INT);
        // $statement->execute();

        // Check if the query was successful
        if ($result) {
            $success = '<script>
            swal("Good job!", "Amount added to wallet successfully.!", "success")
            .then((value)=>{
                window.location = "../customer/";    
            });
            </script>
            ';
        } else {
            $error = 'Failed to add amount to wallet.';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fund Wallet</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <a href="../customer/"><h2>Back to Dashboard</h2></a>
    <a href="../includes/logout.php" style="text-align:right; color: brown;"><h2>Logout</h2></a>
    <div class="container">

    
    <h1>Fund Wallet</h1>

    <?php
    if (isset($error)) {
        echo '<p style="color: red;">' . $error . '</p>';
    }

    if (isset($success)) {
        echo '<p style="color: green;">' . $success . '</p>';
    }
    ?>

    <form method="POST" action="index.php">
        <label for="amount">Enter Amount:</label>
        <input type="number" name="amount" id="amount" step="0.01" required>
        <button type="submit">Fund Wallet</button>
    </form>
    </div>
    <footer style="position: absolute; bottom: 10px;margin-left:450px;">
		<p>&copy; <?php  echo date("Y"); ?>  Department of Computing and Artificial Intelligence, Federal University Dutsinma .</p>
	</footer>
</body>
</html>
