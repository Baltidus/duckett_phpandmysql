<!DOCTYPE html>
<?php
$username = 'Ivy';
$order    = ['pencil', 'pen', 'notebook',];
?>
<?php
    error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
    require_once( "sample.php" );
?>

<h1>Basket</h1>
<?= $username ?>
<?php foreach ($order as $item) { ?>
    <?= $item ?><br>
<?php } ?>