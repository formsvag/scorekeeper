<!--
   Check out the following for AJAX example: https://codewithawa.com/posts/ajax-crud-%5Bcreate-update-delete%5D-with-php-and-mysql-database
-->

<?php 
   include_once("db.php");
?>
<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>ScoreKeeper</title>
   <link rel="stylesheet" href="css/looking_good.css?v=1.0">
</head>
<body>
   <script src="scripts/scoring.js"></script>
   <div class="grid">
      <div class="header" id="header">
         <br>
      </div>
      <div class="PlayerA" id="PlayerA">
         <?php
            $sql = "SELECT player_a FROM score";
            $result = mysqli_query($conn, $sql);
            echo "<a>" . mysqli_fetch_assoc($result)['player_a'] . "</a><br>";
         ?>
         <button id="sub_a" class="button button_red" onclick="Sub('A')">-</button>
         <a class="score" id="A">
            <?php
               $sql = "SELECT player_a_score FROM score";
               $result = mysqli_query($conn, $sql);
               echo mysqli_fetch_assoc($result)['player_a_score'];
            ?>
         </a>
         <button id="add_a" class="button button_green" onclick="Add('A')">+</button>
      </div>
      <br>
      <div class="PlayerB" id="PlayerB">
      <?php
            $sql = "SELECT player_b FROM score";
            $result = mysqli_query($conn, $sql);
            echo "<a>" . mysqli_fetch_assoc($result)['player_b'] . "</a><br>";
         ?>
         <button id="sub_b" class="button button_red" onclick="Sub('B')">-</button>
         <a class="score" id="B">
            <?php 
               $sql = "SELECT player_b_score FROM score";
               $result = mysqli_query($conn, $sql);
               echo mysqli_fetch_assoc($result)['player_b_score'];
            ?>
         </a>
         <button id="add_b" class="button button_green" onclick="Add('B')">+</button>
      </div>
      <br>
      <div class="New" id="New">
         <button class="button" onclick="New()">New Week</button>
      </div>
   </div>
</body>
</html>
