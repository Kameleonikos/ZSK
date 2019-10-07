<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="name" placeholder="Podaj swoje imię"><br><br>
      <input type="radio" name="color" value="r">Red<br><br>
      <input type="radio" name="color" value="g">Green<br><br>
      <input type="radio" name="color" value="b">Blue<br><br>
      <input type="submit" name="button" value="Wyślij"><br><br>
    </form>
    <?php
if (!empty($_POST['name'])&& !empty($_POST['color'])) {
  $name=$_POST['name'];
  $color=$_POST['color'];
  echo "Ulubiony kolor $name to $color";
}
     ?>
  </body>
</html>
