<html>

<head>
    <title>MEMBERSHIP FORM</title>
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
#navbar {
    list-style-type: none;
	margin: 0;
	padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  

  #navbarname{
	font-size:30px;
    float: left;     
    text-decoration: none;
    display: block;
    font-family: sans-serif;
	color:rgb(42, 230, 61);
	text-align: center;
	padding: 14px 16px;
    margin-right: 30px;
    margin-left: 10px;
  }

  #navbarother{
	font-size:30px;
    float: left;
    display: block;
    color: lightgrey;
    text-align: center;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  #navbar a:hover {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background-color: #111;
    opacity: 0.7;
  }
  
  #navbar a.active {
    background-color: #04AA6D;
    color: white;
  }
  html {
	scroll-behavior: smooth;
}

</style>

<!--NAVBAR-->
<div id="navbar">
    <ul id="navbar">
      <li id="navbarname" href="">GYM MANIA</li>
      <a id="navbarother" href="hw1project.php">Home</a>
      <a id="navbarother" href="hw1project.php#supp">Supplements</a>
      <a id="navbarother" href="hw1project.php#equip">Equipments</a>
      <a id="navbarother" href="hw1project.php#gears">Gears</a>
      <a id="navbarother" href="gmcart.php">Cart</a>
      <a id="navbarother" href="hw1project.php#contact">Contact</a>
    </ul>
  </div>

  <script>
    window.onscroll = function () { myFunction() };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script>

  <br>


    <br>
    <p style="text-align:center;font-size:45px;">GYM MEMBERSHIP FORM</p>
<br>
    <fieldset style="margin-left:20px;margin-bottom:30px;margin-right:20px;">
        <form style="text-align:center;font-size:20px" action="/GYMMANIA/membership.php" method="post">
        <label for="fname"><pre>FIRST NAME : </label><input type="text" pattern="[A-Za-z]+" id="fname" name="fname" size=40></input>     <label for="lname">LAST NAME : </label><input type="text" pattern="[A-Za-z]+" id="lname" name="lname" size=40></input></pre>
        <label for="dob"><pre>DATE OF BIRTH : </label><input type="text" pattern="[0-9/]+" id="dob" name="dob" placeholder="dd/mm/yyyy" size="30"></input>        <label for="doj">DATE OF JOINING : </label><input type="text" pattern="[0-9/]+" placeholder="dd/mm/yyyy" id="doj" name="doj" size="30"></input></pre>
        <label for="email"><pre>EMAIL ADDRESS : </label><input type="text" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" id="email" name="email" placeholder="abc@gmail.com" size=50></input>        <label for="phone">PHONE NO. : </label><input type="text" pattern="[0-9]+" id="phone" name="phone" size=20></input></pre>
        <label for="address"><pre>RESIDENTIAL ADDRESS : </label><input type="text" id="address" name="address" size=99></input></pre>
        <label for="pincode"><pre>PIN CODE : </label><input type="text" pattern="[0-9]{6}" id="pincode" name="pincode" size=30>                                                     </input></pre>
        <label for="duration"><pre>DURATION / PRICE : </label><select style="padding-right: 10px;padding-top:2px;padding-bottom:2px;padding-left:10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 19px;" name="duration" id="duration" onchange="updatePricewhey()"><option value="3 months">3 months / Rs. 5999</option><option value="6 months">6 months / Rs. 6999</option><option value="8 months">8 months / Rs. 8999</option><option value="12 months">12 months / Rs. 11999</option></select>
        <pre><input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 8px;" type="submit" name="submitmember" value="SUBMIT"></input>  <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 8px;" type="reset" id="reset" value="RESET"></input><label for="reset"></label>  <a style="diplay:block;background-color:white;font-size:21px;text-decoration:none;color:black;padding:8px;" href="membervalidity.php">MEMBERSHIP VALIDITY</input></a> </pre>
      </form>
    </fieldset>
</body>

</html>



<!-- ////////////////////////////////////////////////////////// -->

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
    //    echo "hello bello";
    }


    



    // INSERTING DATA INTO DATABASE WHEN SUBMIT IS CLICKED
    
    // CHECKING FOR EMPTY NAME 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (empty ($_POST["fname"] ) || empty ($_POST["lname"])) {  
                 echo '<script>alert("Error! You didn\'t enter your name.")</script>';  
    }else {  
      $fname = $_POST['fname']; 
      $lname = $_POST['lname']; 
    }  
  }
         // CHECKING FOR EMPTY DOB/DOJ 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (empty ($_POST["dob"] ) || empty ($_POST["doj"])) {  
                 echo '<script>alert("Error! You didn\'t enter the date.")</script>';  
    }else {  
      $dob = $_POST['dob']; 
      $doj = $_POST['doj']; 
    }  
  }
         // CHECKING FOR EMPTY EMAIL ADDRESS


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty ($_POST["email"] )) {  
               echo '<script>alert("Error! You didn\'t enter your email.")</script>';  
  }else {  
    $email=$_POST['email'];
    }  
}

         // CHECKING FOR EMPTY PHONE NUMBER


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty ($_POST["phone"] )) {  
             echo '<script>alert("Error! You didn\'t enter your phone number.")</script>';  
}else {  
  $phone=$_POST['phone'];
  }  
}

         // CHECKING FOR EMPTY ADDRESS


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty ($_POST["address"] )) {  
             echo '<script>alert("Error! You didn\'t enter your residential address.")</script>';  
}else {  
  $address=$_POST['address'];
  }  
}

         // CHECKING FOR EMPTY PNCODE


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty ($_POST["pincode"] )) {  
             echo '<script>alert("Error! You didn\'t enter the pincode.")</script>';  
}else {  
  $pincode=$_POST['pincode'];
  }  
}
     
      
      $duration = $_POST['duration'];
    
      switch ($duration) {
        case "3 months":
          $price = 5999;
          break;
        case "6 months":
          $price = 6999;
          break;
          case "8 months":
            $price = 8999;
            break;
        case "12 months":
            $price = 11999;
            break;
      }
      
      if($fname==null || $lname==null || $email==null || $address==null){

      }else{

        $sqldata = "INSERT INTO `memberdata`(`fname`,`lname`,`dob`,`doj`,`email`,`phone`,`address`,`pincode`,`duration`,`price`) VALUES('$fname','$lname','$dob','$doj','$email','$phone','$address','$pincode','$duration','$price')";
        $result = mysqli_query($conn, $sqldata);
        if ($result == TRUE) {

        //   echo "Data added sucessfully.";
        } else {
          echo "There's been some error.Data not added sucessfully. We apologize for the inconvinience.";
        }
    }
      
    
    ?>

    <!-- ////////////////////////////////////////////////////////// -->

    
    
    