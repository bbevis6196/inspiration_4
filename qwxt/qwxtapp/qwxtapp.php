<?php session_start()
//$question = $_POST['question'];
  ?>
<!DOCTYPE html>
<html>

<head>

  <title>QWXT</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="qwxtapp.css">
</head>

<body>
  <div id="page">
    <div id="app">
      <div id="msg">
      <!-- <p><?= $question ?></p> -->
      <p id="textquestion">Would you like to Go Out, Cook Out, or Other?</p>
      </div>
      <div id="responses">

        <button id="button1" type="button" class="btn">Go Out!</button>
        <button id="button2" type="button" class="btn">Cook Out!</button>
        <button id="button3" type="button" class="btn">Other!</button>

      </div>
      <div id="send">
        <p id="txtsend"></p>

      </div>

    </div>
  </div>
  <script src="qwxtapp.js"></script>
</body>

</html>