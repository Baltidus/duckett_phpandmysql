<?php
$tz_FRA   = new DateTimeZone('Europe/Paris');
$tz_TYO   = new DateTimeZone('Asia/Tokyo');
$location = $tz_FRA->getLocation();

$FRA      = new DateTime('now', $tz_FRA);
$TYO      = new DateTime('now', $tz_TYO);
$SYD      = new DateTime('now', 
                new DateTimeZone('Australia/Sydney'));
$USLA     = new DateTime('now', 
                new DAteTimeZone('America/Los_Angeles'))
?>
<?php include 'includes/header.php'; ?> 

<p><b>FRA: <?= $FRA->format('g:i a') ?></b> 
   (<?= ($FRA->getOffset() / (60 * 60)) ?>)<br>
   <b>TYO: <?= $TYO->format('g:i a') ?></b>
   (<?= ($TYO->getOffset() / (60 * 60)) ?>)<br>
   <b>SYD: <?= $SYD->format('g:i a') ?></b>
   (<?= ($SYD->getOffset() / (60 * 60)) ?>)<br>
   <b>USLA: <?= $USLA->format('g:i a') ?></b>
   (<?= ($USLA->getOffset() / (60*60)) ?>)<br></p>
  </p>
<h1>Head Office</h1>
<p><?= $tz_FRA->getName() ?><br>
  <b>Longitude:</b> <?= $location['longitude'] ?><br>
  <b>Latitude:</b>  <?= $location['latitude'] ?></p>	

<?php include 'includes/footer.php'; ?>