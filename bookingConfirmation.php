<?php
    $full_name = $_GET["name"];
    $date = $_GET["date"];
    $start = $_GET["start"];
    $end = $_GET["end"];
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Confirmation</title>
  </head>
  <body>
    <p>Hello, <?php echo $full_name; ?>!  Thank you for reserving your spot in the climbing seminar!  This is to confirm you have an appointment on <?php echo $date; ?> at <?php echo $start; ?> to <?php echo $end; ?>.</p>

  </body>
</html>
