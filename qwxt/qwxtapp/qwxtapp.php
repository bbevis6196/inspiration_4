<?php session_start();
$question = $_POST['question'];


function getInbetweenStrings($start, $end, $str){ 
  $matches = array(); 
  $regex = "/$start([a-zA-Z0-9_]*)$end/"; 
  preg_match_all($regex, $str, $matches); 
  return $matches[1]; 
} 
$str_arr = getInbetweenStrings("<", ">", $question); 

$cleanQuestion = str_replace("<", " ", $question);
$cleanQuestion = str_replace(">", " ", $cleanQuestion);
 ?>

<!DOCTYPE html>
<html>

<head>

  <title>QWXT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="qwxtapp.css">
</head>

<body>
  <div id="page">
    <div id="app">
      <div id="msg">
      <p id="textquestion"><?= $cleanQuestion ?></p>
      </div>
      <div id="responses">

        <?php
          foreach($str_arr as $value) {
            echo "<button type='button' class='btn'>$value</button>";
          };
        ?>
    
      </div>
      <div id="send">
        <p id="txtsend"></p>

      </div>

    </div>
  </div>
  <script src="qwxtapp.js"></script>
</body>

</html>