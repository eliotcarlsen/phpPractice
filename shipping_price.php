<?php
    $weight_number = $_GET["weight_number"];
    $distance_number = $_GET["distance_number"];
    $weight_solution = $weight_number / 20;
    $distance_solution = $distance_number / 20;
    $solution = $distance_solution + $weight_solution;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Answer Below</title>
</head>
<body>
    <h1>Shipping Calculator</h1>
    <p>With an item that weighs <?php echo $weight_number; ?> pounds and needing to ship it <?php echo $distance_number; ?> miles, the price of shipping your item is $<?php echo $solution; ?> .</p>
</body>
</html>
