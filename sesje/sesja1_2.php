<?php
session_start();
unset($_SESSION['name']);
session_destroy();

$url='./sesja1.php';
echo '<script>window.location="'.$url.'";</script>';
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Witany <?php
    if (isset($_SESSION['name'])) {
      echo $_SESSION['name'];
    }
    ?> na stronie!<br>
    Identyfikator sesji: <?php echo session_id(); ?><br>
    <a href="./sesja1.php">Początkowa strona</a><br>
  </body>
</html>
