<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style1.css" />

    <title>Redirecting to main page</title>
  </head>
  <body class="back">
    <div class="box">
      <h1 class="c4">
        Thank You
      </h1>
    </div>
    <script>
    var count = 3;
var redirect = "index.php";
function countDown() {
  var timer = document.getElementById("timer");
  if (count > 0) {
    count--;

    setTimeout("countDown()", 1000);
  } else {
    window.location.href = redirect;
  }
}
countDown();
    </script>
  </body>
</html>
