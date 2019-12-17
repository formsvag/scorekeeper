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
         <?php include 'db.php';?>
      </div>
      <div class="PlayerA" id="PlayerA">
         <a>Jonas</a><br> 
         <button class="button button_red" onclick="Sub('A')">-</button>
         <a class="score" id="A">0</a>
         <button class="button button_green" onclick="Add('A')">+</button>
      </div>
      <br>
      <div class="PlayerB" id="PlayerB">
         <a>Rikard</a><br> 
         <button class="button button_red" onclick="Sub('B')">-</button>
         <a class="score" id="B">0</a>
         <button class="button button_green" onclick="Add('B')">+</button>
      </div>
      <br>
      <div class="New" id="New">
         <button class="button" onclick="New()">New Week</button>
      </div>
   </div>
</body>
</html>