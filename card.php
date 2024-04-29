<?php
//connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cart";

//attempt to connect to database

$conn = mysqli_connect($servername, $username, $password, $dbname);

//checking if connection is established or not

if ($conn == false) {
    echo "Connection Unsucessful." . "Error : " . mysqli_connect_error();
} else {
    // echo "Connection sucessful.";
}

$sql = "SELECT * FROM `addtocart`";
$result = mysqli_query($conn, $sql);

?>
<html>

<head>
    <title>CARD</title>
    <style>
        #a {
            display: block;
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            /* font-weight: bold; */
            font-size: 30px;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        #a:hover {
            background-color: #111;
        }

        #a {
            color: lightgrey;
            background-color: transparent;
            text-decoration: none;
        }

        #a {
            color: lightgrey;
            background-color: transparent;
            text-decoration: none;
        }

        #a {
            color: lightgrey;
            background-color: transparent;
            text-decoration: none;
        }

        html {
            scroll-behavior: smooth;
        }
        </style>
         <script>
        // Function to redirect to a different page
        function redirectToPage(url) {
            window.location.href = 'orderplaced.php';
        }

        // Check if OTP is submitted and redirect
        if (window.history.replaceState && <?php echo isset($_POST['sendotp']) ? 'true' : 'false'; ?> && <?php echo $otp==$otpsend ? 'true' : 'false'; ?>) {
            window.history.replaceState(null, null, redirectToPage("orderplaced.php"));

        }
    </script>

</head>

<body style="background-color:black;color:lightgrey;font-size:30px;">
    <!--NAVBAR-->
    <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;">
        <li style="display:block;"><a id="a" href="payment.php">Return To Payment</a></li>
    </ul>
    <p style="font-size:45px;font-family:calibri;text-align:center;color:lightgrey;"><b>PAYMENT PROCEDURE -- 1</b></p>
    <fieldset style="margin-left:20px;margin-bottom:30px;margin-right:20px;text-align:center;">
        <form action="\GYMMANIA\card.php" method="post">
        <label for="cardno"><pre>CARD NUMBER : </label><input type="text"  pattern="(?:\d{4} ){3}\d{4}" id="cardno" name="cardno" size=20 style="padding-left:10px;padding-right:10px;padding-bottom:10px;padding-top:10px;font-size:25px;text-align:center" <?php error_reporting(0); echo 'value="' . $cardno . '"'; ?>></input>     <label for="cardname">NAME ON CARD : </label><input type="text" pattern="[A-Za-z\- ']*" id="cardname" name="cardname" size=20 style="padding-left:10px;padding-right:10px;padding-bottom:10px;padding-top:10px;font-size:25px;text-align:center" <?php error_reporting(0); echo 'value="' . $cardname . '"'; ?> max="20"></input></pre>
        <label for="expdate"><pre>EXPIRY DATE : </label><input type="text" pattern="(0[1-9]|1[0-2])\/[0-9]{2}" maxlength="5" id="expdate" name="expdate" size=10 style="padding-left:10px;padding-right:10px;padding-bottom:10px;padding-top:10px;font-size:25px;text-align:center" <?php error_reporting(0); echo 'value="' . $expdate . '"'; ?>></input>     <label for="cvv">CVV : </label><input type="text" pattern="[0-9]{3}" id="cvv" name="cvv" size=5 <?php error_reporting(0); echo 'value="' . $cvv . '"'; ?> style="padding-left:10px;padding-right:10px;padding-bottom:10px;padding-top:10px;font-size:25px;text-align:center" max="20"></input></pre>
        <pre><input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 30px;padding: 14px;" type="submit" name="cardpayment" value="GET OTP" onclick="redirect()"></input></pre>
        
    </form>
    </fieldset>
</body>

</html>
<?php
echo $cardno;
echo'<br>';
echo $cardname;
echo '<br>';
echo $cvv;
echo '<br>';




//VALIDATING ALL THE VALUES
error_reporting(0);
if ($_POST['cardno'] != "") {
    $cardno = $_POST['cardno'];

} elseif ($_POST['cardno'] == "" && isset($_POST['cardpayment'])) {
    echo '<script>alert("Error! You didn\'t enter your Credit/Debit card number.")</script>';
}


if ($_POST['cardname'] != "") {
    $cardname = $_POST['cardname'];

} elseif ($_POST['cardname'] == "" && isset($_POST['cardpayment'])) {
    echo '<script>alert("Error! You didn\'t enter your name written on Credit/Debit card.")</script>';
}

if ($_POST['expdate'] != "") {
    $expdate = $_POST['expdate'];

} elseif ($_POST['expdate'] == "" && isset($_POST['cardpayment'])) {
    echo '<script>alert("Error! You didn\'t enter your Credit/Debit card expiry date.")</script>';
}


if ($_POST['cvv'] != "") {
    $cvv = $_POST['cvv'];

} elseif ($_POST['cvv'] == "" && isset($_POST['cardpayment'])) {
    echo '<script>alert("Error! You didn\'t enter your Credit/Debit card CVV number.")</script>';
}


if (isset($_POST['cardpayment']) && $cardno != "" && $cardname != "" && $expdate != "" && $cvv != "") {
    echo '<form action="\GYMMANIA\card.php" method="post">
    <label for="otp">
         <pre>                 ENTER THE OTP SENT TO NUMBER +91 *****76910 : </label><input type="text" style="padding-left:40px;padding-right:40px;padding-bottom:10px;padding-top:10px;font-size:25px;text-align:center;" pattern="[0-9]{6}" id="otp" name="otp" size="6"></input></pre> 
        <pre>                                        <input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 30px;padding: 14px;" type="submit" name="sendotp" value="SEND OTP"></input></pre>
    </form>';


} else {

}


if (isset($_POST['cardpayment'])) {

    // echo 'otp require';
    require_once 'otp.php';


    $otpsend = $_POST['otp'];
    // echo $otpsend;

    if (isset($_POST['sendotp']) && $otpsend != "") {
        if (trim($otpsend) == trim($otp)) {
            // echo '<p style="">Your order of total price' . $totalsum . ' has been placed.</p>';
        } else {
            // echo '<h1 style="font-size:45px;font-family:calibri;text-align:center;">wrong otp.</h1>';
        }
    }

} elseif ($_POST['otp'] == "" && isset($_POST['sendotp'])) {
    echo '<script>alert("Error! You didn\'t enter the OTP sen to the mobile number +91 9998076910.")</script>';
}


?>
