<?php
$servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "shopiq";
 //
 // Create connection
 $conn = mysqli_connect($servername,$username,$password,$dbname);
 $baseurl = "http://vps001.qubehost.com/dmac_website/";
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 //echo "Connected successfully";
 ?>