<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" class="htmls">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />


    <title>VERIFICATION</title>
  </head>
  <body>
<div class="bd">
      <div class="container">
        <div class="sec-1">
        
          <div class="form-container sign-in-container">
            <form action="includes/login.ver.php" method="post">
              <h1>Verification</h1>
              <input type="email"name="email" placeholder="Email" />
             <select class="sq" name="SQ" required>
                <option > -- SELECT SEQURITY QUESTION --</option>
                <option value="s1">What is your oldest sibling middle name?</option>
                <option value="s2">Where is your favorite place to vacation?</option>
                <option value="s3">What Is your favorite book?</option>
              </select>
              <span class="select-arrow"></span>
              <input type="answer" name="Ans" placeholder="Answer" />

              <button type="submit" name="verify" class="submit">Verify</button>
            </form>
          </div>

          <div class="overlay-container">
            <div class="overlay">
               
              <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your registered email and ansewer the security question to change password</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>