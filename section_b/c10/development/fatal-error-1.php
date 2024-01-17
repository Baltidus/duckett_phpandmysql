<?php
$price    = 7;
$quantity = '5';
$int_quantity = intval($quantity);
$total    = $price * $int_quantity;
?>
<h1>Basket</h1>
Total: $<?= $total ?>