<?php
/*
This screen display the name of the current member's name 
and details of the current offer 
*/
$name = "Joffrey";
$price = 2; 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>echo Command</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2><?php echo $name; //display greetings with name?>'s page</h2>
    <?php echo '<p class="offer">Offer: 20% off</p>' #Display reduction's offer ?>
    <p>
      The cost of your candy pack is $<?php echo $price; ?> per pack.
    </p>
  </body>
</html>