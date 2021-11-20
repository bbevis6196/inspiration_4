<!DOCTYPE html>
<html>

<head>
    <title>Settings</title>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tapapp.css">
</head>

<body ng-app="hi-angular" ng-controller="MainController">
    <div id="page">
        <div id="app">
            <div id="message">
                <div><button type="button" onclick="goBack()">Go back to app</button></div>
                <div>
                    <p class="abeezee-txt-white">Change your responses</p>
                </div>
                <div></div>
            </div>
            <div id="responses">
                <form action="write.php" method="POST" class="abeezee-txt-white">
                    <p>Enthusiastic Positive (top left): <input type="text" name="ep" required><br>
                    <p>Enthusiastic Negative (top right): <input type="text" name="en" required><br>
                    <p>Unenthusiastic Positive (bottom left): <input type="text" name="up" required><br>
                    <p>Unenthusiastic Negative (bottom right): <input type="text" name="un" required><br>
                    <input type="submit" value="save"/>
                </form>
            </div>
            <div id="send">
               
            </div>
        </div>

    </div>

    <!--<script src="tapapp.js"></script>-->
    <script>
        function goBack() {
            window.location.replace("tapapp2.php");
        }       
    </script>
</body>

</html>