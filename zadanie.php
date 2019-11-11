<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>Podaj ilość osób w rodzinie</p>
    <form method="post">
      <input type="number" name="number" value="">
      <input type="submit" name="przycisk" value="Zatwierdź">
    </form>
    <hr>
    <?php
    if(isset($_POST["number"])){
      echo "<form method=\"post\">";
      $a=$_POST["number"];
      echo "<input type=\"number\" name=\"number\" value=\"$a\" hidden>";
      echo '<input type="submit" name="ob" value="Oblicz"><br>';
      for($i=1;$i<=$a;$i++){
          echo "<input type=\"number\" name=\"wiek$i\" value=\"\"><br><br>";
      }
      echo "</form>";
    }
    else{
      echo "Podałeś błędną liczbę osób";
    }
    if(isset($_POST["ob"])){
    $l=[];
    $a=$_POST["number"];
    for($i=1;$i<=$a;$i++)array_push($l,$_POST["wiek".$i]);
    $n=0;
    for($i=0;$i<count($l);$i++){
      $n+=$l[$i];
    }
    $mian = sizeof($l);
    $min=min($l);
    $maks=max($l);
    echo "<ul><li>Średni wiek: ".$n/$mian." lat</li><li>Najmłodsza osoba ma ".$min." lat</li><li> Najstarsza osoba w rodzinie ma: ".$maks." lat</li></ul>";
    };
     ?>
  </body>
</html>
