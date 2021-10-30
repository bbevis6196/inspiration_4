<!DOCTYPE html>
<html>

<head>
    <title>Tap-to-reply Main page</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Welcome to the Tap-to-reply Main Page!</h1>
    <p>stuff about product here</p>
    <p>In the form below, you can type in a sample question that will appear in the app.
        A default question is already set up if you choose not to submit a question.
        Click 'Go to app' to go to the app.</p>
    <form action="tapapp/tapapp.php">
        <input type="text" name="question" />
        <input type="submit" value="Go to app">
    </form>
    <form action="tapapp/tapapp2.php">
        <input type="text" name="question" />
        <input type="submit" value="Go to app 2">
    </form>
</body>

</html>