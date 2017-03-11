<?php
    $name = $_GET["name"];
    $color = $_GET["color"];
    $activity = $_GET["activity"];
    $email = $_GET["email"];
    $birthdate = $_GET["date"];
    $number = $_GET["number"];
    $password = $_GET["password"];
    $movie = $_GET["movie"];
    $website = $_GET["website"];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Survey Results</title>
  </head>
  <body>
    <p>Thanks <?php echo $name; ?> for filling out our survey!  We also like the color <?php echo $color; ?> and the activity <?php echo $activity; ?>.  We'll send you more info about this survey to <?php echo $email; ?>.  And send you a birthday card on <?php echo $birthdate; ?>.  I'm surprised that your favorite number is <?php echo $number; ?> and that you use the password <?php echo $password; ?>.  That is interesting.  I would like to see <?php echo $movie; ?> someday.  And I'll have to check out the website <?php echo $website; ?>.</p>
  </body>
</html>
