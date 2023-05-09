<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Primer - If Statements</title>
</head>
<body>
  <h1>If Statements</h1>
  <?php
    $grade = 51;
    // ==, >, <, <=, >=, === examples of comparable operators
    if($grade >= 50){
      echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
    }
    else{
      echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
    }
    // if else
    $grade = 'C';
    if($grade == 'A'){
      echo '<h2>YOU ARE A SUPERSTAR</H2>';
    }
    elseif($grade == 'B'){
      echo '<h2>YOU DID WELL</H2>';
    }
    else{
      echo '<h2>YOU FAILED</H2>';
    }
  ?>
</body>
</html>