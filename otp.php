<!-- OTP GENERATION AND SENDING OTP TO THE PHONE NUMBER -->
<?php
    // Include the Twilio PHP library
    require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
    use Twilio\Rest\Client;

    // Twilio account SID and auth token
    $accountSid = 'AC62225b70692bc7c54609db1fe2b3eb69';
    $authToken = '3d3028fec9a68fad494245acc943a7ed';

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
    $_SESSION['otpgot'] = $otp;

    // Phone number to send the OTP
    $phoneNumber = '+91 9998076910'; // Replace with the recipient's phone number
    $_SESSION['twphone'] = $phoneNumber;

    // Check if the phone number is set in the session
    if(isset($_SESSION['phone']) && $_SESSION['phone'] != "") {
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
            $otpflag = true;
            $_SESSION['otpflagcheck'] = $otpflag;

            // Display success message (optional)
            // echo '<p style="font-size: 20px;">OTP has been sent successfully!</p>';
        } catch (Exception $e) {
            // Log error message
            error_log('Error sending OTP: ' . $e->getMessage());
            // echo $e->getMessage();
            // Display error message
            echo '<p style="font-size: 30px; color: red;">Error occurred while sending OTP to ' . $phoneNumber . '</p>';
        }
    } 
?>
