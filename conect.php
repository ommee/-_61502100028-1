<?php
$servername = "localhost";
$username   = "root";
$password   = "";
 //creat connetion
$con = new mysqli($servername,$username,$password); 

//check connect

if ($con->connect_error){
    die("Connect failed: " . $con->connect_error);

}  
echo "";

?>
