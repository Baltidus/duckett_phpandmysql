<?php
$stars   = '';
$message = '';
$star_ratings = ["nul", "pas si nul","moyen nul","bien nul","hyper nul",];
$result = $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stars   = $_POST['stars'] ?? '';
    $valid   = in_array($stars, $star_ratings);
    $message = $valid ? 'Thank you' : 'Select an option';
    var_dump($_POST['stars']);

}
?>
<?php include 'includes/header.php'; ?>

<?= $message ?>
<form action="validate-options.php" method="POST">
  Star rating:
  <?php foreach ($star_ratings as $option) { ?>
      <?= $option ?> <input type="radio" name="stars"
            value="<?= $option ?>"
            <?= ($stars == $option) ? 'checked' : '' ?>>
  <?php } ?>
  <input type="submit" value="Save">
</form>

<?php include 'includes/footer.php'; ?>