<?php session_start();
$question = $_POST['question'];
$opt1 = $_POST['opt1'];
$opt2 = $_POST['opt2'];
$opt3 = $_POST['opt3'];
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
      <p id="textquestion"><?= $question ?><?= $opt1 . " " ?><?= $opt2 . " " ?><?= $opt3 . "? " ?></p>
      </div>
      <div id="responses">

        <button id="button1" type="button" class="btn"><?= $opt1 ?></button>
        <button id="button2" type="button" class="btn"><?= $opt2 ?></button>
        <button id="button3" type="button" class="btn"><?= $opt3 ?></button>

      </div>
      <div id="send">
        <p id="txtsend"></p>

      </div>

    </div>
  </div>
  <script src="qwxtapp.js"></script>
</body>

</html>