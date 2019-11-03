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
    <form method="post">
      <input type="number" name="n" value="">
      <input type="submit" name="" value="Zatwierdź"><hr>
    </form>
    <table>
      <?php
      if (isset($_POST['n'])) {
        $n=$_POST['n'];
        $i=1;
        $j=1;
        $s=0;
        $ss=0;
        do {
          echo "<tr>";
          {
            do {
              if ($i==$j) {
                echo "<td bgcolor = red>".$i*$j."</td>";
                $s=$s+($i*$j);
                $j++;
              }
              elseif ($i==($n+1)-$j) {
                echo "<td bgcolor = blue>".$i*$j."</td>";
                $ss=$ss+($i*$j);
                $j++;
              } else
              {
                echo "<td>".$i*$j."</td>";
                $j++;
              }
            } while ($j <= $n);
            $j=1;
            echo "</tr>";
            $i++;
          }
        } while ($i<=$n);
      }
      ?>
    </table>
    <?php
    if (isset($_POST['n'])) {
     echo "Suma elementów na przekątnej wynosi ". $s."<br>";
    echo "Suma elementów na przekątnej nr 2 wynosi ". $ss;
    } ?>
  </body>
</html>
