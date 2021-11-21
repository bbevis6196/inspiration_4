<?php
$question = $_POST['question'];

preg_match_all('%\<(.*?)\>%i', $question, $matches, PREG_PATTERN_ORDER);
// $matches[1] is the array of the choices
$ansChoices = $matches[1];

$cleanQuestion = str_replace("<", "", $question);
$cleanQuestion = str_replace(">", "", $cleanQuestion);
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
      <p id="textquestion" class="pstyle graymessage"><?= $cleanQuestion ?></p>
      </div>
      <div id="responses">

        <?php
          foreach($ansChoices as $value) {
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