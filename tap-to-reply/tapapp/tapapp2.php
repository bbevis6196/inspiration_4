<?php session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['question'] = $_POST['question'];
} 

header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tap-to-Reply</title>
    <!--<script>
        caches.open('v1').then(function(cache) {
            cache.delete('responses.json').then(function(response) {
                //someUIUpdateFunction();
            });
        });
    </script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1"/>
    <link rel="stylesheet" href="tapapp.css">
</head>

<body ng-app="hi-angular" ng-controller="MainController">
    <div id="page">
        <div id="app">
            <div id="message">
                <p id="txtquestion" class="pstyle graymessage"><?= $_SESSION['question'] ?></p>
                <div id="settingsdiv">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-gear-wide-connected" viewBox="0 0 16 16" onclick="settingsFunction()">
                        <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"/>
                    </svg>
                </div>
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

    <script src="tapapp.js"></script>
    
</body>

</html>