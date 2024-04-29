<!-- OTP GENERATION AND SENDING OTP TO THE PHONE NUMBER -->
    <?php
    
    // echo 'otp.php being executed.';
    // Include the Twilio PHP library
    require __DIR__ . '\twilio-php-main\src\Twilio\autoload.php';
    use Twilio\Rest\Client;

    // Twilio account SID and auth token
    $accountSid = 'AC62225b70692bc7c54609db1fe2b3eb69';
    $authToken = 'd7d4f47d694dccfd6219c872a6895059';

    // Create a new Twilio client
    $client = new Client($accountSid, $authToken);

    // Function to generate a random OTP
    function generateOTP()
    {
        $otpLength = 6; // Change the OTP length as needed
        $otp = '';
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        for ($i = 0; $i < $otpLength; $i++) {
            $otp .= $characters[rand(0, $charactersLength - 1)];
        }
        return $otp;
    }
    session_start();
    // Generate an OTP
    $otp = generateOTP();
    $_SESSION['otpgot']=$otp;
    // Phone number to send the OTP
    $phoneNumber = '+91 9998076910'; // Replace with the recipient's phone number
    $_SESSION['twphone']=$phoneNumber;
    if($_SESSION['phone']!=""){
    try {
        // Send the OTP via SMS using Twilio
        $message = $client->messages->create(
            $phoneNumber,
            array(
                'from' => '+13144852970',
                // Replace with your Twilio phone number
                'body' => 'Your OTP: ' . $otp
            )
        );
        
        

        // Display success message
    } catch (Exception $e) {
        // Display error message
        // echo 'Error sending OTP: ' . $e->getMessage();
        echo '<p style="font-size:45px;font-family:calibri;text-align:center;"><b>Error occurred while sending otp to ' . $phoneNumber.'</b></p>';

    }
    }else{
    }
    ?>
