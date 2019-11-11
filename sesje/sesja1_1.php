<?php
session_start();
$_SESSION['name']='Janusz';
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Witany <?php echo $_SESSION['name']; ?> na stronie!<br>
    Identyfikator sesji: <?php echo session_id(); ?><br>
    <a href="./sesja1_2.php">Następna strona</a><br>
  </body>
</html>
