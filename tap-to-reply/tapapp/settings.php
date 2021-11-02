<!DOCTYPE html>
<html>

<head>
    <title>Settings</title>
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
                <div><button type="button" onclick="goBack()">Go back to app</button></div>
                <div></div>
                <div></div>
            </div>
            <div id="responses">
               
            </div>
            <div id="send">
               
            </div>
        </div>

    </div>

    <script src="tapapp.js"></script>
</body>

</html>