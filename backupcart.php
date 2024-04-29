<!DOCTYPE html>
<html>

<head>
  <title>GM CART</title>
  <link rel="stylesheet" href="gmcart.css">
</head>

<body>

  <!--NAVBAR-->
  <div id="navbar">
    <ul id="navbar">
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

  //   FOR DELETING ITEM FROM THE CART
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




  if (mysqli_num_rows($result) > 0) {


    $sql = "SELECT * FROM `addtocart`";
    $result = mysqli_query($conn, $sql);

    $totalprice = 0;
    $quantitywhey = 0;




    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
      $row = mysqli_fetch_assoc($result);
      $totalprice = $totalprice + ($row['price'] * $row['quantity']);

      switch ($row['name']) {

        //WHEY PROTEIN
  
        case "Biozyme Whey Protein":
          ob_start();
          


          
          $wheysr = $row['sr no'];


          echo '
          <fieldset>
      <img style="height:400px;width:400px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;" src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
      <form action="/GYMMANIA/gmcart.php" method="post">';

          // SELECTED FLAVOUR CHANGED
          if ($row['flavour'] == "Triple Chocolate") {
            echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateflavourwhey">Flavour  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateflavourwhey" id="updateflavourwhey"><option value="Triple Chocolate" selected>Triple Chocolate</option><option value="Strawberry Cream">Strawberry Cream</option><option value="Hazelnut Chocolate">Hazelnut Chocolate</option></select>    Chosen Flavour : ' . $row['flavour'] . '</pre>';
          } elseif ($row['flavour'] == "Strawberry Cream") {
            echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateflavourwhey">Flavour  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateflavourwhey" id="updateflavourwhey"><option value="Triple Chocolate">Triple Chocolate</option><option value="Strawberry Cream" selected>Strawberry Cream</option><option value="Hazelnut Chocolate">Hazelnut Chocolate</option></select>    Chosen Flavour : ' . $row['flavour'] . '</pre>';
          } elseif ($row['flavour'] == "Hazelnut Chocolate") {
            echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateflavourwhey">Flavour  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateflavourwhey" id="updateflavourwhey"><option value="Triple Chocolate">Triple Chocolate</option><option value="Strawberry Cream">Strawberry Cream</option><option value="Hazelnut Chocolate" selected>Hazelnut Chocolate</option></select>    Chosen Flavour : ' . $row['flavour'] . '</pre>';
          }

          //SELECTED AMOUNT CHANGE
          if ($row['amount'] == "500") {
            echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateamountwhey">Amount  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateamountwhey" id="updateamountwhey" onchange="updatePricewhey()"><option value="500 g" selected>500 g</option><option value="1500 g">1500 g</option><option value="2500 g">2500 g</option></select>    Chosen Quantity : ' . $row['amount'] . ' g</pre>';
          } elseif ($row['amount'] == "1500") {
            echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateamountwhey">Amount  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateamountwhey" id="updateamountwhey" onchange="updatePricewhey()"><option value="500 g">500 g</option><option value="1500 g" selected>1500 g</option><option value="2500 g">2500 g</option></select>    Chosen Quantity : ' . $row['amount'] . ' g</pre>';
          } elseif ($row['amount'] == "2500") {
            echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateamountwhey">Amount  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateamountwhey" id="updateamountwhey" onchange="updatePricewhey()"><option value="500 g">500 g</option><option value="1500 g">1500 g</option><option value="2500 g" selected>2500 g</option></select>    Chosen Quantity : ' . $row['amount'] . ' g</pre>';
          }
          echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="updatequantitywhey">Quantity  :  </label><input type="number" placeholder="' . $row['quantity'] . '" style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatequantitywhey" id="updatequantitywhey" value="' . $row['quantity'] . '" min="1">    Chosen Quantity : ' . $row['quantity'] . '</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . number_format($row['price'] * $row['quantity'], 2) . '</pre>';
          echo '<pre>               <input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 9px;" type="submit" name="updatewhey" value="UPDATE CART"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">  </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></pre>';
          echo '</form></fieldset><br>';


          if (isset($_POST['updatewhey'])) {
            $updatewheyq = $_POST['updatequantitywhey'];
            $updatewheya = $_POST['updateamountwhey'];
            $updatewheyf = $_POST['updateflavourwhey'];
            $updatewheyp = 0;
            switch ($updatewheya) {
              case "500 g":
                $updatewheyp = 799;
                break;
              case "1500 g":
                $updatewheyp = 1799;
                break;
              case "2500 g":
                $updatewheyp = 2999;
                break;
            }



            
            $sqlupdate = "UPDATE `addtocart` SET `quantity`='$updatewheyq',`amount`='$updatewheya',`price`='$updatewheyp',`flavour`='$updatewheyf' WHERE `sr no`='$wheysr'";
            $updateresult = mysqli_query($conn, $sqlupdate);
            if ($updateresult == true) {
              ob_end_clean();
              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            } else {
              echo 'There\'s been some error.';
            }
        }
          break;

        //CREATINE MONOHYDRATE
  
        case "Creatine Monohydrate":
          ob_start();
          $creasr = $row['sr no'];


          echo '
          <fieldset>
      <img style="height:400px;width:400px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;" src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
      <form action="/GYMMANIA/gmcart.php" method="post">';

          //SELECTED FLAVOUR CHANGE
  
          if ($row['flavour'] == "Tangy Orange") {
            echo '<pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateflavourcrea">Flavour  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateflavourcrea" id="updateflavourcrea"><option value="Tangy Orange" selected>Tangy Orange</option><option value="Fruit Punch">Fruit Punch</option><option value="Blue Berry">Blue Berry</option></select>    Chosen Flavour : ' . $row['flavour'] . '</pre>';
          } elseif ($row['flavour'] == "Fruit Punch") {
            echo '<pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateflavourcrea">Flavour  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateflavourcrea" id="updateflavourcrea"><option value="Tangy Orange">Tangy Orange</option><option value="Fruit Punch" selected>Fruit Punch</option><option value="Blue Berry">Blue Berry</option></select>    Chosen Flavour : ' . $row['flavour'] . '</pre>';
          } elseif ($row['flavour'] == "Blue Berry") {
            echo '<pre
                style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateflavourcrea">Flavour  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateflavourcrea" id="updateflavourcrea"><option value="Tangy Orange">Tangy Orange</option><option value="Fruit Punch">Fruit Punch</option><option value="Blue Berry" selected>Blue Berry</option></select>    Chosen Flavour : ' . $row['flavour'] . '</pre>';
          }

          //SELECTED AMOUNT CHANGE
  
          if ($row['amount'] == 150) {
            echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateamountcrea">Amount  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateamountcrea" id="updateamountcrea" onchange="updatePricewhey()"><option value="150 g" selected>150 g</option><option value="250 g">250 g</option><option value="500 g">500 g</option></select>    Chosen Quantity : ' . $row['amount'] . ' g</pre>';
          } elseif ($row['amount'] == 250) {
            echo '<pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateamountpre">Amount  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateamountcrea" id="updateamountcrea" onchange="updatePricewhey()"><option value="150 g">150 g</option><option value="250 g" selected>250 g</option><option value="500 g">500 g</option></select>    Chosen Quantity : ' . $row['amount'] . ' g</pre>';
          } elseif ($row['amount'] == 500) {
            echo '<pre
              style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateamountcrea">Amount  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateamountcrea" id="updateamountcrea" onchange="updatePricewhey()"><option value="150 g">150 g</option><option value="250 g">250 g</option><option value="500 g" selected>500 g</option></select>    Chosen Quantity : ' . $row['amount'] . ' g</pre>';
          }

          echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="updatequantitycrea">Quantity  :  </label><input type="number" placeholder="' . $row['quantity'] . '" style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatequantitycrea" id="updatequantitycrea" value="' . $row['quantity'] . '" min="1">    Chosen Quantity : ' . $row['quantity'] . '</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . number_format($row['price'] * $row['quantity'], 2) . '</pre>';
          echo '<pre>               <input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 9px;" type="submit" name="updatecrea" value="UPDATE CART"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">  </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></pre>';
          echo '</form></fieldset><br>';



          if (isset($_POST['updatecrea'])) {
            $updatecreaq = $_POST['updatequantitycrea'];
            $updatecreaa = $_POST['updateamountcrea'];
            $updatecreaf = $_POST['updateflavourcrea'];
            $updatewheyp = 0;
            switch ($updatecreaa) {
              case "150 g":
                $updatecreap = 799;
                break;
              case "250 g":
                $updatecreap = 1499;
                break;
              case "500 g":
                $updatecreap = 2199;
                break;
            }
            $sqlupdate = "UPDATE `addtocart` SET `quantity`='$updatecreaq',`amount`='$updatecreaa',`price`='$updatecreap',`flavour`='$updatecreaf' WHERE `sr no`='$creasr'";
            $updateresult = mysqli_query($conn, $sqlupdate);
            if ($updateresult == true) {
              ob_end_clean();
              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            } else {
              echo 'there\'s been some error.';
            }
          }
          break;

        //PRE WORKOUT BLEND
  
        case "Pre-Workout Blend":
          ob_start();
          $presr = $row['sr no'];


          echo '
          <fieldset>
      <img style="height:400px;width:400px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;" src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
      <form action="/GYMMANIA/gmcart.php" method="post">';

          //SELECTED FLAVOUR CHANGE
  
          if ($row['flavour'] == "Tangy Orange") {
            echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateflavourpre">Flavour  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateflavourpre" id="updateflavourpre"><option value="Tangy Orange" selected>Tangy Orange</option><option value="Fruit Punch">Fruit Punch</option><option value="Blue Raspberry">Blue Raspberry</option></select>    Chosen Flavour : ' . $row['flavour'] . '</pre>';
          } elseif ($row['flavour'] == "Fruit Punch") {
            echo '<pre
              style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateflavourpre">Flavour  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateflavourpre" id="updateflavourpre"><option value="Tangy Orange">Tangy Orange</option><option value="Fruit Punch" selected>Fruit Punch</option><option value="Blue Raspberry">Blue Raspberry</option></select>    Chosen Flavour : ' . $row['flavour'] . '</pre>';
          } elseif ($row['flavour'] == "Blue Raspberry") {
            echo '<pre
                  style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateflavourpre">Flavour  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateflavourpre" id="updateflavourpre"><option value="Tangy Orange">Tangy Orange</option><option value="Fruit Punch">Fruit Punch</option><option value="Blue Raspberry" selected>Blue Raspberry</option></select>    Chosen Flavour : ' . $row['flavour'] . '</pre>';
          }
          //SELECTED AMOUNT CHANGE
  
          if ($row['amount'] == 150) {
            echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateamountpre">Amount  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateamountpre" id="updateamountpre" onchange="updatePricewhey()"><option value="150 g" selected>150 g</option><option value="250 g">250 g</option><option value="1000 g">1000 g</option></select>    Chosen Quantity : ' . $row['amount'] . 'g</pre>';
          } elseif ($row['amount'] == 250) {
            echo '<pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateamountpre">Amount  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateamountpre" id="updateamountpre" onchange="updatePricewhey()"><option value="150 g">150 g</option><option value="250 g" selected>250 g</option><option value="1000 g">1000 g</option></select>    Chosen Quantity : ' . $row['amount'] . 'g</pre>';
          } elseif ($row['amount'] == 1000) {
            echo '<pre
              style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateamountpre">Amount  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateamountpre" id="updateamountpre" onchange="updatePricewhey()"><option value="150 g">150 g</option><option value="250 g">250 g</option><option value="1000 g" selected>1000 g</option></select>    Chosen Quantity : ' . $row['amount'] . 'g</pre>';
          }

          echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="updatequantitypre">Quantity  :  </label><input type="number" placeholder="' . $row['quantity'] . '" style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatequantitypre" id="updatequantitypre" value="' . $row['quantity'] . '" min="1">    Chosen Quantity : ' . $row['quantity'] . '</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . number_format($row['price'] * $row['quantity'], 2) . '</pre>';
          echo '<pre>               <input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 9px;" type="submit" name="updatepre" value="UPDATE CART"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">  </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></pre>';
          echo '</form></fieldset><br>';


          if (isset($_POST['updatepre'])) {
            $updatepreq = $_POST['updatequantitypre'];
            $updateprea = $_POST['updateamountpre'];
            $updatepref = $_POST['updateflavourpre'];
            $updateprep = 0;
            switch ($updateprea) {
              case "150 g":
                $updateprep = 699;
                break;
              case "250 g":
                $updateprep = 1399;
                break;
              case "500 g":
                $updateprep = 2099;
                break;
            }
            $sqlupdate = "UPDATE `addtocart` SET `quantity`='$updatepreq',`amount`='$updateprea',`price`='$updateprep',`flavour`='$updatepref' WHERE `sr no`='$presr'";
            $updateresult = mysqli_query($conn, $sqlupdate);
            if ($updateresult == true) {
              ob_end_clean();
              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            }
          }
          break;

        // PROTEIN BARS
  
        case "Protein Bars":
          ob_start();
          $barsr = $row['sr no'];


          echo '
          <fieldset>
      <img style="height:400px;width:400px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;" src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
      <form action="/GYMMANIA/gmcart.php" method="post">';

          //SELECTED FLAVOUR CHANGE
  
          if ($row['flavour'] == "Chocolate Almond") {
            echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateflavourbar">Flavour  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateflavourbar" id="updateflavourbar"><option value="Chocolate Almond" selected>Chocolate Almond</option><option value="Cookies & Cream">Cookies & Cream</option><option value="Vanilla Coffee Almond">Vanilla Coffee Almond</option></select>    Chosen Flavour : ' . $row['flavour'] . '</pre>';
          } elseif ($row['flavour'] == "Cookies & Cream") {
            echo '<pre
              style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateflavourbar">Flavour  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateflavourbar" id="updateflavourbar"><option value="Chocolate Almond">Chocolate Almond</option><option value="Cookies & Cream" selected>Cookies & Cream</option><option value="Vanilla Coffee Almond">Vanilla Coffee Almond</option></select>    Chosen Flavour : ' . $row['flavour'] . '</pre>';
          } elseif ($row['flavour'] == "Vanilla Coffee Almond") {
            echo '<pre
                  style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateflavourbar">Flavour  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateflavourbar" id="updateflavourbar"><option value="Chocolate Almond">Chocolate Almond</option><option value="Cookies & Cream">Cookies & Cream</option><option value="Vanilla Coffee Almond" selected>Vanilla Coffee Almond</option></select>    Chosen Flavour : ' . $row['flavour'] . '</pre>';
          }
          //SELECTED AMOUNT CHANGE
  
          if ($row['amount'] == 6) {
            echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateamountbar">Amount  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateamountbar" id="updateamountbar" onchange="updatePricewhey()"><option value="6 Bars" selected>6 Bars</option><option value="12 Bars">12 Bars</option><option value="16 Bars">16 Bars</option></select>    Chosen Quantity : ' . $row['amount'] . ' Bars</pre>';
          } elseif ($row['amount'] == 12) {
            echo '<pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateamountbar">Amount  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateamountbar" id="updateamountbar" onchange="updatePricewhey()"><option value="6 Bars">6 Bars</option><option value="12 Bars" selected>12 Bars</option><option value="16 Bars">16 Bars</option></select>    Chosen Quantity : ' . $row['amount'] . ' Bars</pre>';
          } elseif ($row['amount'] == 16) {
            echo '<pre
              style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateamountbar">Amount  :  </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateamountbar" id="updateamountbar" onchange="updatePricewhey()"><option value="6 Bars">6 Bars</option><option value="12 Bars">12 Bars</option><option value="16 Bars" selected>16 Bars</option></select>    Chosen Quantity : ' . $row['amount'] . ' Bars</pre>';
          }

          echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="updatequantitybar">Quantity  :  </label><input type="number" placeholder="' . $row['quantity'] . '" style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatequantitybar" id="updatequantitybar" value="' . $row['quantity'] . '" min="1">    Chosen Quantity : ' . $row['quantity'] . '</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . number_format($row['price'] * $row['quantity'], 2) . '</pre>';
          echo '<pre>               <input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 9px;" type="submit" name="updatebar" value="UPDATE CART"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">  </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></pre>';
          echo '</form></fieldset><br>';


          if (isset($_POST['updatebar'])) {
            $updatebarq = $_POST['updatequantitybar'];
            $updatebara = $_POST['updateamountbar'];
            $updatebarf = $_POST['updateflavourbar'];
            $updatebarp = 0;
            switch ($updatebara) {
              case "6 Bars":
                $updatebarp = 699;
                break;
              case "12 Bars":
                $updatebarp = 1399;
                break;
              case "16 Bars":
                $updatebarp = 2099;
                break;
            }
            $sqlupdate = "UPDATE `addtocart` SET `quantity`='$updatebarq',`amount`='$updatebara',`price`='$updatebarp',`flavour`='$updatebarf' WHERE `sr no`='$barsr'";
            $updateresult = mysqli_query($conn, $sqlupdate);
            if ($updateresult == true) {
              ob_end_clean();
              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            }
          }
          break;

        // HEX DUMBELLS
  
        case "Hex Dumbells":
          ob_start();
          $hexsr = $row['sr no'];
          echo '<fieldset>
        <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
          src="' . $row['image'] . '">
        <pre
          style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
      <form action="/GYMMANIA/gmcart.php" method="post">';

          // TO CHANGE WEIGHT TO THE SELECTED WEIGHT
  
          if ($row['weight'] == "2.5") {
            echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateweighthex">Weight  :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateweighthex" id="updateweighthex" onclick="updatePricedum()"><option value="2.5 kg pair" selected>2.5 kg pair</option><option value="5 kg pair">5 kg pair</option><option value="7.5 kg pair">7.5 kg pair</option><option value="10 kg pair">10 kg pair</option><option value="12.5 kg pair">12.5 kg pair</option><option value="15 kg pair">15 kg pair</option><option value="17.5 kg pair">17.5 kg pair</option><option value="20 kg pair">20 kg pair</option></select>    Chosen weight : ' . $row['weight'] . ' kg pair</pre>';
          } elseif ($row['weight'] == "5") {
            echo '<pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateweighthex">Weight  :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateweighthex" id="updateweighthex" onclick="updatePricedum()"><option value="2.5 kg pair">2.5 kg pair</option><option value="5 kg pair" selected>5 kg pair</option><option value="7.5 kg pair">7.5 kg pair</option><option value="10 kg pair">10 kg pair</option><option value="12.5 kg pair">12.5 kg pair</option><option value="15 kg pair">15 kg pair</option><option value="17.5 kg pair">17.5 kg pair</option><option value="20 kg pair">20 kg pair</option></select>    Chosen weight : ' . $row['weight'] . ' kg pair</pre>';
          } elseif ($row['weight'] == "7.5") {
            echo '<pre
              style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateweighthex">Weight  :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateweighthex" id="updateweighthex" onclick="updatePricedum()"><option value="2.5 kg pair">2.5 kg pair</option><option value="5 kg pair">5 kg pair</option><option value="7.5 kg pair" selected>7.5 kg pair</option><option value="10 kg pair">10 kg pair</option><option value="12.5 kg pair">12.5 kg pair</option><option value="15 kg pair">15 kg pair</option><option value="17.5 kg pair">17.5 kg pair</option><option value="20 kg pair">20 kg pair</option></select>    Chosen weight : ' . $row['weight'] . ' kg pair</pre>';
          } elseif ($row['weight'] == "10") {
            echo '<pre
                style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateweighthex">Weight  :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateweighthex" id="updateweighthex" onclick="updatePricedum()"><option value="2.5 kg pair">2.5 kg pair</option><option value="5 kg pair">5 kg pair</option><option value="7.5 kg pair">7.5 kg pair</option><option value="10 kg pair" selected>10 kg pair</option><option value="12.5 kg pair">12.5 kg pair</option><option value="15 kg pair">15 kg pair</option><option value="17.5 kg pair">17.5 kg pair</option><option value="20 kg pair">20 kg pair</option></select>    Chosen weight : ' . $row['weight'] . ' kg pair</pre>';
          } elseif ($row['weight'] == "12.5") {
            echo '<pre
                  style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateweighthex">Weight  :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateweighthex" id="updateweighthex" onclick="updatePricedum()"><option value="2.5 kg pair">2.5 kg pair</option><option value="5 kg pair">5 kg pair</option><option value="7.5 kg pair">7.5 kg pair</option><option value="10 kg pair">10 kg pair</option><option value="12.5 kg pair" selected>12.5 kg pair</option><option value="15 kg pair">15 kg pair</option><option value="17.5 kg pair">17.5 kg pair</option><option value="20 kg pair">20 kg pair</option></select>    Chosen weight : ' . $row['weight'] . ' kg pair</pre>';
          } elseif ($row['weight'] == "15") {
            echo '<pre
                    style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateweighthex">Weight  :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateweighthex" id="updateweighthex" onclick="updatePricedum()"><option value="2.5 kg pair">2.5 kg pair</option><option value="5 kg pair">5 kg pair</option><option value="7.5 kg pair">7.5 kg pair</option><option value="10 kg pair">10 kg pair</option><option value="12.5 kg pair">12.5 kg pair</option><option value="15 kg pair" selected>15 kg pair</option><option value="17.5 kg pair">17.5 kg pair</option><option value="20 kg pair">20 kg pair</option></select>    Chosen weight : ' . $row['weight'] . ' kg pair</pre>';
          } elseif ($row['weight'] == "17.5") {
            echo '<pre
                      style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateweighthex">Weight  :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateweighthex" id="updateweighthex" onclick="updatePricedum()"><option value="2.5 kg pair">2.5 kg pair</option><option value="5 kg pair">5 kg pair</option><option value="7.5 kg pair">7.5 kg pair</option><option value="10 kg pair">10 kg pair</option><option value="12.5 kg pair">12.5 kg pair</option><option value="15 kg pair">15 kg pair</option><option value="17.5 kg pair" selected>17.5 kg pair</option><option value="20 kg pair">20 kg pair</option></select>    Chosen weight : ' . $row['weight'] . ' kg pair</pre>';
          } elseif ($row['weight'] == "20") {
            echo '<pre
                        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateweighthex">Weight  :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateweighthex" id="updateweighthex" onclick="updatePricedum()"><option value="2.5 kg pair">2.5 kg pair</option><option value="5 kg pair">5 kg pair</option><option value="7.5 kg pair">7.5 kg pair</option><option value="10 kg pair">10 kg pair</option><option value="12.5 kg pair">12.5 kg pair</option><option value="15 kg pair">15 kg pair</option><option value="17.5 kg pair">17.5 kg pair</option><option value="20 kg pair" selected>20 kg pair</option></select>    Chosen weight : ' . $row['weight'] . ' kg pair</pre>';
          }
          echo '<pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="updatequantityhex">Quantity  :  </label><input type="number" placeholder="' . $row['quantity'] . '" style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatequantityhex" id="updatequantityhex" value="' . $row['quantity'] . '" min="1">    Chosen Quantity : ' . $row['quantity'] . '</pre>
          <pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . number_format($row['price'] * $row['quantity'], 2) . '</pre>';
          echo '<pre>               <input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 9px;" type="submit" name="updatehex" value="UPDATE CART"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">  </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></pre>';
          echo '</form></fieldset><br>';


          if (isset($_POST['updatehex'])) {
            $updatehexq = $_POST['updatequantityhex'];
            $updatehexw = $_POST['updateweighthex'];
            $updatehexp = 0;
            switch ($updatehexw) {
              case "2.5 kg pair":
                $updatehexw = 2.5;
                $updatehexp = 699;
                break;
              case "5 kg pair":
                $updatehexw = 5;
                $updatehexp = 899;
                break;
              case "7.5 kg pair":
                $updatehexw = 7.5;
                $updatehexp = 1099;
                break;
              case "10 kg pair":
                $updatehexw = 10;
                $updatehexp = 1299;
                break;
              case "12.5 kg pair":
                $updatehexw = 12.5;
                $updatehexp = 1499;
                break;
              case "15 kg pair":
                $updatehexw = 15;
                $updatehexp = 1699;
                break;
              case "17.5 kg pair":
                $updatehexw = 17.5;
                $updatehexp = 1899;
                break;
              case "20 kg pair":
                $updatehexw = 20;
                $updatehexp = 2099;
                break;
            }
            $sqlupdate = "UPDATE `addtocart` SET `quantity`='$updatehexq',`weight`='$updatehexw',`price`='$updatehexp' WHERE `sr no`='$hexsr'";
            $updateresult = mysqli_query($conn, $sqlupdate);
            if ($updateresult == true) {
              ob_end_clean();
              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            }
          }


          break;


        // OLYMPIC BARBELL
  

        case "Olympic Barbell":


          ob_start();
          $olysr = $row['sr no'];
          echo '<fieldset>
      <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
        src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <form action="/GYMMANIA/gmcart.php" method="post">
        <pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="updatequantityoly">Quantity  :  </label><input type="number" placeholder="' . $row['quantity'] . '" style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatequantityoly" id="updatequantityoly" value="' . $row['quantity'] . '" min="1">    Chosen Quantity : ' . $row['quantity'] . '</pre>
        <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . number_format($row['price'] * $row['quantity'], 2) . '</pre>';
          echo '<pre>               <input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 9px;" type="submit" name="updateoly" value="UPDATE CART"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">  </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></pre>';
          echo '</form></fieldset><br>';


          if (isset($_POST['updateoly'])) {
            $updateolyq = $_POST['updatequantityoly'];
            $updateolyp = $row['price'];
            $sqlupdate = "UPDATE `addtocart` SET `quantity`='$updateolyq',`price`='$updateolyp' WHERE `sr no`='$olysr'";
            $updateresult = mysqli_query($conn, $sqlupdate);
            if ($updateresult == true) {
              ob_end_clean();
              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            }
          }

          break;


          //EZ BARBELL


        case "EZ Barbell":


          ob_start();
          $ezsr = $row['sr no'];
          echo '<fieldset>
      <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
        src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <form action="/GYMMANIA/gmcart.php" method="post">
        <pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="updatequantityez">Quantity  :  </label><input type="number" placeholder="' . $row['quantity'] . '" style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatequantityez" id="updatequantityez" value="' . $row['quantity'] . '" min="1">    Chosen Quantity : ' . $row['quantity'] . '</pre>
        <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . number_format($row['price'] * $row['quantity'], 2) . '</pre>';
          echo '<pre>               <input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 9px;" type="submit" name="updateez" value="UPDATE CART"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">  </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></pre>';
          echo '</form></fieldset><br>';


          if (isset($_POST['updateez'])) {
            $updateezq = $_POST['updatequantityez'];
            $updateezp = $row['price'];
            $sqlupdate = "UPDATE `addtocart` SET `quantity`='$updateezq',`price`='$updateezp' WHERE `sr no`='$ezsr'";
            $updateresult = mysqli_query($conn, $sqlupdate);
            if ($updateresult == true) {
              ob_end_clean();
              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            }
          }

          break;


          //WEIGHT PLATES


        case "Weight Plates":
          ob_start();
          $plasr = $row['sr no'];
          echo '<fieldset>
        <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
          src="' . $row['image'] . '">
        <pre
          style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
      <form action="/GYMMANIA/gmcart.php" method="post">';

          // TO CHANGE WEIGHT TO THE SELECTED 
          if ($row['weight'] == "2.5 kg pair") {
            echo '<pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateweightpla">Weight  :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateweightpla" id="updateweightpla" onclick="updatePricedum()"><option value="2.5 kg pair" selected>2.5 kg pair</option><option value="5 kg pair">5 kg pair</option><option value="10 kg pair">10 kg pair</option><option value="15 kg pair">15 kg pair</option><option value="20 kg pair">20 kg pair</option></select>    Chosen weight : ' . $row['weight'] . ' kg pair</pre>';
          } elseif ($row['weight'] == "5 kg pair") {
            echo '<pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateweightpla">Weight  :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateweightpla" id="updateweightpla" onclick="updatePricedum()"><option value="2.5 kg pair">2.5 kg pair</option><option value="5 kg pair" selected>5 kg pair</option><option value="10 kg pair">10 kg pair</option><option value="15 kg pair">15 kg pair</option><option value="20 kg pair">20 kg pair</option></select>    Chosen weight : ' . $row['weight'] . '</pre>';
          } elseif ($row['weight'] == "10 kg pair") {
            echo '<pre
                style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateweightpla">Weight  :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateweightpla" id="updateweightpla" onclick="updatePricedum()"><option value="2.5 kg pair">2.5 kg pair</option><option value="5 kg pair">5 kg pair</option><option value="10 kg pair" selected>10 kg pair</option><option value="15 kg pair">15 kg pair</option><option value="20 kg pair">20 kg pair</option></select>    Chosen weight : ' . $row['weight'] . '</pre>';
          } elseif ($row['weight'] == "15 kg pair") {
            echo '<pre
                    style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateweightpla">Weight  :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateweightpla" id="updateweightpla" onclick="updatePricedum()"><option value="2.5 kg pair">2.5 kg pair</option><option value="5 kg pair">5 kg pair</option><option value="10 kg pair">10 kg pair</option><option value="15 kg pair" selected>15 kg pair</option><option value="20 kg pair">20 kg pair</option></select>    Chosen weight : ' . $row['weight'] . '</pre>';
          } elseif ($row['weight'] == "20 kg pair") {
            echo '<pre
                        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updateweightpla">Weight  :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updateweightpla" id="updateweightpla" onclick="updatePricedum()"><option value="2.5 kg pair">2.5 kg pair</option><option value="5 kg pair">5 kg pair</option><option value="10 kg pair">10 kg pair</option><option value="15 kg pair">15 kg pair</option><option value="20 kg pair" selected>20 kg pair</option></select>    Chosen weight : ' . $row['weight'] . '</pre>';
          }
          echo '<pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="updatequantitypla">Quantity  :  </label><input type="number" placeholder="' . $row['quantity'] . '" style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatequantitypla" id="updatequantitypla" value="' . $row['quantity'] . '" min="1">    Chosen Quantity : ' . $row['quantity'] . '</pre>
          <pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . number_format($row['price'] * $row['quantity'], 2) . '</pre>';
          echo '<pre>               <input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 9px;" type="submit" name="updatepla" value="UPDATE CART"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">  </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></pre>';
          echo '</form></fieldset><br>';


          if (isset($_POST['updatepla'])) {
            $updateplaq = $_POST['updatequantitypla'];
            $updateplaw = $_POST['updateweightpla'];

            switch ($updateplaw) {
              case "2.5 kg pair":
                $updateplap = 699;
                break;
              case "5 kg pair":
                $updateplap = 899;
                break;
              case "10 kg pair":
                $updateplap = 1299;
                break;
              case "15 kg pair":
                $updateplap = 1699;
                break;
              case "20 kg pair":
                $updateplap = 2099;
                break;
            }
            $sqlupdate = "UPDATE `addtocart` SET `quantity`='$updateplaq',`weight`='$updateplaw',`price`='$updateplap' WHERE `sr no`='$plasr'";
            $updateresult = mysqli_query($conn, $sqlupdate);
            if ($updateresult == true) {
              ob_end_clean();
              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            }
          }

          break;


          //ADJUSTABLE BENCH


        case "Adjustable Bench":

          ob_start();
          $benchsr = $row['sr no'];
          echo '<fieldset>
      <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
        src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <form action="/GYMMANIA/gmcart.php" method="post">
        <pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="updatequantitybench">Quantity  :  </label><input type="number" placeholder="' . $row['quantity'] . '" style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatequantitybench" id="updatequantitybench" value="' . $row['quantity'] . '" min="1">    Chosen Quantity : ' . $row['quantity'] . '</pre>
        <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . number_format($row['price'] * $row['quantity'], 2) . '</pre>';
          echo '<pre>               <input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 9px;" type="submit" name="updatebench" value="UPDATE CART"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">  </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></pre>';
          echo '</form></fieldset><br>';


          if (isset($_POST['updatebench'])) {
            $updatebenchq = $_POST['updatequantitybench'];
            $updatebenchp = $row['price'];
            $sqlupdate = "UPDATE `addtocart` SET `quantity`='$updatebenchq',`price`='$updatebenchp' WHERE `sr no`='$benchsr'";
            $updateresult = mysqli_query($conn, $sqlupdate);
            if ($updateresult == true) {
              ob_end_clean();
              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            }
          }
          break;



          //LEVER BELT



        case "Lever Belt":
          ob_start();
          $leversr = $row['sr no'];
          echo '<fieldset>
      <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
        src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <form action="/GYMMANIA/gmcart.php" method="post">
        <pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="updatequantitylever">Quantity  :  </label><input type="number" placeholder="' . $row['quantity'] . '" style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatequantitylever" id="updatequantitylever" value="' . $row['quantity'] . '" min="1">    Chosen Quantity : ' . $row['quantity'] . '</pre>
        <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . number_format($row['price'] * $row['quantity'], 2) . '</pre>';
          echo '<pre>               <input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 9px;" type="submit" name="updatelever" value="UPDATE CART"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">  </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></pre>';
          echo '</form></fieldset><br>';


          if (isset($_POST['updatelever'])) {
            $updateleverq = $_POST['updatequantitylever'];
            $updateleverp = $row['price'];
            $sqlupdate = "UPDATE `addtocart` SET `quantity`='$updateleverq',`price`='$updateleverp' WHERE `sr no`='$leversr'";
            $updateresult = mysqli_query($conn, $sqlupdate);
            if ($updateresult == true) {
              ob_end_clean();
              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            }
          }
          break;


          // KNEE SLEEVES



        case "Power Knee Sleeves 7MM":
          ob_start();
          $kneesr=$row['sr no'];
          echo '<fieldset>
    <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
      src="' . $row['image'] . '">
    <pre
      style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>    ' . $row['name'] . '</b></pre>
      <form action="/GYMMANIA/gmcart.php" method="post">';
      if($row['size']=="XS"){
        echo '<pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updatesizeknee">    Size   :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatesizeknee" id="updatesizeknee"><option value="XS" selected>XS</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option></select>    Chosen size : ' . $row['size'] . '</pre>';
      }elseif($row['size']=="S"){
        echo '<pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updatesizeknee">    Size   :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatesizeknee" id="updatesizeknee"><option value="XS">XS</option><option value="S" selected>S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option></select>    Chosen size : ' . $row['size'] . '</pre>';
      }elseif($row['size']=="M"){
        echo '<pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updatesizeknee">    Size   :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatesizeknee" id="updatesizeknee"><option value="XS">XS</option><option value="S">S</option><option value="M" selected>M</option><option value="L">L</option><option value="XL">XL</option></select>    Chosen size : ' . $row['size'] . '</pre>';
      }elseif($row['size']=="L"){
        echo '<pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updatesizeknee">    Size   :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatesizeknee" id="updatesizeknee"><option value="XS">XS</option><option value="S">S</option><option value="M">M</option><option value="L" selected>L</option><option value="XL">XL</option></select>    Chosen size : ' . $row['size'] . '</pre>';
      }elseif($row['size']=="XL"){
        echo '<pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updatesizeknee">    Size   :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatesizeknee" id="updatesizeknee"><option value="XS">XS</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL" selected>XL</option></select>    Chosen size : ' . $row['size'] . '</pre>';
      }
        echo '<pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="updatequantityknee">Quantity  :  </label><input type="number" placeholder="' . $row['quantity'] . '" style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatequantityknee" id="updatequantityknee" value="' . $row['quantity'] . '" min="1">    Chosen Quantity : ' . $row['quantity'] . '</pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price'] * $row['quantity'] . '.00</pre>';
      echo '<pre>               <input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 9px;" type="submit" name="updateknee" value="UPDATE CART"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">  </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></pre>';
          echo '</form></fieldset><br>';
          

          if(isset($_POST['updateknee'])){
            $updateknees=$_POST['updatesizeknee'];
            $updatekneeq=$_POST['updatequantityknee'];
            $updatekneep = $row['price'];
            $sqlupdate = "UPDATE `addtocart` SET `quantity`='$updatekneeq',`size`='$updateknees',`price`='$updatekneep' WHERE `sr no`='$kneesr'";
            $updateresult = mysqli_query($conn, $sqlupdate);
            if ($updateresult == true) {
              ob_end_clean();
              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            }
          }
                 
          break;


          //ELBOW SLEEVES



        case "Elbow Sleeves 3MM":
          ob_start();
          $elbowsr=$row['sr no'];
          echo '<fieldset>
    <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
      src="' . $row['image'] . '">
    <pre
      style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>    ' . $row['name'] . '</b></pre>
      <form action="/GYMMANIA/gmcart.php" method="post">';
      if($row['size']=="XS"){
        echo '<pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updatesizeelbow">    Size   :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatesizeelbow" id="updatesizeelbow"><option value="XS" selected>XS</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option></select>    Chosen size : ' . $row['size'] . '</pre>';
      }elseif($row['size']=="S"){
        echo '<pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updatesizeelbow">    Size   :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatesizeelbow" id="updatesizeelbow"><option value="XS">XS</option><option value="S" selected>S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option></select>    Chosen size : ' . $row['size'] . '</pre>';
      }elseif($row['size']=="M"){
        echo '<pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updatesizeelbow">    Size   :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatesizeelbow" id="updatesizeelbow"><option value="XS">XS</option><option value="S">S</option><option value="M" selected>M</option><option value="L">L</option><option value="XL">XL</option></select>    Chosen size : ' . $row['size'] . '</pre>';
      }elseif($row['size']=="L"){
        echo '<pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updatesizeelbow">    Size   :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatesizeelbow" id="updatesizeelbow"><option value="XS">XS</option><option value="S">S</option><option value="M">M</option><option value="L" selected>L</option><option value="XL">XL</option></select>    Chosen size : ' . $row['size'] . '</pre>';
      }elseif($row['size']=="XL"){
        echo '<pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="updatesizeelbow">    Size   :   </label><select style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatesizeelbow" id="updatesizeelbow"><option value="XS">XS</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL" selected>XL</option></select>    Chosen size : ' . $row['size'] . '</pre>';
      }
        echo '<pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="updatequantityelbow">Quantity  :  </label><input type="number" placeholder="' . $row['quantity'] . '" style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatequantityelbow" id="updatequantityelbow" value="' . $row['quantity'] . '" min="1">    Chosen Quantity : ' . $row['quantity'] . '</pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . $row['price'] * $row['quantity'] . '.00</pre>';
      echo '<pre>               <input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 9px;" type="submit" name="updateelbow" value="UPDATE CART"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">  </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></pre>';
          echo '</form></fieldset><br>';
          

          if(isset($_POST['updateelbow'])){
            $updateelbows=$_POST['updatesizeelbow'];
            $updateelbowq=$_POST['updatequantityelbow'];
            $updateelbowp = $row['price'];
            $sqlupdate = "UPDATE `addtocart` SET `quantity`='$updateelbowq',`size`='$updateelbows',`price`='$updateelbowp' WHERE `sr no`='$elbowsr'";
            $updateresult = mysqli_query($conn, $sqlupdate);
            if ($updateresult == true) {
              ob_end_clean();
              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            }
          }
          
          break;


          
          //DEADLIFT STRAPS
                    

        case "Deadlift Straps":

          ob_start();
          $deadliftsr = $row['sr no'];
          echo '<fieldset>
      <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
        src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <form action="/GYMMANIA/gmcart.php" method="post">
        <pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="updatequantitydeadlift">Quantity  :  </label><input type="number" placeholder="' . $row['quantity'] . '" style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatequantitydeadlift" id="updatequantitydeadlift" value="' . $row['quantity'] . '" min="1">    Chosen Quantity : ' . $row['quantity'] . '</pre>
        <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . number_format($row['price'] * $row['quantity'], 2) . '</pre>';
          echo '<pre>               <input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 9px;" type="submit" name="updatedeadlift" value="UPDATE CART"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">  </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></pre>';
          echo '</form></fieldset><br>';


          if (isset($_POST['updatedeadlift'])) {
            $updatedeadliftq = $_POST['updatequantitydeadlift'];
            $updatedeadliftp = $row['price'];
            $sqlupdate = "UPDATE `addtocart` SET `quantity`='$updatedeadliftq',`price`='$updatedeadliftp' WHERE `sr no`='$deadliftsr'";
            $updateresult = mysqli_query($conn, $sqlupdate);
            if ($updateresult == true) {
              ob_end_clean();
              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            }
          }

          break;

        case "Wrist Support Straps":
          ob_start();
          $wristsr = $row['sr no'];
          echo '<fieldset>
      <img style="width: 400px;height: 350px;margin-left: 20px;margin-top: 20px;margin-bottom: 20px;float: left;"
        src="' . $row['image'] . '">
      <pre
        style="font-size: 30px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;"><b>     ' . $row['name'] . '</b></pre>
        <form action="/GYMMANIA/gmcart.php" method="post">
        <pre
            style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="updatequantitywrist">Quantity  :  </label><input type="number" placeholder="' . $row['quantity'] . '" style="padding: 10px;font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;" name="updatequantitywrist" id="updatequantitywrist" value="' . $row['quantity'] . '" min="1">    Chosen Quantity : ' . $row['quantity'] . '</pre>
        <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. ' . number_format($row['price'] * $row['quantity'], 2) . '</pre>';
          echo '<pre>               <input style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 9px;" type="submit" name="updatewrist" value="UPDATE CART"><input type="hidden" name="idwhey" value="' . $row['sr no'] . '">  </input><input type="submit" style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif;font-size: 20px;padding: 8px;" name="deletewhey" id="deletewhey" value="DELETE"></input></pre>';
          echo '</form></fieldset><br>';


          if (isset($_POST['updatewrist'])) {
            $updatewristq = $_POST['updatequantitywrist'];
            $updatewristp = $row['price'];
            $sqlupdate = "UPDATE `addtocart` SET `quantity`='$updatewristq',`price`='$updatewristp' WHERE `sr no`='$wristsr'";
            $updateresult = mysqli_query($conn, $sqlupdate);
            if ($updateresult == true) {
              ob_end_clean();
              header("Location: " . $_SERVER['PHP_SELF']);
              exit();
            }
          }
          break;


      }

    }
    echo '<hr><br><pre style="font-size: 35px;font-family: Helvetica;color: lightgrey;text-align:center;">TOTAL PRICE : Rs. ' . number_format($totalprice) . '.00</pre><br><br>';



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