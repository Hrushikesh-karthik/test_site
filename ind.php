<?php include 'confi.php'; ?>
<!DOCTYPE html>
<html>
<title>Registration Payment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-content w3-border w3-margin-top">
    <h1 class="w3-center">Registration Payment.</h1>
  <div class="w3-container w3-blue">
    <h2>Fill Form!</h2>
  </div>
  <form class="w3-container" method='POST' action="">
       <p>      
    <label class="w3-text-black"><b>Name</b></label>
    <input class="w3-input w3-border" name="name" type="text" required></p>
    <p>      
    <label class="w3-text-black"><b>Number</b></label>
    <input class="w3-input w3-border" name="number" type="text" required></p>
    <p>      
    <label class="w3-text-black"><b>Email</b></label>
    <input class="w3-input w3-border" name="email" type="text" required></p>
    <p>      
    <label class="w3-text-black"><b>Amount</b></label>
    <input class="w3-input w3-border" name="amount" type="number" required></p>
    <p>
    <input type="submit" name='submit' class="w3-btn w3-blue" value='Checkout With Instamojo!'></p>
  </form>
</div>

</body>
</html> 

<?php
if(isset($_POST['submit'])){
    $amount = $_POST['amount'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://'.$mode.'.instamojo.com/api/1.1/payment-requests/');
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER,
                array("X-Api-Key:$api_key",
                      "X-Auth-Token:$api_secret"));
    $payload = Array(
        'purpose' => 'Event Registration',
        'amount' => $amount,
        'phone' => $number,
        'buyer_name' => $name,
        'redirect_url' => $redirect_url,
        'send_email' => true,
        'webhook' => $webhook_url,
        'send_sms' => true,
        'email' => $email,
        'allow_repeated_payments' => false
    );
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
    $response = curl_exec($ch);
    curl_close($ch); 

    $data = json_decode($response, true);

    if(isset($data['success']) && $data['success'] == 1){
        // for on-page payment, use this.
        $payment_id = isset($data['payment_request']['id']) ? $data['payment_request']['id'] : '';
        echo '<script src="https://js.instamojo.com/v1/checkout.js"></script>
        <script>
            Instamojo.open("https://test.instamojo.com/@sathwik13/'.$payment_id.'"); 
        </script>';
    } else {
        echo '<div class="w3-panel w3-red w3-content">
        <p>Error: ' . (isset($data['message']) ? $data['message'] : 'Try Again Later!') . '</p>
        </div>';
    }
}
?>
