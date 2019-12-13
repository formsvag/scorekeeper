<?php
   echo 'lets go';

   $server_name = "hoijertz.com.mysql";
   $user_name = "hoijertz_com";
   $password = "ad4Cnf2L";
   $db_name = "hoijertz_com";

   $conn = new mysql_connect($server_name, $user_name, $password);
   
   // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }
   
   echo "Connected successfully";
   mysql_close($conn);
?>