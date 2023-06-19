<?php


include "includes/connection.php";


//REGISTRATION SECTION 
if(isset($_POST['btn_reg'])){
    //variables
$full_name = $_POST['fname'];
$username = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];

$sql = "INSERT INTO customers (`full_name`, `username`, `email`, `password`, `phone`) VALUES ('$full_name', '$username', '$email', '$pass', '$phone')";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: index.php");
}
}

?>