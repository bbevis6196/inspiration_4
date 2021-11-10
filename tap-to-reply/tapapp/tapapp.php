<?php
$question = $_POST['question'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tap-to-Reply</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tapapp.css">
</head>

<body ng-app="hi-angular" ng-controller="MainController">
    <div id="page">
        <div id="app">
            <div id="message">
                <p id="txtquestion" class="pstyle graymessage"><?= $question ?></p>
            </div>
            <div id="responses">
                <div class="row">
                    <div id="msg-e-p" class="msg">
                        <p class="responses">{{ msg.ep }}</p>

                    </div>
                    <div id="msg-e-n" class="msg">
                        <p class="responses">{{ msg.en }}</p>
                    </div>
                </div>
                <div class="row">
                    <div id="msg-u-p" class="msg">
                        <p class="responses">{{ msg.up }}</p>
                    </div>
                    <div id="msg-u-n" class="msg">
                        <p class="responses">{{ msg.un }}</p>
                    </div>
                </div>

            </div>
            <div id="send">
                <p id="txtsend"></p>
            </div>
        </div>

    </div>
    <input ng-model="msg.ep"></input>
    <input ng-model="msg.en"></input>
    <input ng-model="msg.up"></input>
    <input ng-model="msg.un"></input>

    <script src="tapapp.js"></script>
</body>

</html>