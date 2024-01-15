<?php 
$item    = 'Chocolate';
$stock   = 1;
$wanted  = 8;
$can_buy = ($wanted <= $stock);
$strcan_buy = (string)$can_buy;
$wannabuysome = "Test le";
$test = [
  1 => 'yes',
  "" => 'no',
];
$wannabuysome = $test[$strcan_buy];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Comparison Operators</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Shopping Cart</h2>
    <p>Item:    <?= $item ?></p>
    <p>Stock:   <?= $stock ?></p>
    <p>Wanted:  <?= $wanted ?></p>
    <p>Can buy: <?= $wannabuysome ?></p>
  </body>
</html>