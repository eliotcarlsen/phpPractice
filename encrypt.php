<?php
    $input_number1 = $_GET["string"];
    $input_number2 = $_GET["string2"];
    $input_number3 = $_GET["string3"];
    $encryption_string = encryption($input_number1, $input_number2, $input_number3);

    function encryption($sentence1, $sentence2, $sentence3)
    {
        $reverse_sentence = strrev($sentence1);
        $capitalized_sentence = strtoupper($sentence2);
        $capitalized = strtoupper($sentence3);
        $capitalizedAndReveresed = strrev($capitalized);
        $final_string = $reverse_sentence . " " . $capitalized_sentence . " " . $capitalizedAndReveresed;
        return $final_string;
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Encrypt your Messages!</title>
  </head>
  <body>
    <ul>
      <li><?php echo $input_number1; ?></li>
      <li><?php echo $input_number2; ?></li>
      <li><?php echo $input_number3; ?></li>
    </ul>
    <p>Your encryption result is: <?php echo $encryption_string; ?></p>
  </body>
</html>
