<!DOCTYPE html>
<html>

<head>
  <title>GM CART</title>
  <link rel="stylesheet" href="gmcart.css">
</head>

<body>

  <!--NAVBAR-->
  <div id="navbar">    <ul id="navbar">
      <li id="navbarname" href="">GYM MANIA</li>
      <a id="navbarother" href="hw1project.php">Home</a>
      <a id="navbarother" href="hw1project.php#supp">Supplements</a>
      <a id="navbarother" href="hw1project.php#equip">Equipments</a>
      <a id="navbarother" href="hw1project.php#gears">Gears</a>
      <a id="navbarother" href="membership.php">Membership</a>
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

  <!-- //////////////////////////////////////////////////////////// -->


  <!-- SHOPPING CART -->
  <fieldset>
    <h1
      style="font-size: 40px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;text-align: center;">
      SHOPPING CART</h1>
  </fieldset>
  <br>
  <h1 style="font-family:calibri;font-size:30px;text-align:center;">No. of items present in cart :
    <?php echo mysqli_num_rows($result); ?>
  </h1>

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

//   FOR WHEY PROTEIN
if (isset($_POST['deletewhey'])) {
  // echo 'whey delete.';
  $id_item = $_POST['idwhey'];

  $sqldelete = "DELETE FROM `addtocart` WHERE `sr no`='$id_item'";
  $resultdel = mysqli_query($conn, $sqldelete);
  if ($resultdel == true) {
    header("Refresh:0");
    // echo 'item deleted sucessfully.';
  } else {
    echo 'item not deleted';
  }
} 

// //   FOR CREATINE
// if (isset($_POST['deletewhey'])) {
//   // echo 'whey delete.';
//   $id_item = $_POST['idwhey'];

//   $sqldelete = "DELETE FROM `addtocart` WHERE `sr no`='$id_item'";
//   $resultdel = mysqli_query($conn, $sqldelete);
//   if ($resultdel == true) {
//     header("Refresh:0");
//     // echo 'item deleted sucessfully.';
//   } else {
//     echo 'item not deleted';
//   }
// } 

// //   FOR PRE WORKOUT
// if (isset($_POST['deletewhey'])) {
//   // echo 'whey delete.';
//   $id_item = $_POST['idwhey'];

//   $sqldelete = "DELETE FROM `addtocart` WHERE `sr no`='$id_item'";
//   $resultdel = mysqli_query($conn, $sqldelete);
//   if ($resultdel == true) {
//     header("Refresh:0");
//     // echo 'item deleted sucessfully.';
//   } else {
//     echo 'item not deleted';
//   }
// } 

// //   FOR PROTEIN BARS
// if (isset($_POST['deletewhey'])) {
//   // echo 'whey delete.';
//   $id_item = $_POST['idwhey'];

//   $sqldelete = "DELETE FROM `addtocart` WHERE `sr no`='$id_item'";
//   $resultdel = mysqli_query($conn, $sqldelete);
//   if ($resultdel == true) {
//     header("Refresh:0");
//     // echo 'item deleted sucessfully.';
//   } else {
//     echo 'item not deleted';
//   }
// } 

// //   FOR 
// if (isset($_POST['deletewhey'])) {
//   // echo 'whey delete.';
//   $id_item = $_POST['idwhey'];

