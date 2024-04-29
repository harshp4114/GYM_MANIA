<html>

<head>
  <title>GYM MANIA</title>
  <link rel="stylesheet" href="hw1project.css">

  <!--SLIDESHOW CSS-->
  <style>
    .carousel-container {
      position: relative;
      align: center;
      display: block;
      margin-left: auto;
      margin-right: auto;
      margin-top: 100px;
      margin-bottom: 100px;
      width: 1200px;
      height: 600px;
      overflow: hidden;
      image-rendering: smooth;
    }

    .carousel-item {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .carousel-item.active {
      opacity: 1;
    }

    .carousel-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 30px;
      height: 30px;
      background-color: rgba(0, 0, 0, 0.3);
      border-radius: 50%;
      color: #fff;
      font-size: 20px;
      text-align: center;
      line-height: 30px;
      cursor: pointer;
    }

    .carousel-prev {
      left: 20px;
    }

    .carousel-next {
      right: 20px;
    }
  </style>


</head>

<body>


  <!--NAVBAR-->
  <div id="navbar">
    <ul id="navbar">
      <li id="navbarname" href="">GYM MANIA</li>
      <a id="navbarother" href="#supp">Supplements</a>
      <a id="navbarother" href="#equip">Equipments</a>
      <a id="navbarother" href="#gears">Gears</a>
      <a id="navbarother" href="gmcart.php">Cart</a>
      <a id="navbarother" href="membership.php">Membership</a>
      <a id="navbarother" href="#contact">Contact</a>
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

  <!--SLIDE SHOW-->
  <div class="carousel-container">
    <a href="#supp"><img class="carousel-item active" src="https://img4.hkrtcdn.com/11792/bnr_1179153_o.jpg"></a>
    <a href="#equip"><img class="carousel-item"
        src="https://stfitnessequipments.com/wp-content/uploads/2020/06/fitness-accecories-shop-banner-trivandrum02.jpg"></a>
    <a href="membership.php"><img class="carousel-item" style="image-rendering:smooth;"
        src="https://img.freepik.com/premium-psd/gym-fitness-flyer-horizontal-banner-social-media-post-facebook-cover-banner-template_484627-116.jpg?w=1380"></a>


    <div class="carousel-button carousel-prev">&lt;</div>
    <div class="carousel-button carousel-next">&gt;</div>
  </div>
  <script>
    const carouselItems = document.querySelectorAll('.carousel-item');
    let currentIndex = 0;

    function showItem(index) {
      carouselItems[currentIndex].classList.remove('active');
      carouselItems[index].classList.add('active');
      currentIndex = index;
    }

    document.querySelector('.carousel-prev').addEventListener('click', () => {
      const newIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
      showItem(newIndex);
    });
    document.querySelector('.carousel-next').addEventListener('click', () => {
      const newIndex = (currentIndex + 1) % carouselItems.length;
      showItem(newIndex);
    });

    // // Optional: Auto-rotate the carousel
    // setInterval(() => {
    //   const newIndex = (currentIndex + 1) % carouselItems.length;
    //   showItem(newIndex);
    // }, 4000);
  </script>

  <!-- GYM SUPPLEMENTS -->

  <p id="supp" style="color:black" ;>p</p>
  <br>
  <br>
  <br>
  <br>
  <h1
    style="text-align: center;font-size: 50px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    GYM SUPPLEMENTS</h1>
  <br><br>
  <ul>
    <h2 style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
      <li>WHEY PROTEIN :</li>
    </h2>

    <!-- WHEY PROTEIN -->





    <fieldset>
      <img id="whey" src="https://static.thcdn.com/productimg/1600/1600/13225839-1064934874162534.jpg">
      <pre
        style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>     Biozyme Whey Protein</b></pre>
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      One of the purest whey protein powders available, with 90% protein content.</pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      Vegetarian, Gluten free</pre>
      <form action="/GYMMANIA/hw1project.php" method="post">
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="flavourwhey">Flavour  :  </label><select style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="flavourwhey" id="flavourwhey"><option value="Triple Chocolate">Triple Chocolate</option><option value="Strawberry Cream">Strawberry Cream</option><option value="Hazelnut Chocolate">Hazelnut Chocolate</option></select></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="amountwhey">Amount  :  </label><select style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="amountwhey" id="amountwhey" onchange="updatePricewhey()"><option value="500 g">500 g</option><option value="1500 g">1500 g</option><option value="2500 g">2500 g</option></select></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="quantitywhey">Quantity  :  </label><input type="number" placeholder="1" style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="quantitywhey" id="quantitywhey" value="0" min="0"></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="pricewhey">     Price  :  </label><span id="pricewhey">Rs. 799.00</span></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">                                                                                    <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 10px;" type="submit" name="submitwhey" value="Add To Cart"></pre>
      </form>
    </fieldset>

    <!-- ////////////////////////////////////////////////////////// -->

    <?php
    // STOPS RETURNING UNDEFINED INDEX ERROR
    error_reporting(0);


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

    // INSERTING ELEMENTS INTO DATABASE WHEN ADD TO CART IS CLICKED
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $empty = 0;
      $pricewhey = 0;
      $flavourwhey = 0;
      $amountwhey = 0;
      $quantitywhey = 0;
      $sizewhey = 0;
      $flavourwhey = $_POST['flavourwhey'];
      $amountwhey = $_POST['amountwhey'];
      $quantitywhey = $_POST['quantitywhey'];
      $weightwhey = 0;
      $namewhey = "Biozyme Whey Protein";
      $imagewhey = "https://static.thcdn.com/productimg/1600/1600/13225839-1064934874162534.jpg";
      switch ($amountwhey) {
        case "500 g":
          $pricewhey = 799;
          break;
        case "1500 g":
          $pricewhey = 1799;
          break;
        case "2500 g":
          $pricewhey = 2999;
          break;
      }
      if ($quantitywhey == 0) {

      } else {
        //IN CASE QUANTITY IS NOT ZERO
        $checkflavour = $_POST['flavourwhey'];
        $checkamount = $_POST['amountwhey'];

        //QUERY TO CHECK IF THERE IS ALREADY AN ITEM WITH SAME SPECIFICATIONS IS ADDED IN THE CART
        $checksql = "SELECT `sr no`, `name`, `quantity`, `amount`, `price`, `flavour`, `image`, `weight`, `size` FROM `addtocart` WHERE `name`='Biozyme Whey Protein' AND `flavour`='$checkflavour' AND `amount`='$checkamount'";
        $checkresult = mysqli_query($conn, $checksql);
        $checknumrow = mysqli_num_rows($checkresult);
        $checknumrow = mysqli_num_rows($checkresult);
        if ($checknumrow >= 1) {
          echo '  <script>alert("Item already added in cart!!")</script>
          ';
        } elseif ($checknumrow == 0) {

          $sql = "INSERT INTO `addtocart`(`name`,`quantity`,`amount`,`price`,`flavour`,`image`,`weight`,`size`) VALUES('$namewhey','$quantitywhey','$amountwhey','$pricewhey','$flavourwhey','$imagewhey','$weightwhey','$sizewhey')";
          $result = mysqli_query($conn, $sql);
          if ($result == TRUE) {
            // echo "Item added to cart";
          } else {
            echo "item not added to cart";
          }

        }
      }
    }
    ?>
    <!-- ////////////////////////////////////////////////////////// -->


    <script>
      function updatePricewhey() {
        const amountSelect = document.getElementById("amountwhey");
        const priceElement = document.getElementById("pricewhey");

        // Define the price values for different amounts
        const prices = {
          "500 g": 799,
          "1500 g": 1799,
          "2500 g": 2999
        };

        // Get the selected amount value
        const selectedAmount = amountSelect.value;

        // Update the price element with the corresponding price
        priceElement.textContent = "Rs. " + prices[selectedAmount].toFixed(2);
      }
    </script>



    <!-- CREATINE MONOHYDRATE -->

    <h2 style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
      <li>CREATINE MONOHYDRATE :</li>
    </h2>

    <fieldset>
      <img id="whey" src="https://static.thcdn.com/productimg/1600/1600/11654672-1954945964695905.jpg">
      <pre
        style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>     Creatine Monohydrate</b></pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      One of the most researched forms of creatine in the world our hard-hitting
      powder is scientifically proven to increase physical performance in successive
      bursts of short-term, high-intensity exercise.</pre>
      <form action="/GYMMANIA/hw1project.php" method="post">
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="flavourcrea">Flavour  :  </label><select style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="flavourcrea" id="flavourcrea"><option value="Tangy Orange">Tangy Orange</option><option value="Fruit Punch">Fruit Punch</option><option value="Blue Berry">Blue berry</option></select></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="amountcrea">Amount  :  </label><select style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="amountcrea" id="amountcrea" onchange="updatePricecrea()"><option value="150 g">150 g</option><option value="250 g">250 g</option><option value="500 g">500 g</option></select></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="quantitycrea">Quantity  :  </label><input type="number" placeholder="1" style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="quantitycrea" id="quantitycrea" value="0" min="0"></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="pricecrea">                                                                  Price  :  </label><span id="pricecrea">Rs. 799.00</span></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">                                                                                    <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 10px;" type="submit" name="submitcrea" value="Add To Cart"></pre>
      </form>



    </fieldset><br>

    <!-- ////////////////////////////////////////////////////////// -->


    <?php

    // STOPS RETURNING UNDEFINED INDEX ERROR
    error_reporting(0);

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
      //echo "hello bello";
    }

    // INSERTING ELEMENTS INTO DATABASE WHEN ADD TO CART IS CLICKED
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $empty = 0;
      $pricecrea = 0;
      $flavourcrea = 0;
      $amountcrea = 0;
      $weightcrea = 0;
      $sizecrea = 0;
      $quantitycrea = 0;
      $flavourcrea = $_POST['flavourcrea'];
      $amountcrea = $_POST['amountcrea'];
      $quantitycrea = $_POST['quantitycrea'];
      $namecrea = "Creatine Monohydrate";
      $imagecrea = "https://static.thcdn.com/productimg/1600/1600/11654672-1954945964695905.jpg";

      switch ($amountcrea) {
        case "150 g":
          $pricecrea = 799;
          break;
        case "250 g":
          $pricecrea = 1499;
          break;
        case "500 g":
          $pricecrea = 2199;
          break;
        default:
          $pricecrea = 799;
          break;
      }
      if ($quantitycrea == 0) {

      } else {
        //IN CASE QUANTITY IS NOT ZERO
        $checkflavour = $_POST['flavourcrea'];
        $checkamount = $_POST['amountcrea'];

        //QUERY TO CHECK IF THERE IS ALREADY AN ITEM WITH SAME SPECIFICATIONS IS ADDED IN THE CART
        $checksql = "SELECT `sr no`, `name`, `quantity`, `amount`, `price`, `flavour`, `image`, `weight`, `size` FROM `addtocart` WHERE `name`='Creatine Monohydrate' AND `flavour`='$checkflavour' AND `amount`='$checkamount'";
        $checkresult = mysqli_query($conn, $checksql);
        $checknumrow = mysqli_num_rows($checkresult);
        $checknumrow = mysqli_num_rows($checkresult);
        if ($checknumrow >= 1) {
          echo '  <script>alert("Item already added in cart!!")</script>
          ';
        } elseif ($checknumrow == 0) {

          $sql = "INSERT INTO `addtocart`(`name`,`quantity`,`amount`,`price`,`flavour`,`image`,`weight`,`size`) VALUES('$namecrea','$quantitycrea','$amountcrea','$pricecrea','$flavourcrea','$imagecrea','$weightcrea','$sizecrea')";
          $result = mysqli_query($conn, $sql);
          if ($result == TRUE) {
            // echo "Item added to cart";
          } else {
            echo "item not added to cart";
          }

        }
      }
    }
    ?>

    <!-- ////////////////////////////////////////////////////////// -->



    <script>
      function updatePricecrea() {
        const amountSelect = document.getElementById("amountcrea");
        const priceElement = document.getElementById("pricecrea");

        // Define the price values for different amounts
        const prices = {
          "150 g": 799,
          "250 g": 1499,
          "500 g": 2199
        };

        // Get the selected amount value
        const selectedAmount = amountSelect.value;

        // Update the price element with the corresponding price
        priceElement.textContent = "Rs. " + prices[selectedAmount].toFixed(2);
      }
    </script>



    <!-- PRE WORKOUT -->

    <h2 style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
      <li>PRE-WORKOUT :</li>
    </h2>

    <fieldset>
      <img id="whey" style="height: 450px;"
        src="https://www.jiomart.com/images/product/600x600/rvdncpf3b8/myprotein-pre-workout-blend-blue-raspberry-500g-product-images-orvdncpf3b8-p591007489-0-202201172132.jpg">
      <pre
        style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>     Pre-Workout Blend</b></pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      With a blend of caffeine and other specially chosen ingredients, our powerful 
      pre-workout gives you the kick you need to achieve superior results. We have 
      developed our formula with vegetarians in mind, powering your workout with
      green goodness.</pre>
      <form action="/GYMMANIA/hw1project.php" method="post">
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="flavourpre">Flavour  :  </label><select style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="flavourpre" id="flavourpre"><option value="Tangy Orange">Tangy Orange</option><option value="Fruit Punch">Fruit Punch</option><option value="Blue Raspberry">Blue Raspberry</option></select></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="amountpre">Amount  :  </label><select style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="amountpre" id="amountpre" onclick="updatePricepre()"><option value="150 g">150 g</option><option value="250 g">250 g</option><option value="1000 g">1000 g</option></select></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="quantitypre">Quantity  :  </label><input type="number" placeholder="1" style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="quantitypre" id="quantitypre" value="0" min="0"></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="pricepre">     Price  :  </label><span id="pricepre">Rs. 699.00</span></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">                                                                                    <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 10px;" type="submit" name="submitpre" value="Add To Cart"></pre>
      </form>



    </fieldset><br>



    <!-- ////////////////////////////////////////////////////////// -->

    <?php
    // STOPS RETURNING UNDEFINED INDEX ERROR
    error_reporting(0);


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

    // INSERTING ELEMENTS INTO DATABASE WHEN ADD TO CART IS CLICKED
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $empty = 0;
      $pricepre = 0;
      $flavourpre = 0;
      $amountpre = 0;
      $weightpre = 0;
      $sizepre = 0;
      $quantitypre = 0;
      $flavourpre = $_POST['flavourpre'];
      $amountpre = $_POST['amountpre'];
      $quantitypre = $_POST['quantitypre'];
      $namepre = "Pre-Workout Blend";
      $imagepre = "https://www.jiomart.com/images/product/600x600/rvdncpf3b8/myprotein-pre-workout-blend-blue-raspberry-500g-product-images-orvdncpf3b8-p591007489-0-202201172132.jpg";
      switch ($amountpre) {
        case "150 g":
          $pricepre = 699;
          break;
        case "250 g":
          $pricepre = 1399;
          break;
        case "1000 g":
          $pricepre = 2099;
          break;
      }
      if ($quantitypre == 0) {

      } else {

        //IN CASE QUANTITY IS NOT ZERO
        $checkflavour = $_POST['flavourpre'];
        $checkamount = $_POST['amountpre'];

        //QUERY TO CHECK IF THERE IS ALREADY AN ITEM WITH SAME SPECIFICATIONS IS ADDED IN THE CART
        $checksql = "SELECT `sr no`, `name`, `quantity`, `amount`, `price`, `flavour`, `image`, `weight`, `size` FROM `addtocart` WHERE `name`='Pre-Workout Blend' AND `flavour`='$checkflavour' AND `amount`='$checkamount'";
        $checkresult = mysqli_query($conn, $checksql);
        $checknumrow = mysqli_num_rows($checkresult);
        $checknumrow = mysqli_num_rows($checkresult);
        if ($checknumrow >= 1) {
          echo '  <script>alert("Item already added in cart!!")</script>
          ';
        } elseif ($checknumrow == 0) {

          $sql = "INSERT INTO `addtocart`(`name`,`quantity`,`amount`,`price`,`flavour`,`image`,`weight`,`size`) VALUES('$namepre','$quantitypre','$amountpre','$pricepre','$flavourpre','$imagepre','$weightpre','$sizepre')";
          $result = mysqli_query($conn, $sql);
          if ($result == TRUE) {
            // echo "Item added to cart";
          } else {
            echo "item not added to cart";
          }

        }
      }
    }
    ?>
    <!-- ////////////////////////////////////////////////////////// -->






    <script>
      function updatePricepre() {
        const amountSelect = document.getElementById("amountpre");
        const priceElement = document.getElementById("pricepre");

        // Define the price values for different amounts
        const prices = {
          "150 g": 699,
          "250 g": 1399,
          "1000 g": 2099
        };

        // Get the selected amount value
        const selectedAmount = amountSelect.value;

        // Update the price element with the corresponding price
        priceElement.textContent = "Rs. " + prices[selectedAmount].toFixed(2);
      }
    </script>


    <!-- PROTEIN BARS -->

    <h2 style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
      <li>PROTEIN BARS :</li>
    </h2>


    <fieldset>
      <img id="whey" src="https://static.thcdn.com/productimg/1600/1600/12565702-6564838635959549.jpg">
      <pre
        style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>     Protein Bars</b></pre>
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      A delicious snack, packed with 30g of both fast-and slow-releasing proteins</pre>
      <form action="/GYMMANIA/hw1project.php" method="post">
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="flavourbar">Flavour  :  </label><select style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="flavourbar" id="flavourbar"><option value="Chocolate Almond">Chocolate Almond</option><option value="Cookies & Cream">Cookies & Cream</option><option value="Vanilla Coffee Almond">Vanilla Coffee Almond</option></select></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="amountbar">Amount  :  </label><select style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="amountbar" id="amountbar" onclick="updatePricebar()"><option value="6 Bars">6 Bars</option><option value="12 Bars">12 Bars</option><option value="16 Bars">16 Bars</option></select></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="quantitybar">Quantity  :  </label><input type="number" placeholder="1" style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="quantitybar" id="quantitybar" min="0" value="0"></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="pricebar">     Price  :  </label><span id="pricebar">Rs. 699.00</span></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">                        <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 10px;" type="submit" name="submitbar" value="Add To Cart"></pre>
      </form>


    </fieldset><br>



    <!-- ////////////////////////////////////////////////////////// -->


    <?php
    // STOPS RETURNING UNDEFINED INDEX ERROR
    error_reporting(0);


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

    // INSERTING ELEMENTS INTO DATABASE WHEN ADD TO CART IS CLICKED
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $empty = 0;
      $pricebar = 0;
      $flavourbar = 0;
      $amountbar = 0;
      $quantitybar = 0;
      $sizebar = 0;
      $weightbar = 0;
      $flavourbar = $_POST['flavourbar'];
      $amountbar = $_POST['amountbar'];
      $quantitybar = $_POST['quantitybar'];
      $namebar = "Protein Bars";
      $imagebar = "https://static.thcdn.com/productimg/1600/1600/12565702-6564838635959549.jpg";
      switch ($amountbar) {
        case "6 Bars":
          $pricebar = 699;
          break;
        case "12 Bars":
          $pricebar = 1199;
          break;
        case "16 Bars":
          $pricebar = 1699;
          break;
      }
      if ($quantitybar == 0) {

      } else {
        //IN CASE QUANTITY IS NOT ZERO
        $checkflavour = $_POST['flavourbar'];
        $checkamount = $_POST['amountbar'];
              
        //QUERY TO CHECK IF THERE IS ALREADY AN ITEM WITH SAME SPECIFICATIONS IS ADDED IN THE CART
        $checksql = "SELECT `sr no`, `name`, `quantity`, `amount`, `price`, `flavour`, `image`, `weight`, `size` FROM `addtocart` WHERE `name`='Protein Bars' AND `flavour`='$checkflavour' AND `amount`='$checkamount'";
        $checkresult = mysqli_query($conn, $checksql);
        $checknumrow = mysqli_num_rows($checkresult);
        $checknumrow = mysqli_num_rows($checkresult);
        if ($checknumrow >= 1) {
          echo '  <script>alert("Item already added in cart!!")</script>
          ';
        } elseif ($checknumrow == 0) {
        
          $sql = "INSERT INTO `addtocart`(`name`,`quantity`,`amount`,`price`,`flavour`,`image`,`weight`,`size`) VALUES('$namebar','$quantitybar','$amountbar','$pricebar','$flavourbar','$imagebar','$weightbar','$sizebar')";
          $result = mysqli_query($conn, $sql);
          if ($result == TRUE) {
            // echo "Item added to cart";
          } else {
            echo "item not added to cart";
          }
        
        }
      }
    }
    ?>
    <!-- ////////////////////////////////////////////////////////// -->






    <script>
      function updatePricebar() {
        const amountSelect = document.getElementById("amountbar");
        const priceElement = document.getElementById("pricebar");

        // Define the price values for different amounts
        const prices = {
          "6 bars": 699,
          "12 bars": 1199,
          "16 bars": 1699
        };

        // Get the selected amount value
        const selectedAmount = amountSelect.value;

        // Update the price element with the corresponding price
        priceElement.textContent = "Rs. " + prices[selectedAmount].toFixed(2);
      }
    </script>

  </ul>

  <!-- GYM EQUIPMENTS -->



  <p id="equip" style="color:black" ;>p</p>
  <br>
  <br>
  <br>
  <br>
  <h1
    style="text-align: center;font-size: 50px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    GYM EQUIPMENTS</h1>
  <br><br>
  <ul>

    <!-- DUMBELLS -->

    <h2 style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
      <li>DUMBELLS :</li>
    </h2>

    <fieldset>
      <img id="whey" style="width: 450px;height: 375px;"
        src="https://escapefitness.com/wps/wp-content/uploads/2023/03/lr-urethane-dumbbells-category-head.jpg">
      <pre
        style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>     Hex Dumbells</b></pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      The ultimate fitness companion for strength training. Designed for maximum
      comfort and durability, dumbbells offer versatile and effective exercises to
      sculpt your body and achieve your fitness goals.</pre>
      <form action="/GYMMANIA/hw1project.php" method="post">
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="weighthex">Weight  :   </label><select style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="weighthex" id="weighthex" onclick="updatePricedum()"><option value="2.5 kg pair">2.5 kg pair</option><option value="5 kg pair">5 kg pair</option><option value="7.5 kg pair">7.5 kg pair</option><option value="10 kg pair">10 kg pair</option><option value="12.5 kg pair">12.5 kg pair</option><option value="15 kg pair">15 kg pair</option><option value="17.5 kg pair">17.5 kg pair</option><option value="20 kg pair">20 kg pair</option></select></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="quantityhex">Quantity  :  </label><input type="number" placeholder="1" style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="quantityhex" id="quantityhex" value="0" min="0"></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="pricehex">     Price  :  </label><span id="pricehex">Rs. 699.00</span></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">                                                                                           <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 10px;" type="submit" name="submithex" value="Add To Cart"></pre>
      </form>



    </fieldset><br>



    <!-- ////////////////////////////////////////////////////////// -->


    <?php
    // STOPS RETURNING UNDEFINED INDEX ERROR
    error_reporting(0);


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

    // INSERTING ELEMENTS INTO DATABASE WHEN ADD TO CART IS CLICKED
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $empty = 0;
      $flavourhex = 0;
      $amounthex = 0;
      $sizehex = 0;
      $pricehex = 0;
      $weighthex = 0;
      $quantityhex = 0;
      $weighthex = $_POST['weighthex'];
      $quantityhex = $_POST['quantityhex'];
      $namehex = "Hex Dumbells";
      $imagehex = "https://escapefitness.com/wps/wp-content/uploads/2023/03/lr-urethane-dumbbells-category-head.jpg";
      switch ($weighthex) {
        case "2.5 kg pair":
          $weighthex = 2.5;
          $pricehex = 699;
          break;
        case "5 kg pair":
          $weighthex = 5;
          $pricehex = 899;
          break;
        case "7.5 kg pair":
          $weighthex = 7.5;
          $pricehex = 1099;
          break;
        case "10 kg pair":
          $weighthex = 10;
          $pricehex = 1299;
          break;
        case "12.5 kg pair":
          $weighthex = 12.5;
          $pricehex = 1499;
          break;
        case "15 kg pair":
          $weighthex = 15;
          $pricehex = 1699;
          break;
        case "17.5 kg pair":
          $weighthex = 17.5;
          $pricehex = 1899;
          break;
        case "20 kg pair":
          $weighthex = 20;
          $pricehex = 2099;
          break;
      }
      if ($quantityhex == 0) {

      } else {

        //IN CASE QUANTITY IS NOT ZERO
        $checkweight = $_POST['weighthex'];
              
        //QUERY TO CHECK IF THERE IS ALREADY AN ITEM WITH SAME SPECIFICATIONS IS ADDED IN THE CART
        $checksql = "SELECT `sr no`, `name`, `quantity`, `amount`, `price`, `flavour`, `image`, `weight`, `size` FROM `addtocart` WHERE `name`='Hex Dumbells' AND `weight`='$checkweight' ";
        $checkresult = mysqli_query($conn, $checksql);
        $checknumrow = mysqli_num_rows($checkresult);
        $checknumrow = mysqli_num_rows($checkresult);
        if ($checknumrow >= 1) {
          echo '  <script>alert("Item already added in cart!!")</script>
          ';
        } elseif ($checknumrow == 0) {
        
          $sql = "INSERT INTO `addtocart`(`name`,`quantity`,`amount`,`price`,`flavour`,`image`,`weight`,`size`) VALUES('$namehex','$quantityhex','$amounthex','$pricehex','$flavourhex','$imagehex','$weighthex','$sizehex')";
          $result = mysqli_query($conn, $sql);
          if ($result == TRUE) {
            // echo "Item added to cart";
          } else {
            echo "item not added to cart";
          }
        
        }
      }
    }
    ?>
    <!-- ////////////////////////////////////////////////////////// -->





    <script>
      function updatePricedum() {
        const amountSelect = document.getElementById("weighthex");
        const priceElement = document.getElementById("pricehex");

        // Define the price values for different amounts
        const prices = {
          "2.5 kg pair": 699,
          "5 kg pair": 899,
          "7.5 kg pair": 1099,
          "10 kg pair": 1299,
          "12.5 kg pair": 1499,
          "15 kg pair": 1699,
          "17.5 kg pair": 1899,
          "20 kg pair": 2099,

        };

        // Get the selected amount value
        const selectedAmount = amountSelect.value;

        // Update the price element with the corresponding price
        priceElement.textContent = "Rs. " + prices[selectedAmount].toFixed(2);
      }
    </script>

    <!-- BARBELLS -->
    <!-- OLYMPIC BARBELL -->

    <h2 style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
      <li>BARBELLS :</li>
    </h2>

    <fieldset>
      <img id="whey" style="width: 450px;height: 375px;"
        src="https://images.unsplash.com/photo-1620188526357-ff08e03da266?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YmFyYmVsbHxlbnwwfHwwfHw%3D&w=1000&q=80">
      <pre
        style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>     Olympic Barbell</b></pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      The unique center knurling design lets the bar be more stable over your body 
      during Squats & Overhead Pressing. Supreme knurling, 450 Kg strength,
      and brass bushing. These barbells are a fundamental tool in any gym 
      or training facility. </pre>
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      Made with Olympic Weightlifting Federation Dimensions.</pre>
      <form action="/GYMMANIA/hw1project.php" method="post">
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="Quantity">Quantity  :  </label><input type="number" placeholder="1" style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="quantityolymp" id="quantityolymp" value="0" min="0"></pre>
        <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. 13,499.00</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">                                                                                           <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 10px;" type="submit" name="submitolymp" value="Add To Cart"></pre>
      </form>



    </fieldset><br>



    <!-- ////////////////////////////////////////////////////////// -->


    <?php
    // STOPS RETURNING UNDEFINED INDEX ERROR
    error_reporting(0);


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

    // INSERTING ELEMENTS INTO DATABASE WHEN ADD TO CART IS CLICKED
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $empty = 0;
      $priceolymp = 13499;
      $quantityolymp = 0;
      $flavourolymp = 0;
      $sizeolymp = 0;
      $amountolymp = 0;
      $weightolymp = 0;
      $quantityolymp = $_POST['quantityolymp'];
      $nameolymp = "Olympic Barbell";
      $imageolymp = "https://images.unsplash.com/photo-1620188526357-ff08e03da266?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YmFyYmVsbHxlbnwwfHwwfHw%3D&w=1000&q=80";

      if ($quantityolymp == 0) {

      } else {

        //IN CASE QUANTITY IS NOT ZERO
              
        //QUERY TO CHECK IF THERE IS ALREADY AN ITEM WITH SAME SPECIFICATIONS IS ADDED IN THE CART
        $checksql = "SELECT `sr no`, `name`, `quantity`, `amount`, `price`, `flavour`, `image`, `weight`, `size` FROM `addtocart` WHERE `name`='Olympic Barbell' ";
        $checkresult = mysqli_query($conn, $checksql);
        $checknumrow = mysqli_num_rows($checkresult);
        $checknumrow = mysqli_num_rows($checkresult);
        if ($checknumrow >= 1) {
          echo '  <script>alert("Item already added in cart!!")</script>
          ';
        } elseif ($checknumrow == 0) {
        
          $sql = "INSERT INTO `addtocart`(`name`,`quantity`,`amount`,`price`,`flavour`,`image`,`weight`,`size`) VALUES('$nameolymp','$quantityolymp','$amountolymp','$priceolymp','$flavourolymp','$imageolymp','$weightolymp','$sizeolymp')";
          $result = mysqli_query($conn, $sql);
          if ($result == TRUE) {
            // echo "Item added to cart";
          } else {
            echo "item not added to cart";
          }
        
        }
      }
    }
    ?>
    <!-- ////////////////////////////////////////////////////////// -->





    <!-- EZ BARBELL -->

    <fieldset>
      <img id="whey" style="width: 450px;height: 375px;"
        src="https://cdn.shopify.com/s/files/1/1633/7705/articles/ez_bar_exercises_2000x.jpg?v=1626332512">
      <pre
        style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>     EZ Barbell</b></pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      The ultimate fitness companion for a complete upper body workout. With its
      unique curved design and ergonomic grip, this versatile barbell is designed
      to target & sculpt your biceps, triceps, and forearms with maximum efficiency.
      The EZ Barbell's contoured shape reduces strain on your wrists and elbows,
      allowing you to perform a wide range of exercises with comfort and precision. </pre>
      <form action="/GYMMANIA/hw1project.php" method="post">
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="Quantity">Quantity  :  </label><input type="number" placeholder="1" style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="quantityez" id="quantityez" min="0" value="0"></pre>
        <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. 6,499.00</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">                        <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 10px;" type="submit" name="submitez" value="Add To Cart"></pre>
      </form>



    </fieldset><br>


    <!-- ////////////////////////////////////////////////////////// -->


    <?php
    // STOPS RETURNING UNDEFINED INDEX ERROR
    error_reporting(0);


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

    // INSERTING ELEMENTS INTO DATABASE WHEN ADD TO CART IS CLICKED
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $empty = 0;
      $priceez = 6499;
      $quantityez = 0;
      $flavourez = 0;
      $weightez = 0;
      $sizeez = 0;
      $amountez = 0;
      $quantityez = $_POST['quantityez'];
      $nameez = "EZ Barbell";
      $imageez = "https://cdn.shopify.com/s/files/1/1633/7705/articles/ez_bar_exercises_2000x.jpg?v=1626332512";

      if ($quantityez == 0) {

      } else {

        //IN CASE QUANTITY IS NOT ZERO
              
        //QUERY TO CHECK IF THERE IS ALREADY AN ITEM WITH SAME SPECIFICATIONS IS ADDED IN THE CART
        $checksql = "SELECT `sr no`, `name`, `quantity`, `amount`, `price`, `flavour`, `image`, `weight`, `size` FROM `addtocart` WHERE `name`='EZ Barbell' ";
        $checkresult = mysqli_query($conn, $checksql);
        $checknumrow = mysqli_num_rows($checkresult);
        $checknumrow = mysqli_num_rows($checkresult);
        if ($checknumrow >= 1) {
          echo '  <script>alert("Item already added in cart!!")</script>
          ';
        } elseif ($checknumrow == 0) {
        
          $sql = "INSERT INTO `addtocart`(`name`,`quantity`,`amount`,`price`,`flavour`,`image`,`weight`,`size`) VALUES('$nameez','$quantityez','$amountez','$priceez','$flavourez','$imageez','$weightez','$sizeez')";
          $result = mysqli_query($conn, $sql);
          if ($result == TRUE) {
            // echo "Item added to cart";
          } else {
            echo "item not added to cart";
          }
        
        }
      }
    }
    ?>
    <!-- ////////////////////////////////////////////////////////// -->




    <!-- PLATES -->


    <h2 style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
      <li>WEIGHT PLATES :</li>
    </h2>

    <fieldset>
      <img id="whey"
        src="https://i0.wp.com/www.selfhimprovement.com/wp-content/uploads/2022/10/AmericanHomeFitness-136290-Only-Weight-Plates-image1.jpg?fit=1200%2C628&ssl=1">
      <pre
        style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>     Weight Plates</b></pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     The ultimate fitness essential for serious strength training. Crafted with precision
     and durability, these weight plates are designed to withstand the toughest
     workouts while providing optimal performance. Each plate is expertly calibrated
     to ensure accurate weight measurements, allowing you to track your progress
     with confidence.</pre>
      <form action="/GYMMANIA/hw1project.php" method="post">
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="weightplate">Weight  :   </label><select style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="weightplate" id="weightplate" onclick="updatePriceplate()"><option value="2.5 kg pair">2.5 kg pair</option><option value="5 kg pair">5 kg pair</option><option value="10 kg pair">10 kg pair</option><option value="15 kg pair">15 kg pair</option><option value="20 kg pair">20 kg pair</option></select></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="quantityplate">Quantity  :  </label><input type="number" placeholder="1" style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="quantityplate" id="quantityplate"min="0" value="0"></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="priceplate">     Price  :  </label><span id="priceplate">Rs. 699.00</span></pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">                                                                                    <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 10px;" type="submit" name="submitplate" value="Add To Cart"></pre>
      </form>



    </fieldset><br>



    <!-- ////////////////////////////////////////////////////////// -->


    <?php
    // STOPS RETURNING UNDEFINED INDEX ERROR
    error_reporting(0);


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

    // INSERTING ELEMENTS INTO DATABASE WHEN ADD TO CART IS CLICKED
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $empty = 0;
      $priceplate = 0;
      $weightplate = 0;
      $quantityplate = 0;
      $sizeplate = 0;
      $flavourplate = 0;
      $amountplate = 0;
      $weightplate = $_POST['weightplate'];
      $quantityplate = $_POST['quantityplate'];
      $nameplate = "Weight Plates";
      $imageplate = "https://i0.wp.com/www.selfhimprovement.com/wp-content/uploads/2022/10/AmericanHomeFitness-136290-Only-Weight-Plates-image1.jpg?fit=1200%2C628&ssl=1";
      switch ($weightplate) {
        case "2.5 kg pair":
          $priceplate = 699;
          break;
        case "5 kg pair":
          $priceplate = 899;
          break;
        case "10 kg pair":
          $priceplate = 1299;
          break;
        case "15 kg pair":
          $priceplate = 1699;
          break;
        case "20 kg pair":
          $priceplate = 2099;
          break;
      }
      if ($quantityplate == 0) {

      } else {

       //IN CASE QUANTITY IS NOT ZERO
       $checkweight = $_POST['weightplate'];
              
       //QUERY TO CHECK IF THERE IS ALREADY AN ITEM WITH SAME SPECIFICATIONS IS ADDED IN THE CART
       $checksql = "SELECT `sr no`, `name`, `quantity`, `amount`, `price`, `flavour`, `image`, `weight`, `size` FROM `addtocart` WHERE `name`='Weight Plates' AND `weight`='$checkweight' ";
       $checkresult = mysqli_query($conn, $checksql);
       $checknumrow = mysqli_num_rows($checkresult);
       $checknumrow = mysqli_num_rows($checkresult);
       if ($checknumrow >= 1) {
         echo '  <script>alert("Item already added in cart!!")</script>
         ';
       } elseif ($checknumrow == 0) {
       
         $sql = "INSERT INTO `addtocart`(`name`,`quantity`,`amount`,`price`,`flavour`,`image`,`weight`,`size`) VALUES('$nameplate','$quantityplate','$amountplate','$priceplate','$flavourplate','$imageplate','$weightplate','$sizeplate')";
         $result = mysqli_query($conn, $sql);
         if ($result == TRUE) {
           // echo "Item added to cart";
         } else {
           echo "item not added to cart";
         }
       
       }
      }
    }
    ?>
    <!-- ////////////////////////////////////////////////////////// -->





    <script>
      function updatePriceplate() {
        const amountSelect = document.getElementById("weightplate");
        const priceElement = document.getElementById("priceplate");

        // Define the price values for different amounts
        const prices = {
          "2.5 kg pair": 599,
          "5 kg pair": 799,
          "10 kg pair": 1099,
          "15 kg pair": 1299,
          "20 kg pair": 1599,

        };

        // Get the selected amount value
        const selectedAmount = amountSelect.value;

        // Update the price element with the corresponding price
        priceElement.textContent = "Rs. " + prices[selectedAmount].toFixed(2);
      }
    </script>


    <!-- ADJUSTABLE BENCH -->

    <h2 style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
      <li>ADJUSTABLE BENCH :</li>
    </h2>

    <fieldset>
      <img id="whey" style="margin-bottom: 20px;"
        src="https://kingsbox.com/blog/wp-content/uploads/2017/11/Royal-Adj.-Bench-4-800x533.jpg">
      <pre
        style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>     Adjustable Bench</b></pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Designed to provide optimal support & versatility, bench allows you to target every
     muscle group with ease. From chest presses to incline curls, you can customize the
     angle and position for a personalized workout. Built with durable materials and
     ergonomic design, adjustable gym bench is the perfect addition to your home gym.
     Maximize your gains & conquer your fitness goals with a versatile & reliable bench</pre>
      <form action="/GYMMANIA/hw1project.php" method="post">
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="quantitybench">Quantity  :  </label><input type="number" placeholder="1" style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="quantitybench" id="quantitybench" min="0" value="0"></pre>
        <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. 20,499.00</pre>
        <pre
          style="font-size: 25px;font-family: Helvetica;color: lightgrey;">                        <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 10px;" type="submit" name="submitbench" value="Add To Cart"></pre>
      </form>



    </fieldset><br>

  </ul>




  <!-- ////////////////////////////////////////////////////////// -->


  <?php
  // STOPS RETURNING UNDEFINED INDEX ERROR
  error_reporting(0);


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

  // INSERTING ELEMENTS INTO DATABASE WHEN ADD TO CART IS CLICKED
  

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $empty = 0;
    $pricebench = 20499;
    $quantitybench = 0;
    $sizebench = 0;
    $flavourbench = 0;
    $amountbench = 0;
    $weightbench = 0;
    $quantitybench = $_POST['quantitybench'];
    $namebench = "Adjustable Bench";
    $imagebench = "https://kingsbox.com/blog/wp-content/uploads/2017/11/Royal-Adj.-Bench-4-800x533.jpg";

    if ($quantitybench == 0) {

    } else {

      //IN CASE QUANTITY IS NOT ZERO
              
        //QUERY TO CHECK IF THERE IS ALREADY AN ITEM WITH SAME SPECIFICATIONS IS ADDED IN THE CART
        $checksql = "SELECT `sr no`, `name`, `quantity`, `amount`, `price`, `flavour`, `image`, `weight`, `size` FROM `addtocart` WHERE `name`='Adjustable Bench' ";
        $checkresult = mysqli_query($conn, $checksql);
        $checknumrow = mysqli_num_rows($checkresult);
        $checknumrow = mysqli_num_rows($checkresult);
        if ($checknumrow >= 1) {
          echo '  <script>alert("Item already added in cart!!")</script>
          ';
        } elseif ($checknumrow == 0) {
        
          $sql = "INSERT INTO `addtocart`(`name`,`quantity`,`amount`,`price`,`flavour`,`image`,`weight`,`size`) VALUES('$namebench','$quantitybench','$amountbench','$pricebench','$flavourbench','$imagebench','$weightbench','$sizebench')";
          $result = mysqli_query($conn, $sql);
          if ($result == TRUE) {
            // echo "Item added to cart";
          } else {
            echo "item not added to cart";
          }
        
        }
    }
  }
  ?>
  <!-- ////////////////////////////////////////////////////////// -->





  <!-- GYM GEARS -->

  <p id="gears" style="color:black" ;>p</p>
  <br>
  <br>
  <br>
  <br>
  <h1
    style="text-align: center;font-size: 50px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    GYM GEARS</h1>
  <br><br>

  <!-- LEVER BELT -->

  <h2 style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    <li>LEVER BELT :</li>
  </h2>

  <fieldset>
    <img id="whey" style="margin-bottom: 20px;"
      src="https://cdn.shopify.com/s/files/1/0551/1040/2218/products/PRODUCT-BELT-1080x1080-01-600x600_334bae78-7cf9-4e11-b7c4-01500a0af028.jpg?v=1621479520">
    <pre
      style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>     Lever Belt for SBD</b></pre>
    <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Elevate your lifting game with our premium lever belt, the ultimate accessory for squats,
     deadlifts, and bench presses.Engineered to provide exceptional support and stability,
     our belt helps you maintain proper form, maximize power, and prevent injuries during
     heavy lifts. Crafted with top-quality materials and a secure lever closure system, it
     offers a snug and secure fit.</pre>
    <form action="/GYMMANIA/hw1project.php" method="post">
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="quantitylever">Quantity  :  </label><input type="number"placeholder="1" style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="quantitylever" id="quantitylever" min="0" value="0"></pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. 12,499.00</pre>
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">                        <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 10px;" type="submit" name="submitlever" value="Add To Cart"></pre>
    </form>



  </fieldset><br>





  <!-- ////////////////////////////////////////////////////////// -->


  <?php
  // STOPS RETURNING UNDEFINED INDEX ERROR
  error_reporting(0);


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

  // INSERTING ELEMENTS INTO DATABASE WHEN ADD TO CART IS CLICKED
  

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $empty = 0;
    $pricelever = 12499;
    $quantitylever = 0;
    $flavourlever = 0;
    $sizelever = 0;
    $amountlever = 0;
    $weightlever = 0;
    $quantitylever = $_POST['quantitylever'];
    $namelever = "Lever Belt";
    $imagelever = "https://cdn.shopify.com/s/files/1/0551/1040/2218/products/PRODUCT-BELT-1080x1080-01-600x600_334bae78-7cf9-4e11-b7c4-01500a0af028.jpg?v=1621479520";

    if ($quantitylever == 0) {
      // echo "quantity is not zero.";
    } else {

      //IN CASE QUANTITY IS NOT ZERO
              
        //QUERY TO CHECK IF THERE IS ALREADY AN ITEM WITH SAME SPECIFICATIONS IS ADDED IN THE CART
        $checksql = "SELECT `sr no`, `name`, `quantity`, `amount`, `price`, `flavour`, `image`, `weight`, `size` FROM `addtocart` WHERE `name`='Lever Belt' ";
        $checkresult = mysqli_query($conn, $checksql);
        $checknumrow = mysqli_num_rows($checkresult);
        $checknumrow = mysqli_num_rows($checkresult);
        if ($checknumrow >= 1) {
          echo '  <script>alert("Item already added in cart!!")</script>
          ';
        } elseif ($checknumrow == 0) {
        
          $sql = "INSERT INTO `addtocart`(`name`,`quantity`,`amount`,`price`,`flavour`,`image`,`weight`,`size`) VALUES('$namelever','$quantitylever','$amountlever','$pricelever','$flavourlever','$imagelever','$weightlever','$sizelever')";
          $result = mysqli_query($conn, $sql);
          if ($result == TRUE) {
            // echo "Item added to cart";
          } else {
            echo "item not added to cart";
          }
        
        }
    }
  }
  ?>
  <!-- ////////////////////////////////////////////////////////// -->







  <!-- KNEE SLEEVES -->


  <h2 style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    <li>POWER SLEEVES :</li>
  </h2>

  <fieldset>
    <img id="whey" style="margin-bottom: 20px;"
      src="https://cdn.shopify.com/s/files/1/0551/1040/2218/products/Knee-Sleeves-7mm-01.jpg?v=1621944257">
    <pre
      style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>    Power Knee Sleeves 7MM</b></pre>
    <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Made with exclusive high grade neoprene material. 7 mm thickness and seamless
     design gives a complete compression and ensures maximal support and strength.
     Ideal for Powerlifting, Bodybuilding, Cross Fit or any type of strength training.</pre>
    <form action="/GYMMANIA/hw1project.php" method="post">
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="sizeknee">    Size   :   </label><select style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="sizeknee" id="sizeknee"><option value="XS">XS</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option></select></pre>
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="quantityknee">Quantity  :  </label><input type="number" style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="quantityknee" id="quantityknee" placeholder="1" min="0" value="0"></pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. 3,499.00</pre>
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">                        <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 10px;" type="submit" name="submitknee" value="Add To Cart"></pre>
    </form>



  </fieldset><br>





  <!-- ////////////////////////////////////////////////////////// -->


  <?php
  // STOPS RETURNING UNDEFINED INDEX ERROR
  error_reporting(0);


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

  // INSERTING ELEMENTS INTO DATABASE WHEN ADD TO CART IS CLICKED
  

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $empty = 0;
    $priceknee = 3499;
    $sizeknee = 0;
    $flavourknee = 0;
    $amountknee = 0;
    $quantityknee = 0;
    $weightknee = 0;
    $sizeknee = 0;
    $sizeknee = $_POST['sizeknee'];
    $quantityknee = $_POST['quantityknee'];
    $nameknee = "Power Knee Sleeves 7MM";
    $imageknee = "https://cdn.shopify.com/s/files/1/0551/1040/2218/products/Knee-Sleeves-7mm-01.jpg?v=1621944257";

    if ($quantityknee == 0) {

    } else {

      //IN CASE QUANTITY IS NOT ZERO
        $checksize=$_POST['sizeknee'];
        //QUERY TO CHECK IF THERE IS ALREADY AN ITEM WITH SAME SPECIFICATIONS IS ADDED IN THE CART
        $checksql = "SELECT `sr no`, `name`, `quantity`, `amount`, `price`, `flavour`, `image`, `weight`, `size` FROM `addtocart` WHERE `name`='Power Knee Sleeves 7MM' AND `size`='$checksize' ";
        $checkresult = mysqli_query($conn, $checksql);
        $checknumrow = mysqli_num_rows($checkresult);
        $checknumrow = mysqli_num_rows($checkresult);
        if ($checknumrow >= 1) {
          echo '  <script>alert("Item already added in cart!!")</script>
          ';
        } elseif ($checknumrow == 0) {
        
          $sql = "INSERT INTO `addtocart`(`name`,`quantity`,`amount`,`price`,`flavour`,`image`,`weight`,`size`) VALUES('$nameknee','$quantityknee','$amountknee','$priceknee','$flavourknee','$imageknee','$weightknee','$sizeknee')";
          $result = mysqli_query($conn, $sql);
          if ($result == TRUE) {
            // echo "Item added to cart";
          } else {
            echo "item not added to cart";
          }
        
        }
    }
  }
  ?>
  <!-- ////////////////////////////////////////////////////////// -->






  <!-- ELBOW SLEEVES -->



  <fieldset>
    <img id="whey" style="margin-bottom: 20px;"
      src="https://cdn.shopify.com/s/files/1/0551/1040/2218/products/Elbow-Sleeves-01.jpg?v=1622727843">
    <pre
      style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>    Elbow Sleeves 3MM</b></pre>
    <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     These elbow sleeves by 1RM are made from high grade synthetic & cotton material.
     Providing superior support & compression for the elbow joint, while ensuring maximum
     range of motion. Ideal for Powerlifting, Bodybuilding, Cross Fit or any type of strength
     training. </pre>
    <form action="/GYMMANIA/hw1project.php" method="post">
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      <label for="sizeelbow">    Size   :   </label><select style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="sizeelbow" id="sizeelbow"><option value="XS">XS</option><option value="S">S</option><option value="M">M</option><option value="L">L</option></select></pre>
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="quantityelbow">Quantity  :  </label><input type="number" style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="quantityelbow" id="quantityelbow" placeholder="1" min="0" value="0"></pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. 1,499.00</pre>
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">                        <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 10px;" type="submit" name="submitelbow" value="Add To Cart"></pre>
    </form>



  </fieldset><br>





  <!-- ////////////////////////////////////////////////////////// -->


  <?php
  // STOPS RETURNING UNDEFINED INDEX ERROR
  error_reporting(0);


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

  // INSERTING ELEMENTS INTO DATABASE WHEN ADD TO CART IS CLICKED
  

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $empty = 0;
    $priceelbow = 1499;
    $sizeelbow = 0;
    $flavourelbow = 0;
    $amountelbow = 0;
    $weightelbow = 0;
    $quantityelbow = 0;
    $sizeelbow = $_POST['sizeelbow'];
    $quantityelbow = $_POST['quantityelbow'];
    $nameelbow = "Elbow Sleeves 3MM";
    $imageelbow = "https://cdn.shopify.com/s/files/1/0551/1040/2218/products/Elbow-Sleeves-01.jpg?v=1622727843";

    if ($quantityelbow == 0) {

    } else {

            //IN CASE QUANTITY IS NOT ZERO
            $checksize=$_POST['sizeelbow'];
            //QUERY TO CHECK IF THERE IS ALREADY AN ITEM WITH SAME SPECIFICATIONS IS ADDED IN THE CART
            $checksql = "SELECT `sr no`, `name`, `quantity`, `amount`, `price`, `flavour`, `image`, `weight`, `size` FROM `addtocart` WHERE `name`='Elbow Sleeves 3MM' AND `size`='$checksize' ";
            $checkresult = mysqli_query($conn, $checksql);
            $checknumrow = mysqli_num_rows($checkresult);
            $checknumrow = mysqli_num_rows($checkresult);
            if ($checknumrow >= 1) {
              echo '  <script>alert("Item already added in cart!!")</script>
              ';
            } elseif ($checknumrow == 0) {
            
              $sql = "INSERT INTO `addtocart`(`name`,`quantity`,`amount`,`price`,`flavour`,`image`,`weight`,`size`) VALUES('$nameelbow','$quantityelbow','$amountelbow','$priceelbow','$flavourelbow','$imageelbow','$weightelbow','$sizeelbow')";
              $result = mysqli_query($conn, $sql);
              if ($result == TRUE) {
                // echo "Item added to cart";
              } else {
                echo "item not added to cart";
              }
            
            }
    }
  }
  ?>
  <!-- ////////////////////////////////////////////////////////// -->







  <h2 style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    <li>STRAPS :</li>
  </h2>


  <!-- DEADLIFT STRAPS -->


  <fieldset>
    <img id="whey" style="margin-bottom: 20px;"
      src="https://cdn.shopify.com/s/files/1/0669/8621/3632/products/Untitleddesign_21.png?v=1674580563&width=1445">
    <pre
      style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>    Deadlift Straps</b></pre>
    <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     Deadlift Straps are designed to strengthen your grips, so that you can lift heavier weight
     with NO fear of slipping. With these exercise straps, you may focus more on target
     muscle groups like your back, traps instead of grips strength, you can easily perform
     more reps. And when your grips strength is starting to fatigue, the weight lifting wrist
     straps will absolutely help you get that last set in.</pre>
    <form action="/GYMMANIA/hw1project.php" method="post">
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="quantitydead">Quantity  :  </label><input type="number" style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="quantitydead" id="quantitydead" placeholder="1" min="0" value="0"></pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. 899.00</pre>
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">                        <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 10px;" type="submit" name="submitdead" value="Add To Cart"></pre>
    </form>



  </fieldset><br>





  <!-- ////////////////////////////////////////////////////////// -->


  <?php
  // STOPS RETURNING UNDEFINED INDEX ERROR
  error_reporting(0);


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

  // INSERTING ELEMENTS INTO DATABASE WHEN ADD TO CART IS CLICKED
  

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $empty = 0;
    $pricedead = 899;
    $quantitydead = 0;
    $flavourdead = 0;
    $amountdead = 0;
    $sizedead = 0;
    $weightdead = 0;
    $quantitydead = $_POST['quantitydead'];
    $namedead = "Deadlift Straps";
    $imagedead = "https://cdn.shopify.com/s/files/1/0669/8621/3632/products/Untitleddesign_21.png?v=1674580563&width=1445";

    if ($quantitydead == 0) {

    } else {

      //IN CASE QUANTITY IS NOT ZERO
              
        //QUERY TO CHECK IF THERE IS ALREADY AN ITEM WITH SAME SPECIFICATIONS IS ADDED IN THE CART
        $checksql = "SELECT `sr no`, `name`, `quantity`, `amount`, `price`, `flavour`, `image`, `weight`, `size` FROM `addtocart` WHERE `name`='Deadlift Straps' ";
        $checkresult = mysqli_query($conn, $checksql);
        $checknumrow = mysqli_num_rows($checkresult);
        $checknumrow = mysqli_num_rows($checkresult);
        if ($checknumrow >= 1) {
          echo '  <script>alert("Item already added in cart!!")</script>
          ';
        } elseif ($checknumrow == 0) {
        
          $sql = "INSERT INTO `addtocart`(`name`,`quantity`,`amount`,`price`,`flavour`,`image`,`weight`,`size`) VALUES('$namedead','$quantitydead','$amountdead','$pricedead','$flavourdead','$imagedead','$weightlever','$sizedead')";
          $result = mysqli_query($conn, $sql);
          if ($result == TRUE) {
            // echo "Item added to cart";
          } else {
            echo "item not added to cart";
          }
        
        }
    }
  }
  ?>
  <!-- ////////////////////////////////////////////////////////// -->






  <!-- WRIST SUPPORT STRAPS -->


  <fieldset>
    <img id="whey" style="margin-bottom: 20px;"
      src="https://cdn.shopify.com/s/files/1/0309/0953/0249/products/WristWrap_600x.png?v=1659431914">
    <pre
      style="font-size: 30px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>    Wrist Support Straps</b></pre>
    <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">      Made with a unique combination these wrist support provide sturdiness, protection and
     comfortable usability more than any other wrist support in the market. Its high elasticity
     allows just the right amount of movement in your wrist requires during strength training.
     These wrist support also absorbs excess moisture & provides no irritation to your skin.   </pre>
    <form action="/GYMMANIA/hw1project.php" method="post">
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">     <label for="quantitywrist">Quantity  :  </label><input type="number" style="padding: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;" name="quantitywrist" id="quantitywrist" placeholder="1" min="0" value="0"></pre>
      <pre style="font-size: 25px;font-family: Helvetica;color: lightgrey;">          Price  :  Rs. 1199.00</pre>
      <pre
        style="font-size: 25px;font-family: Helvetica;color: lightgrey;">                        <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;padding: 10px;" type="submit" name="submitwrist" value="Add To Cart"></pre>
    </form>



  </fieldset><br>




  <!-- ////////////////////////////////////////////////////////// -->


  <?php
  // STOPS RETURNING UNDEFINED INDEX ERROR
  error_reporting(0);


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

  // INSERTING ELEMENTS INTO DATABASE WHEN ADD TO CART IS CLICKED
  

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $empty = 0;
    $pricewrist = 1199;
    $flavourwrist = 0;
    $amountwrist = 0;
    $weightwrist = 0;
    $sizewrist = 0;
    $quantitywrist = 0;
    $quantitywrist = $_POST['quantitywrist'];
    $namewrist = "Wrist Support Straps";
    $imagewrist = "https://cdn.shopify.com/s/files/1/0309/0953/0249/products/WristWrap_600x.png?v=1659431914";

    if ($quantitywrist == 0) {

    } else {

      //IN CASE QUANTITY IS NOT ZERO
              
        //QUERY TO CHECK IF THERE IS ALREADY AN ITEM WITH SAME SPECIFICATIONS IS ADDED IN THE CART
        $checksql = "SELECT `sr no`, `name`, `quantity`, `amount`, `price`, `flavour`, `image`, `weight`, `size` FROM `addtocart` WHERE `name`='Wrist Support Straps' ";
        $checkresult = mysqli_query($conn, $checksql);
        $checknumrow = mysqli_num_rows($checkresult);
        $checknumrow = mysqli_num_rows($checkresult);
        if ($checknumrow >= 1) {
          echo '  <script>alert("Item already added in cart!!")</script>
          ';
        } elseif ($checknumrow == 0) {
        
          $sql = "INSERT INTO `addtocart`(`name`,`quantity`,`amount`,`price`,`flavour`,`image`,`weight`,`size`) VALUES('$namewrist','$quantitywrist','$amountwrist','$pricewrist','$flavourwrist','$imagewrist','$weightwrist','$sizewrist')";
          $result = mysqli_query($conn, $sql);
          if ($result == TRUE) {
            // echo "Item added to cart";
          } else {
            echo "item not added to cart";
          }
        
        }
    }
  }
  ?>
  <!-- ////////////////////////////////////////////////////////// -->





  <!-- CONTACT US -->
  <p id="contact" style="color:black;"></p>
  <br>
  <h1 style="font-size: 40px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    <li>CONTACT US :</li>
  </h1>

  <li style="color: black;"></li><img
    style="width: 100px;height: 100px;border-radius: 50px;float: left;margin-left: 25px;"
    src="https://thumbs.dreamstime.com/b/instagram-new-logo-isolated-vector-instagram-logo-black-color-background-isolated-vector-illustration-206304345.jpg">
  <pre style="font-size: 30px;"> gym_mania</pre>
  </li>

  <li style="color: black;"></li><img
    style="width: 100px;height: 100px;border-radius: 50px;float: left;margin-left: 25px;"
    src="https://i.pinimg.com/736x/dd/26/15/dd26150a65530f32df1dd65d05cddbe6.jpg">
  <pre style="font-size: 30px;"> gym_mania@gmail.com</pre>
  </li>

  <li style="color: black;"></li><img
    style="width: 100px;height: 100px;border-radius: 50px;float: left;margin-left: 25px;"
    src="https://i.pinimg.com/474x/47/ee/93/47ee9334101d8d875da877bec5f46f47.jpg">
  <pre style="font-size: 30px;"> +91 98234 54132</pre>
  </li>

</body>

</html>