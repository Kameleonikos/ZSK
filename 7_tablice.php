<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function value($a):string
    {
      if ($a<0) {
        return "ujemna";
      }
      elseif ($a>0) {
        return "dodatnia";
      }
      else {
        return "0";
      }
    }
    $x = value(-5);
    echo "$x<br>";
    echo gettype($x),"<br>";

    function getValue():int
    {
      return 10.55;
    }

    echo getValue(),'<hr>';

    //zasięg zmiennych

    $x=10;
    function show()
    {
      echo "Wartość zmiennej \$x wynosi: ";
      $GLOBALS['x'] = 20;
      echo $GLOBALS['x'];
    }
    show();
    echo "<hr>";

    $y = 10;
    function showY()
    {
      global $y;
      echo "Wartość zmiennej \$y wynosi: $y<br>";
      $y = 15;
      echo "Wartość zmiennej \$y wynosi: $y<hr>";
    }
    showY();
    echo "$y<hr>";

    function suma()
    {
      $liczba = 10;
      echo "Zmienna \$liczba wynosi: $liczba<br>";
      $liczba += 10;
    }
    echo suma();//10
    echo suma();//10

    function suma1()
    {
      static $liczba = 10;
      echo "Zmienna \$liczba wynosi: $liczba<br>";
      $liczba += 10;
    }
    echo suma1();//10
    echo suma1();//20
    echo suma1();//30
    echo "<hr>";

    //argumenty

    function dodaj($x,$y=1)
    {
      return $x + $y;
    }

    $z=20;
    echo dodaj($z,6),'<br>';
    echo dodaj(2,5),'<br>';
    echo dodaj(2),'<hr>';

    //argumenty i typy danych

    function mnozenie(float $x, int $y)
    {
      return $x*$y;
    }

    echo mnozenie(3,4);//12
    echo mnozenie(3.5,2);//7
    echo mnozenie(2,3.5);//6
    echo mnozenie(2,3.99999);//6
     ?>
  </body>
</html>
