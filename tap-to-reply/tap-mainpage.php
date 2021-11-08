<!DOCTYPE html>
<html>

<head>
    <title>Tap-to-reply Main page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="container-fluid p-5 bg-secondary bg-gradient text-white text-center">
  <h1>Welcome to the Tap-to-reply Main Page!</h1>
  <p>stuff about product here</p> 
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3 class="bg-light bg-gradient">About</h3>
      <p>
      <h6>User Story:</h6>
      <b>As a</b> replier <br>
      <b>I want to</b> tap my reply <br>
      <b>So That</b> I don't wreck my car <br>
    </div>
    <div class="col-sm-4">
      <h3 class="bg-light bg-gradient">Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3 class="bg-light bg-gradient">Try it out</h3>        
      <p>In the form below, you can type in a sample question that will appear in the app.
        A default question is already set up if you choose not to submit a question.
        Click 'Go to app' to go to the app.</p>
        <form action="tapapp/tapapp.php" method="POST">
            <input type="text" name="question" value="Do you want to go out to the really cool concert tonight?" />
            <input type="submit" value="Go to app">
        </form>
        <form action="tapapp/tapapp2.php" method="POST">
            <input type="text" name="question" value="Do you want to go out to the really cool concert tonight?" />
            <input type="submit" value="Go to app 2">
        </form>
    </div>
  </div>
</div>
</body>

</html>