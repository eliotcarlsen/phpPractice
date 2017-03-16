<?php
    $temp = $_GET["user_temp"];
    $message = tempReader ($temp);

    function tempReader($temperature)
    {
        if($temperature <= 60) {
          return "It's cold out!";
        }
        elseif ($temperature > 80) {
          return "It's too hot!";
        }
        else {
          return "It's lovely out!";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Guess My Number</title>
</head>
<body>
    <div class="container">
        <h1><?php echo $message; ?></h1>
    </div>
</body>
</html>
