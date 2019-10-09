<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if (!empty($_GET['i'])) {
      echo $_GET['i'];
    } else {?>
      <form method="get">
        <input type="text" name="i" placeholder="Imię" autofocus><br>
        <input type="submit" name="przycisk" value="Zatwierdź"><hr>
      </form>
  <?php } ?>
  </body>
</html>
