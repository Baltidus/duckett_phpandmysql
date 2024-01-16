<?php
$text = 'Home and family';
?>
<?php include 'includes/header.php'; ?>
<p>
  <b>First match (case-sensitive):</b>
  <?= strpos($text, 'ho') ?><br>
  <b>First match (not case-sensitive):</b>
  <?= stripos($text, 'me', 5) ?><br>
  <b>Last match (case-sensitive):</b>
  <?= strrpos($text, 'Ho') ?><br>
  <b>Last match (not case-sensitive):</b>
  <?= strripos($text, 'Ho') ?><br>
  <b>Text after first match (case-sensitive):</b>
  <?= strstr($text, 'ho') ?><br>
  <b>Text after first match (not case-sensitive):</b>
  <?= stristr($text, 'ho') ?><br>
  <b>Text between two positions:</b>
  <?= substr($text, 5, 3) ?><br>
  <b> Checks if a substring is found: </b>
  <?= str_contains($text, 'm')?><br>
</p>
<?php include 'includes/footer.php'; ?>