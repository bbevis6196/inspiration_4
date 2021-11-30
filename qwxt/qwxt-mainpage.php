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
  <p>The goal of QWXT is to answer a question, with a text. </p> 
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
      <h6><u><b>User Story:</b></u></h6>
      <b>As a</b> txt questioner <br>
      <b>I want </b> an actual answer to my question <br>
      <b>So That</b>  I don't loose my <g-emoji class="g-emoji" alias="frog" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f438.png">🐸</g-emoji>'ing mind   </p><br>
      <p></p>
      <h6><u><b>Process:</b></u></h6>
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
      <img src="frustration.jpg" style="max-width: 70% ; height: auto" />
      <p></p>

      <p>When launching the app you will input a question with defined answers using "[" "]" brakets. For example, Would you like to [Go Out], [Cook Out], or [Other]. The main interface of the app will display your question at the top of the window. Below that, the responses the user inputs in the question will be displayed as click-able buttons. Clicking on one of the options will display the selected response at the bottom of the window, simulating sending the reply.
      </p>
      
    </div>
    <div class="col-sm-4">
      <h3 class="bg-light bg-gradient">Try it out</h3> 
      <p>Enter any question in the text box below.</p>       
      <form action="qwxtapp/qwxtapp.php" method="POST">
          <b>Quesiton:</b>
          
          <input type="text" name="question" required /><br>
          <p></p>
          

          <input type="submit" value="Go to QWXT">
      </form><br>
      
    </div>
    
  </div>
  
</div>
<p class="bg-secondary bg-gradient text-secondary" style="margin-bottom: 0px; margin-top: 10px">.</p>
</body>

</html>