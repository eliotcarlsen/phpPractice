<?php
    $month = $_GET["month"];
    $message = fortune($month);

    function fortune($month)
    {
        if($month == "August") {
          return "You will live a long and healthy life!";
        }
        elseif ($tmonth == "January") {
          return "You will live a great life!";
        }
        else {
          return "You will have a great life!";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Fortune Teller</title>
</head>
<body>
    <div class="container">
        <h1><?php echo $message; ?></h1>
    </div>
</body>
</html>
