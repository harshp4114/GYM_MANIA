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
session_start();
$sqlfetchtotal = "SELECT * FROM `total`";
        $fetchtotalresult = mysqli_query($conn, $sqlfetchtotal);
        if ($fetchtotalresult == true) {
        }
        // echo'present';
        else {
            echo 'There has been some error.';
        }
        $fetchtotal = mysqli_fetch_assoc($fetchtotalresult);
        $totalsum = $fetchtotal['totalprice'];


        $currentDate = date('d-m-Y'); // Get today's date

$futureDate = date('d-m-Y', strtotime($currentDate . ' + 5 days')); // Add 5 days to the current date

?>






<html>
    <head>
        <title>ORDER PLACED</title>
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
</head>
<body style="background-color:black;font-size:50px;text-align:center;color:lightgrey;font-family:calibri;">
<!--NAVBAR-->
<ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;">
        <li style="display:block;"><a id="a" href="gmcart.php">Return To Cart</a></li>
    </ul>



<p style="font-size:60px"><b>CONGRATULATIONS!!!</b></p>
<p>Your order has been placed for a total amount of Rs. <?php echo number_format($totalsum);?></p>
<p>Your order will be delivered on <?php echo $futureDate;?></p>
<?php 
    $sqlemptycart="TRUNCATE `addtocart`";
    $resultcartempty=mysqli_query($conn,$sqlemptycart);
    $sqlemptycart="TRUNCATE `total`";
    $resultcartempty=mysqli_query($conn,$sqlemptycart);
?>
</body>
</html>