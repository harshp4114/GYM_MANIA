<?php

//connecting to database
$servername="localhost";
$username="root";
$password="";

//attempt to connect to database

$conn=mysqli_connect($servername , $username , $password);

//checking if connection is established or not

if($conn==false)
{
    echo "Connection Unsucessful."."Error : ".mysqli_connect_error();
}
else{
    echo "Connection sucessful.";
}


?>