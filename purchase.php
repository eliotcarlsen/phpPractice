<?php
    $full_name = $_GET["name"];
    $street_address = $_GET["street"];
    $city = $_GET["city"];
    $state = $_GET["state"];
    $zip = $_GET["zip"];
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thank you for your purchase</title>
    </head>
    <body>
      <h4>Thank you <?php echo $full_name; ?> for your purchase!</h4>
      <p>Your order has been confirmed!  We will be sending this purchase to your house within 3 days.  Please confirm your address below.</p>
      <ul>
        <li><?php echo $street_address; ?></li>
        <li><?php echo $city; ?></li>
        <li><?php echo $state; ?></li>
        <li><?php echo $zip; ?></li>
      </ul>

   </body>
 </html>
