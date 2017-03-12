<?php
    $weight_number = $_GET["weight_number"];
    $distance_number = $_GET["distance_number"];

    $solution = calculateShipping($weight_number, $distance_number);

    function calculateShipping($weight, $distance)
    {
        $price = ($distance/$weight) + 5;
        return $price;
    }






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
