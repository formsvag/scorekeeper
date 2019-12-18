<?php

   $server_name = "hoijertz.com.mysql";
   $user_name = "hoijertz_com";
   $password = "ad4Cnf2L";
   $db_name = "hoijertz_com";

   $conn= new mysqli($server_name, $user_name, $password, $db_name);
   /* 
   // FOR DEBUGGING THE DB CONNECTION:
   if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
   }
   echo "SUCCESS: " . $conn->host_info . "\n";
   */
  
  if (isset($_POST['save'])) {
     $name = $_POST['name'];
     $comment = $_POST['comment'];
     $sql = "INSERT INTO comments (name, comment) VALUES ('{$name}', '{$comment}')";
     if (mysqli_query($conn, $sql)) {
        $id = mysqli_insert_id($conn);
        $saved_comment = '<div class="comment_box">
                             <span class="delete" data-id="' . $id . '" >delete</span>
                             <span class="edit" data-id="' . $id . '">edit</span>
                             <div class="display_name">'. $name .'</div>
                             <div class="comment_text">'. $comment .'</div>
                          </div>';
        echo $saved_comment;
    }else {
      echo "Error: ". mysqli_error($conn);
    }
    exit();
   }

?>