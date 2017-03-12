<?php
    $input_number = $_GET["number"];
    $square_number = squareCalculator($input_number);

    function squareCalculator($number)
    {
        $result = $number * $number;
        return $result;
    }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Result</title>
  </head>
  <body>
    <p>The square of your number is <?php echo $square_number; ?>.</p>

  </body>
</html>
