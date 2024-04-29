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
if(isset($_POST['deletewhey'])){
    echo 'whey delete.';
    $id_item=$_POST['idwhey'];
    
    $sqldelete="DELETE FROM `memberdata` WHERE `sr no`='$id_item'";
    $resultdel=mysqli_query($conn,$sqldelete);
    if($resultdel==true){
        echo 'item deleted sucessfully.';
    }else{
        echo 'item not deleted';
    }
}


?>