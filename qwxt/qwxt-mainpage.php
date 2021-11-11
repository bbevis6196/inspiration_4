<!DOCTYPE html>
<html>

<head>
    <title>QWXT Main page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="container-fluid p-5 bg-secondary bg-gradient text-white text-center">
  <h1>Welcome to the QWXT Main Page!</h1>
  <p>Placeholder</p> 
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3 class="bg-light bg-gradient">About</h3>
      <p>
      <h6><u>User Story:</u></h6>
      <b>As a</b> txt questioner <br>
      <b>I want </b> an actual answer to my question <br>
      <b>So That</b>  I don't loose my <g-emoji class="g-emoji" alias="frog" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f438.png">🐸</g-emoji>'ing mind   </p><br>
      <p></p>
      <h6><u>Process:</u></h6>
      <b>Old way:</b>
      <ol>
        <li>1. Person A sends a question that requires one of at least two different options to Person B.</li>
        <li>2. Person B replies "yes", which does not answer the question and annoys Person A greatly</li>
      </ol>
      <b>New way:</b>
      <ol>
        <li>1. Person A sends a question that requires one of at least two different options to Person B.</li>
        <li>2. The app will find the multiple options and will give only the correct possible responses to Person B.</li>
        <li>3. Person B taps on one of the response options and properly replies to Person A's liking.</li>
      </ol>
    </div>
    <div class="col-sm-4">
      <h3 class="bg-light bg-gradient">How to use</h3>
      <p>This app aims to provide the ability to answer quesitons that need more than just a "Yes" or "No".</p>
      <p>With this app you will be able to answer more detailed questions with more specifc answers. So simple a cat could use it!! </p>
      <p>For example: <br>
        ..............</p>
      <img src="cat.jpg"  style="max-width: 70%; height: auto" />
    </div>
    <div class="col-sm-4">
      <h3 class="bg-light bg-gradient">Try it out</h3>        
      <p>Placeholder</p>
      <h6>Demo </h6>
      <p>This version of the app has a pre-defined question and answer key for functionality.
      </p>
      <form action="qwxtapp/qwxtapp.php" method="POST">
          Quesiton:
          <input type="text" name="question" required /><br>
          Option 1
          <input type="text" name="opt1" required /><br>
          Option 2
          <input type="text" name="opt2" required/><br>
          Option 3
          <input type="text" name="opt3" required/><br>

          <input type="submit" value="Go to QWXT">
      </form><br>
      
    </div>
    
  </div>
  
</div>
<p class="bg-secondary bg-gradient text-secondary" style="margin-bottom: 0px; margin-top: 10px">.</p>
</body>

</html>