<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Podaj ilość osób w rodzinie</p>
    <form method="post">
      <input type="number" name="ilosc" value="">
      <input type="submit" name="przycisk" value="Zatwierdź">
    </form>
    <hr>
    <?php
      if (isset($_POST['przycisk'])) {
        if ($_POST['ilosc']>=1 && $_POST['ilosc']<=70) {
          $n=$_POST['ilosc'];
          for ($i=1; $i <= $n; $i++) {
            echo "<input type=\"number\" name=\"$i\"> <br>";
          }
          ?>
        <?php
        }
        else {
          echo "Zła liczba osób w rodzinie";
        }
      }
     ?>
  </body>
</html>
