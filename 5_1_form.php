<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="i" placeholder="Imię"><br>
      <input type="number" name="w" placeholder="Wiek"><br>
      <input type="submit" name="przycisk" value="Zatwierdz"><hr>
    </form>
    <?php
      if (!empty($_POST['i']) && !empty($_POST['w'])) {
        $i = $_POST['i'];
        $w = $_POST['w'];
        echo 'Dane przed poprawą: ',$i,'<br>';
        echo "Długość imienia: ",strlen($i),'<br>';
        $ip=ucfirst(strtolower(substr(trim($i),0,10)));
        echo 'Dane poprawne: ',$ip,'<br>';
        echo "Długość imienia: ",strlen($ip),'<hr>';
    ?>
    <table>
      <tr>
        <th>Imię</th>
        <th>Wiek</th>
      </tr>
      <tr>
        <td><?php echo $ip; ?></td>
        <td><?php echo $w; ?></td>
      </tr>
    </table>
    <?php
      }
     ?>
  </body>
</html>
