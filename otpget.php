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


    echo '<form action="\GYMMANIA\upi.php" method="post">
            <label for="otp">
                <pre>ENTER THE OTP SENT TO NUMBER +91 *****76910 : </label><input type="text" style="padding-left:40px;padding-right:40px;padding-bottom:10px;padding-top:10px;font-size:25px;text-align:center;" pattern="[0-9]{6}" id="otp" name="otp" size="6"></input></pre> 
        <pre><input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" type="submit" name="sendotp" value="SEND OTP"></input></pre>
        </form>';



?>