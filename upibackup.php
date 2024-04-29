<html>

<head>
    <title>UPI PAYMENT</title>
    <style>
        body {
            background-color: black;
            color: lightgrey;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 30px;
        }

        #a {
            display: block;
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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
</head>

<body style="background-color:black;">

    <?php


    // CONNECTING TO THE DATABASE 
    
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
        // echo "hello bello";
    }


    error_reporting(0);
    if ($_POST['phone'] != "") {
        $phone = $_POST['phone'];

    } elseif ($_POST['phone'] == "" && isset($_POST['upipayment'])) {
        echo '<script>alert("Error! You didn\'t enter your phone number.")</script>';
    }
    ?>

    <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;">
        <li style="display:block;"><a id="a" href="payment.php">Return To Payment</a></li>
    </ul>
    <p style="font-size:45px;font-family:calibri;text-align:center;color:lightgrey;"><b>PAYMENT PROCEDURE -- 1</b></p>
    <fieldset style="margin-left:20px;margin-bottom:30px;margin-right:20px;text-align:center;">
        <form action="\GYMMANIA\upi.php" method="post">
            <label for="phone">
                <pre>ENTER YOUR PHONE NUMBER LINKED WITH UPI : </label><input type="text" style="padding-left:40px;padding-right:40px;padding-bottom:10px;padding-top:10px;font-size:25px;text-align:center;" pattern="[0-9]+" id="phone" <?php error_reporting(0);
                echo 'value="' . $phone . '"'; ?> name="phone" size=10></input></pre>
                <pre><input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 8px;" type="submit" name="upipayment" value="GET OTP" onclick="redirect()"></input></pre>
        </form>



        <?php

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
            // echo "hello bello";
        }
        session_start();
        // echo $otp;
        
        $_SESSION['phone'] = $_POST['phone'];
        if (isset($_POST['upipayment']) && $phone != "" && (bool) $_SESSION['otpflagcheck']) {
            echo '<p style="font-size:45px;font-family:calibri;text-align:center;"><b>OTP sent successfully to ' . $_SESSION['twphone'] . '</b></p>';

            echo '<form action="\GYMMANIA\upi.php" method="post">
            <label for="otp">
                 <pre>ENTER THE OTP SENT TO NUMBER +91 *****76910 : </label><input type="text" style="padding-left:40px;padding-right:40px;padding-bottom:10px;padding-top:10px;font-size:25px;text-align:center;" pattern="[0-9]{6}" id="otp" name="otp" size="6"></input></pre> 
                <pre><input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" type="submit" name="sendotp" value="SEND OTP"></input></pre>
            </form>';


        } else {

        }
        if (isset($_POST['upipayment'])) {

            require_once 'otp.php';

            $otpsend = (int) $_POST['otp'];
            $otptw = (int) $_SESSION['otpgot'];
            $_SESSION['otpsend'] = (int) $_POST['otp'];
            $flag=true;
            

            $flag=true;

        } elseif ($_POST['otp'] == "" && isset($_POST['sendotp'])) {
            echo '<script>alert("Error! You didn\'t enter the OTP send to the mobile number +91 9998076910.")</script>';
        }

        echo '</fieldset>';

        ?>
        <script>
            // Function to redirect to a different page
            function redirectToPage(url) {
                window.location.href = 'orderplaced.php';
            }

            <?php
            if (isset($_POST['sendotp'])) {
                // Check if OTP matches
                if ($flag) {
                    // Redirect to orderplaced.php
                    echo 'redirectToPage("orderplaced.php");';
                } else {
                    // Display an error message if OTP is wrong
                    echo 'alert("Wrong OTP. Please enter the correct OTP.");';
                }
            }
            ?>
        </script>


</body>

</html>