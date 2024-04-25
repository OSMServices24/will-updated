<?php
$servername = "localhost";
$username = "u584668999_osm";
$password = "4Fa3#&Kx";
$dbname = "u584668999_osm";

// $username = "dslqhzwy_willforumuser";
// $password = "%A~jd_yM=F-x";
// $dbname = "dslqhzwy_willforum";



$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>