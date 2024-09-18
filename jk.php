<?php
$username="root";
$server="localhost";
$password="";
$database="soil";
$con = mysqli_connect($username,$server,$password,$database);
if(!$con)
{
   die("no");
}
else{
    echo "Connected";
    
}
?>