<?php
    $sentence1 = $_GET["string"];
    $upper_sentence1 = strtoupper($sentence1);
    $sentence2 = $_GET["string2"];
    $word_number = str_word_count($sentence2);
    $sentence3 = $_GET["string3"];
    $shuffle_string = str_shuffle($sentence3);
    $sentence4 = $_GET["string4"];
    $letter_finder = stripos($sentence4, "man");

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php echo $upper_sentence1; ?>
    <br>
    <?php echo $word_number; ?>
    <br>
    <?php echo $shuffle_string; ?>
    <br>
    <?php echo $letter_finder; ?>
  </body>
</html>
