<?php
$start      = strtotime('January 1 2021');
$today = date('l, d M Y');
$nextWeekTP = mktime(0 ,0, 0, date('m'), date('d')+7, date('Y'));
$end        = mktime(0, 0, 0, date('m'), date('d')-1, date('Y'));
$start_date = date('l, d M Y', $start);
$end_date   = date('l, d M Y', $end);
$nextWeek = date('l, d m Y', $nextWeekTP);
?>
<?php include 'includes/header.php'; ?>

  <p><b>Sale starts:</b> <?= $today ?></p>
  <p><b>Sale tests:</b> <?= $nextWeek ?></p>
  <p><b>Sale ends:</b> <?= $end_date ?></p>

<?php include 'includes/footer.php'; ?>