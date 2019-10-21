
<!DOCTYPE html>
<html lang="en" class="htmls">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />


    <title>Sign In</title>
  </head>
  <body>
    <div class="bd">
      <div class="container" id="container">
        <div class="sec-1">
          <div class="form-container sign-up-container">
            <form action="includes/login.up.php" method="post">
              <h1>Create Account</h1>
              <?php 
              if(isset($_GET['error'])){
                if($_GET['error']=="emptyfields"){
                  echo '<p class="pr-glow">Fill In All Fields</p>';
                }
            
                elseif($_GET['error']=="invalidname"){
                  echo '<p class="pr-glow">Invalid Name</p>';
                }
                elseif($_GET['error']=="checkpassword"){
                  echo '<p class="pr-glow">Check Password</p>';
                }
                elseif($_GET['error']=="usertaken"){
                  echo '<p class="pr-glow">User Taken</p>';
                }
              }
              ?>
              <input type="text" name="Name" placeholder="Name" />
              <input type="email" name="Email" placeholder="Email" />
              <input type="password" name="Password" placeholder="Password" />
              <input
                type="password"
                name="Password-rep"
                placeholder="Recheck Password"
              />
              <select class="sq" name="SQ" required>
                <option > -- SELECT SEQURITY QUESTION --</option>
                <option value="s1">What is your oldest sibling's middle name?</option>
                <option value="s2">Where is your favorite place to vacation?</option>
                <option value="s3">What Is your favorite book?</option>
              </select>
              <span class="select-arrow"></span>
              <input type="answer" name="Ans" placeholder="Answer" />
              <button class="submit up" name="sign-up" type="submit">
                Sign Up
              </button>
            </form>
          </div>
          <div class="form-container sign-in-container">
            <form action="includes/login.in.php" method="post">
              <h1>Sign in</h1>

              <input type="email" name="email" placeholder="Email" />
              <input type="password" name="password" placeholder="Password" style="margin-bottom: 1.5rem;"/>
              <a href="reset.php">Forgot your password?</a>
              <button type="submit" name="sign-in" class="submit">Sign In</button>
            </form>
          </div>
          <div class="overlay-container">
            <div class="overlay">
              <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>
                  To keep connected with us please login with your personal info
                </p>
                <button class="ghost" id="signIn">Sign In</button>
              </div>
              <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>
