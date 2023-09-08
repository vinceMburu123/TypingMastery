<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Typing Test</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"/>
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
        <h1>INSTRUCTIONS!</h1>
        <p1>Type out the sentence below.<br>
            ->  Click on the 'Start-Test' button to begin.<br>
            ->  GoodLuck</p1>
      <div
        id="quote"
        onmousedown="return false"
        onselectstart="return false"
      ></div>
        
      <textarea
        rows="3"
        id="quote-input"
        placeholder="Type here to begin"
      ></textarea>
        
        <div class="stats">
        <button id="settings-btn" class="settings-btn">    
    </button>
    <div class="stats">
        <p>Countdown: <span id="timer">0s</span></p>
        <p>Mistakes: <span id="mistakes">0</span></p>
        <button id="start-test" onclick="startTest()">Start Test</button>
      <button id="stop-test" onclick="displayResult()">Stop Test</button>
    
    <div id="settings" class="settings">
      <form id="settings-form">
        <div>
          <label for="difficulty">Difficulty</label>
          <select id="difficulty"><br>
            <option value="easy">Easy</option>
            <option value="medium">Medium</option>
            <option value="hard">Hard</option>
          </select>
        </div>
      </form>
    </div>
     
    </div>
    <
        
        
     
      <div class="result">
        <h3>Result</h3>
        <div class="wrapper">
          <p>Accuracy: <span id="accuracy"></span></p>
          <p>Speed: <span id="wpm"></span></p>
        </div>
       <button id="refresh" onClick="window.location.reload();">Try Again</button>
       
      </div>
    </div>
 

    <!-- Script -->
    <script src="script.js"></script>
  </body>
</html>