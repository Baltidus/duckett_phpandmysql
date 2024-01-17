<?php
$counter = $_COOKIE['counter'] ?? 0; // Get data
$counter = $counter + 1;             // +1 to counter 
$viewName = $_COOKIE['viewerName'];
setcookie('counter', $counter);    // Update cookie
setcookie('viewerName', 'Baltidus');

$message = 'Page views: ' . $counter; // Message
?>
<?php include 'includes/header.php'; ?> 

<h1>Welcome <?= $viewName ?></h1>
<p><?= $message ?></p>
<p><a href="cookies.php">Refresh this page</a> to see the page views increase.</p>

<?php include 'includes/footer.php'; ?> 