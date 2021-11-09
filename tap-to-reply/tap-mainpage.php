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
      <h6><u>User Story:</u></h6>
      <b>As a</b> replier <br>
      <b>I want to</b> tap my reply <br>
      <b>So That</b> I don't wreck my car </p><br>
      <p></p>
      <h6><u>Process:</u></h6>
      <b>Old way:</b>
      <ol>
        <li>Recieve a text message</li>
        <li>Tap on reply box</li>
        <li>Manually type out the response while trying not to make typos</li>
      </ol>
      <b>New way:</b>
      <ol>
        <li>The user receives a message</li>
        <li>The four possible response options pop up to be selected (The user can change the response options to what they want or what would fit the tone)</li>
        <li>The user selects the desired response by tapping one of the four quadrants of responses</li>
      </ol>
    </div>
    <div class="col-sm-4">
      <h3 class="bg-light bg-gradient">How to use</h3>
      <img src="anykey.jpg"  style="max-width: 70%; height: auto" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3 class="bg-light bg-gradient">Try it out</h3>        
      <p>In the forms below, you can type in a sample question that will appear in the app.
        A default question is already set up if you choose not to submit a question.
        Click 'Go to app' to go to the app.</p>
      <h6>Demo 1</h6>
      <p>This version has the main interface and has input boxes at the bottom of the page that
         will live update the response choices.
      </p>
      <form action="tapapp/tapapp.php" method="POST">
          <input type="text" name="question" value="Do you want to go out to the really cool concert tonight?" />
          <input type="submit" value="Go to app">
      </form><br>
      <h6>Demo 2</h6>
      <p>This version has the main interface with a settings icon at the top. This will go to the settings page where the
         user can change the 4 response choices. The save button will write the new responses to a JSON file and go 
         back to the main interface.
      </p>
      
      <form action="tapapp/tapapp2.php" method="POST">
          <input type="text" name="question" value="Do you want to go out to the really cool concert tonight?" />
          <input type="submit" value="Go to app 2">
      </form>
    </div>
    
  </div>
  
</div>
<p class="bg-secondary bg-gradient text-secondary" style="margin-bottom: 0px; margin-top: 10px">.</p>
</body>

</html>