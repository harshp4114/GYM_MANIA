<!-- MEMBERSHIP VALIDITY -->
<html>

<head>
    <title>MEMBERSHIP VALIDITY</title>
</head>

<body>

    <style>
        body {
            background-color: black;
            color: lightgrey;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 30px;
        }

        /* NAVBAR */
        #a{
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
    <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #333;">
        <li style="display:block;"><a id="a" href="membership.php">Return To Membership Form</a></li>
    </ul>
    <br>

    <p style="text-align:center;font-size:45px;">MEMBERSHIP VAILIDITY</p>

    <br>
    <fieldset>
        <form style="text-align:center;font-size:20px" action="/GYMMANIA/membervalidity.php" method="post">
                <label for="emailcheck">
                    <pre>PLEASE ENTER THE EMAIL WITH WHICH YOU HAVE REGISTERED.  : </label><input type="text" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" id="emailcheck" name="emailcheck" placeholder="abc@gmail.com" size=50></input></pre>
                    <pre><input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 8px;" type="submit" name="submitcheck" value="SUBMIT"></input>  <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 8px;" type="reset" id="resetcheck" value="RESET"></input><label for="resetcheck"></label></pre>
        </form>

        <!-- CHECKING FOR A MEMBERSHIP WITH THE SAME DETAILS -->
        <?php
        // STOPS RETURNING UNDEFINED INDEX ERROR
        error_reporting(0);


        // CONNECTING TO THE DATABASE 
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "membership";


        //attempt to connect to database
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        //checking if connection is established or not
        
        if ($conn == false) {
            echo "Connection Unsucessful." . "Error : " . mysqli_connect_error();
        } else {
            // echo "hello bello";
        }



        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $fnamecheck = $_POST['fnamecheck'];
            $lnamecheck = $_POST['lnamecheck'];
            $emailcheck = $_POST['emailcheck'];
            $phonecheck = $_POST['phonecheck'];
        
            $sqlcheck = "SELECT * FROM `memberdata` WHERE `email`='$emailcheck'";
            $resultcheck = mysqli_query($conn, $sqlcheck);
            $datacheck = mysqli_fetch_assoc($resultcheck);
            
            $numrow = mysqli_num_rows($resultcheck);
            if ($numrow == 1) {
                $data = mysqli_fetch_assoc($resultcheck);
                echo '<p style="text-align:center;font-size:35px;">DETAILS OF YOUR MEMBERSHIP PLAN :</p>';
                echo '<p style="text-align:center;font-size:25px;">FIRST NAME : ' . $datacheck['fname'];
                echo '<p style="text-align:center;font-size:25px;">LAST NAME : ' . $datacheck['lname'];
                echo '<p style="text-align:center;font-size:25px;">EMAIL : ' . $datacheck['email'];
                echo '<p style="text-align:center;font-size:25px;">PHONE NO. : ' . $datacheck['phone'];
                echo '<p style="text-align:center;font-size:25px;">DURATION OF YOUR PLAN : ' . $datacheck['duration'];
                echo '<p style="text-align:center;font-size:25px;">DATE OF JOINING : ' . $datacheck['doj'];

            } else {
                echo "<br>";
                echo '<p style="text-align:center;font-size:25px;">YOU DON\'T HAVE ANY MEMBIRSHIP PLAN CURRENTLY.</p>';
                echo '<p style="text-align:center;font-size:25px;">FILL UP THE ABOVE FORM TO BECOME A MEMBER OF GYM MANIA.</p>';
            }


        }
        ?>
    </fieldset>
</body>

</html>