//   $sqldelete = "DELETE FROM `addtocart` WHERE `sr no`='$id_item'";
//   $resultdel = mysqli_query($conn, $sqldelete);
//   if ($resultdel == true) {
//     header("Refresh:0");
//     // echo 'item deleted sucessfully.';
//   } else {
//     echo 'item not deleted';
//   }
// } 

  if (mysqli_num_rows($result) > 0) {


    $sql = "SELECT * FROM `addtocart`";
    $result = mysqli_query($conn, $sql);

$totalprice=0;


    


    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
      $row = mysqli_fetch_assoc($result);
      $totalprice=$totalprice+($row['price']*$row['quantity']);
      switch ($row['name']) {
        case "Biozyme Whey Protein":
          echo '
          <fieldset>
      <img style="height:400px;width:400px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;" src="https://static.thcdn.com/productimg/1600/1600/13225839-1064934874162534.jpg">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      Flavour  :  ' . $row['flavour'] . '</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      Amount  :  ' . $row['amount'] . 'g</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Quantity  :  ' . $row['quantity'] . '</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price']*$row['quantity'] . '.00</pre>';
          echo '<pre><form action="/GYMMANIA/gmcart.php" method="post"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">       </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></form></pre>';
          echo '</fieldset><br>';
          break;

        case "Creatine Monohydrate":
          echo '
          <fieldset>
      <img style="height:400px;width:400px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;" src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      Flavour  :  ' . $row['flavour'] . '</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      Amount  :  ' . $row['amount'] . 'g</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Quantity  :  ' . $row['quantity'] . '</pre>
        <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price']*$row['quantity'] . '.00</pre>';
        echo '<pre><form action="/GYMMANIA/gmcart.php" method="post"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">       </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></form></pre>';
        echo '</fieldset><br>';
          break;

        case "Pre-Workout Blend":
          echo '
          <fieldset>
      <img style="height:400px;width:400px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;" src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      Flavour  :  ' . $row['flavour'] . '</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      Amount  :  ' . $row['amount'] . 'g</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Quantity  :  ' . $row['quantity'] . '</pre>
        <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price']*$row['quantity'] . '.00</pre>';
        echo '<pre><form action="/GYMMANIA/gmcart.php" method="post"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">       </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></form></pre>';
        echo '</fieldset><br>';
          break;

        case "Protein Bars":
          echo '
          <fieldset>
      <img style="height:400px;width:400px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;" src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      Flavour  :  ' . $row['flavour'] . '</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      Amount  :  ' . $row['amount'] . ' bars</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Quantity  :  ' . $row['quantity'] . '</pre>
        <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price']*$row['quantity'] . '.00</pre>';
        echo '<pre><form action="/GYMMANIA/gmcart.php" method="post"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">       </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></form></pre>';
        echo '</fieldset><br>';
          break;

        case "Hex Dumbells":
          echo '<fieldset>
      <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
        src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      Weight  :   ' . $row['weight'] . '</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Quantity  :  ' . $row['quantity'] . '</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price']*$row['quantity'] . '.00</pre>';
        echo '<pre><form action="/GYMMANIA/gmcart.php" method="post"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">       </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></form></pre>';
        echo '</fieldset><br>';
        break;

        case "Olympic Barbell":
          echo '<fieldset>
      <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
        src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Quantity  :  ' . $row['quantity'] . '</pre>
        <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price']*$row['quantity'] . '.00</pre>';
        echo '<pre><form action="/GYMMANIA/gmcart.php" method="post"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">       </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></form></pre>';
        echo '</fieldset><br>';
          break;

        case "EZ Barbell":
          echo '<fieldset>
      <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
        src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Quantity  :  ' . $row['quantity'] . '</pre>
        <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price']*$row['quantity'] . '.00</pre>';
        echo '<pre><form action="/GYMMANIA/gmcart.php" method="post"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">       </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></form></pre>';
        echo '</fieldset><br>';
          break;
        
        case "Weight Plates":
          echo '<fieldset>
      <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
        src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      Weight  :   ' . $row['weight'] . '</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Quantity  :  ' . $row['quantity'] . '</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price'] . '.00</pre>';
        echo '<pre><form action="/GYMMANIA/gmcart.php" method="post"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">       </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></form></pre>';
        echo '</fieldset><br>';
          break;

        case "Adjustable Bench":
          echo '<fieldset>
      <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
        src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Quantity  :  ' . $row['quantity'] . '</pre>
        <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price']*$row['quantity'] . '.00</pre>';
        echo '<pre><form action="/GYMMANIA/gmcart.php" method="post"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">       </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></form></pre>';
        echo '</fieldset><br>';
        break;

        case "Lever Belt":
          echo '<fieldset>
      <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
        src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Quantity  :  ' . $row['quantity'] . '</pre>
        <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price']*$row['quantity'] . '.00</pre>';
        echo '<pre><form action="/GYMMANIA/gmcart.php" method="post"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">       </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></form></pre>';
        echo '</fieldset><br>';
        break;

        case "Power Knee Sleeves 7MM":
          echo '<fieldset>
    <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
      src="' . $row['image'] . '">
    <pre
      style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>    ' . $row['name'] . '</b></pre>
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Size   :   ' . $row['size'] . '</pre>
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Quantity  :  ' . $row['quantity'] . '</pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price']*$row['quantity'] . '.00</pre>';
      echo '<pre><form action="/GYMMANIA/gmcart.php" method="post"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">       </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></form></pre>';
      echo '</fieldset><br>';
      break;

        case "Elbow Sleeves 3MM":
          echo '<fieldset>
    <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
      src="' . $row['image'] . '">
    <pre
      style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>    ' . $row['name'] . '</b></pre>
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Size   :   ' . $row['size'] . '</pre>
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Quantity  :  ' . $row['quantity'] . '</pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price']*$row['quantity'] . '.00';
      echo '<pre><form action="/GYMMANIA/gmcart.php" method="post"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">       </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></form></pre>';
      echo '</fieldset><br>';
      break;

        case "Deadlift Straps":
          echo '<fieldset>
      <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
        src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Quantity  :  ' . $row['quantity'] . '</pre>
        <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price']*$row['quantity'] . '.00</pre>';
        echo '<pre><form action="/GYMMANIA/gmcart.php" method="post"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">       </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></form></pre>';
        echo '</fieldset><br>';
        break;

        case "Wrist Support Straps":
          echo '<fieldset>
      <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
        src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Quantity  :  ' . $row['quantity'] . '</pre>
        <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price']*$row['quantity'] . '.00</pre>';
        echo '<pre><form action="/GYMMANIA/gmcart.php" method="post"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">       </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></form></pre>';
        echo '</fieldset><br>';
        break;


      }
      
    }
    echo '<hr><br><pre style="font-size: 35px;font-family: Helvetica;color: lightgrey;text-align:center;">TOTAL PRICE : Rs. '.$totalprice.'.00</pre><br><br>';



  } else {


    echo '
  <p style="color: black;text-align: center;">p<img style="width: 200px;height: 200px;border-radius: 100px;" src="https://thumbs.dreamstime.com/b/shopping-icon-shopping-cart-icon-dark-background-simple-vector-icon-shopping-icon-shopping-cart-icon-dark-background-116659167.jpg">p</p>
  <h1 style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;text-align: center;">Hey, It feels so light!</h1>
  <h1 style="font-size: 20px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;text-align: center;">There is nothing in your cart. Let\'s add some items.</h1>
  <br>
  <p style="font-family:\'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif; color: black;text-align: center;"><button style="background-color:lighthrey; border: none; color:black; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 25px;" type="button"><b><a style="text-decoration: none; color:black" href="hw1project.php">Go Shopping</a></b></button></p>';


  }

  ?>



</body>

</html>