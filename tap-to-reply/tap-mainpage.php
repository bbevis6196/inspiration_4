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
  <h1>Welcome to the Tap-To-Reply Main Page!</h1>
  <p>Making it easier and faster to reply to a message.</p> 
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16" style="margin-right: 10%">
    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
    <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
  </svg>
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
      <p></p>
      <img src="anykey.jpg"  style="max-width: 70%; height: auto" />
      <p></p>
      <p>The main interface will display a question at the top of the window. Below that, in the mid section of the window, there
         will be four response options contained in click-able buttons. Clicking on one of the options will display the selected response
         at the bottom of the window, simulating sending the reply. 
      </p>

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
          <input type="text" class="form-control" name="question" value="Do you want to go out to the really cool concert tonight?" />
          <input type="submit" class="btn btn-outline-info" value="Go to app (Demo 1)">
      </form><br>
      <h6>Demo 2</h6>
      <p>This version has the main interface with a settings icon at the top. Clicking the settings icon will send you
         to the settings page where you can change the 4 response choices. The save button will write the new responses 
         to a JSON file and send you back to the main interface. <br>
         **Currently, there is an issue with Heroku where the newly written to JSON file does not immediately refresh. 
         This issue does not exist when running the app locally.**
      </p>
      
      <form action="tapapp/tapapp2.php" method="POST">
          <input type="text" class="form-control" name="question" value="Do you want to go out to the really cool concert tonight?" />
          <input type="submit" class="btn btn-outline-info" value="Go to app (Demo 2)">
      </form>
    </div>
    
  </div>
  
</div>
<p class="bg-secondary bg-gradient text-secondary" style="margin-bottom: 0px; margin-top: 10px">.</p>
</body>

</html>