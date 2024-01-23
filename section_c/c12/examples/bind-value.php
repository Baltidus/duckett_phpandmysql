<?php
require '../cms/includes/database-connection.php';
require '../cms/includes/functions.php';
$sql       = "SELECT forename, surname 
                FROM member 
               WHERE id = :id;";
$statement = $pdo->prepare($sql);
$id        = 2;
$statement->bindValue('id', $id, PDO::PARAM_INT);
$statement->execute();
$member    = $statement->fetch();
if (!$member) {
    include 'page-not-found.php';
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Using bindValue() to replace a SQL placeholder</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
  </head>
  <body>
    <p>
      <?= $member['forename'] ?>
      <?= html_escape($member['surname']) ?>
    </p>
  </body>
</html>