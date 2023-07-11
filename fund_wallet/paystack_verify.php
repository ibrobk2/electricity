<?php
$ref = $_GET['reference'];

if($ref==""){
    header("Location: javascript://history.go(-1)");
}

  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/".rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_3409fcb2c1b1bda39ef90dcd974f6650483a1550",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    // echo $response;
    $result = json_decode($response);

    if($result->data->status=="success"){
        $satus = $result->data->status;
        $reference = $result->data->reference;
        $lastname = $result->data->customer->last_name;
        $firstname = $result->data->customer->first_name;
        $fullname = $firstname." ".$lastname;
        $customer_email = $result->data->customer->email;
        date_default_timezone_set("Africa/Lagos");
        $date_time = date('m/d/Y h:i:s a', time());
        $dep_amount = $result->data->amount;
        $charge = 50;
        $amount = $dep_amount-$charge;
        $type = "Deposit";
       

        //Server connection
        include "../includes/connection.php";
        include "../includes/core.php";
        // TODO: implement wallet update before insert
            #code here....
            $wallet = $user['wallet'];
            $query = "UPDATE customers SET wallet = $wallet + $amount WHERE email= '$customer_email'";
            $result = mysqli_query($conn, $query);
        // 
      
        $stmt = $conn->prepare("INSERT INTO `deposit`(`name`, `amount`, `charge`, `status`, `trans`, `date`, `type`) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $fullname, $amount, $charge, $satus, $reference, $date_time, $type);
        $stmt->execute();

        if($stmt){
            header("Location: success.php");
        }
    }else{
        header("Location: error.html");
    }

  }
?>