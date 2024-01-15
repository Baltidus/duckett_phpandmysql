<?php
$stock = 32;
function get_stock_message($stock)
{
    $message_updated_from_stock = 'No Stock';
    if ($stock >= 10) {
        $message_updated_from_stock = "Good availability";
        return $message_updated_from_stock;
    }
    if ($stock > 0 && $stock < 10) {
        $message_updated_from_stock = "Low stock";
    }
    return $message_updated_from_stock;
}
?>
<!DOCTYPE html>
<html> 
  <head>
    <title>Multiple Return Statements</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p><?= get_stock_message($stock) ?></p>
  </body>
</html>