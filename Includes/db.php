<?php
	  $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname="shop_management";

      // Create connection
      $conn = new mysqli($servername, $username, $password,$dbname);

      // Check connection
      if ($conn->connect_error) {
        die(" Db Connection failed: " . $conn->connect_error);
      }


?>