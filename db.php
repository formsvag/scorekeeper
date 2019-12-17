<?php

   $server_name = "hoijertz.com.mysql";
   $user_name = "hoijertz_com";
   $password = "ad4Cnf2L";
   $db_name = "hoijertz_com";

   $conn= new mysqli($server_name, $user_name, $password, $db_name);
   if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
   }
   echo "SUCCESS: " . $conn->host_info . "\n";

?>