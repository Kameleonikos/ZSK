<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      table, tr, td
      {
        border: solid 1px grey;
        border-collapse: collapse;
        text-align: center;
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <table>
      <?php
      $i=1;
      $j=1;
      $s=0;
      do {
        echo "<tr>";
        {
          do {
            if ($i==$j) {
              echo "<td bgcolor = red>".$i*$j."</td>";
              $s=$s+($i*$j);
              $j++;
            }
            elseif ($i==11-$j) {
              echo "<td bgcolor = blue>".$i*$j."</td>";
              $ss=$ss+($i*$j);
              $j++;
            } else
            {
              echo "<td>".$i*$j."</td>";
              $j++;
            }
          } while ($j <= 10);
          $j=1;
          echo "</tr>";
          $i++;
        }
      } while ($i<=10); ?>
    </table>
    <?php echo "Suma elementów na przekątnej wynosi ". $s."<br>";
    echo "Suma elementów na przekątnej nr 2 wynosi ". $ss; ?>
  </body>
</html>
