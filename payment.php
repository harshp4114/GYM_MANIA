<!DOCTYPE html>
<html>

<head>
    <title>PAYMENT</title>
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
</head>

<body style="background-color:black;">


    <!-- ////////////////////////////////////////////////////// -->

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

    <!-- ////////////////////////////////////////////////////// -->

    <!--NAVBAR-->
    <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;">
        <li style="display:block;"><a id="a" href="gmcart.php">Return To Cart</a></li>
    </ul>



    <p style="text-align:center;font-size:45px;">PAYMENT PROCESS</p>

    <fieldset style="margin-left:20px;margin-bottom:30px;margin-right:20px;">
        <form style="text-align:center;font-size:25px" action="/GYMMANIA/payment.php" method="post">
            <label for="email">
                <pre>EMAIL ADDRESS : </label><input type="text" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" id="email" name="email" placeholder="abc@gmail.com" size=50></input>        <label for="phone">PHONE NO. : </label><input type="text" pattern="[0-9]+" id="phone" name="phone" size=20></input></pre>
                <label for="address">
                    <pre>RESIDENTIAL ADDRESS : </label><input type="text" id="address" name="address" size=99></input></pre>
                    <label style="font-size:20px;" for="pincode">
                        <pre
                            style="font-size: 25px;font-family: calibri;color: lightgrey;">PIN CODE : </label><input type="text" pattern="[0-9]{6}" id="pincode" name="pincode" size=30> </input>         <label for="paymentmethod">PAYMENT METHOD  :  </label><select style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;text-align:center;" name="paymentmethod" id="paymentmethod"><option value="UPI Payment" style="text-align:center;">UPI Payment</option><option value="Cash On Delivery" style="text-align:center;">Cash On Delivery</option></select></pre>
                        <pre><input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 8px;" type="submit" name="continuetopay" value="CONTINUE"></input></pre>
        </form>
    </fieldset>



    <?php
    // CHECKING FOR EMPTY EMAIL ADDRESS
    $flagemail = 0;
    $flagaddress = 0;
    $flagphone = 0;
    $flagpincode = 0;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST["email"])) {
            echo '<script>alert("Error! You didn\'t enter your email.")</script>';
            $flagemail = 0;
        } else {
            $email = $_POST['email'];
            $flagemail = 1;

        }
    }

    // CHECKING FOR EMPTY PHONE NUMBER
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST["phone"])) {
            echo '<script>alert("Error! You didn\'t enter your phone number.")</script>';
            $flagphone = 0;
        } else {
            $phone = $_POST['phone'];
            $flagphone = 1;
        }
    }

    // CHECKING FOR EMPTY ADDRESS
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST["address"])) {
            echo '<script>alert("Error! You didn\'t enter your residential address.")</script>';
            $flagaddress = 0;
        } else {
            $address = $_POST['address'];
            $flagaddress = 1;
        }
    }

    // CHECKING FOR EMPTY PNCODE
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST["pincode"])) {
            echo '<script>alert("Error! You didn\'t enter the pincode.")</script>';
            $flagpincode = 0;
        } else {
            $address = $_POST['pincode'];
            $flagpincode = 1;
        }
    }
    // STOPS RETURNING UNDEFINED INDEX ERROR
    error_reporting(0);

    // <!-- FOR CHECKING PAYMENT METHOD AND ADDING DATA TO THE TABLE -->
    if ($flagaddress == 1 && $flagphone == 1 && $flagpincode == 1 && $flagemail == 1) {
        $method = $_POST['paymentmethod'];
        if ($method == "UPI Payment"){
            header("Location: /GYMMANIA/upi.php");
        }elseif($method=="Cash On Delivery") {
        header("Location: /GYMMANIA/orderplaced.php");
        exit();
        }
    }

    ?>
</body>

</html>