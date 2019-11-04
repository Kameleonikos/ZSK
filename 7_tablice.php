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

    echo "<hr>";

    //Tablice indeksowane numerycznie

    $kolory = array('Biały','Zielony','Czerwony' );
    echo "Początkowa wartość tablicy:<br>";
    for ($i=0; $i < count($kolory); $i++) {
      $elem=$i+1;
      echo "Element $elem: $kolory[$i]<br>";
    }
echo "<hr>";
    function wypisz($tab)
    {
      for ($i=0; $i < count($tab); $i++) {
        $elem=$i+1;
        echo "Element $elem: $tab[$i]<br>";
      }
    }

    wypisz($kolory);
echo "<hr>";
    //Tablice asocjacyjne

    $dane = array
    (
      'imie' => 'Janusz',
      'nazwisko' => 'Nowak',
      'wiek' => 20,
      'narodowosc' => 'Polska'
    );

    echo "Zawartość tablicy o nazwie \$dane:<br>";
    echo <<< TAB
    Imię: $dane[imie]<br>
    Nazwisko: $dane[nazwisko]<br>
    Wiek: $dane[wiek]<br>
    Narodowość: $dane[narodowosc]<br>
    TAB;
echo "<hr>";
    //foreach

    foreach ($dane as $value) {
      echo "Warość $value<br>";
    }
    echo "<hr>";

    foreach ($dane as $key => $value) {
      echo "Element[$key] = $value<br>";
    }
    echo "<hr>";

    //Tablice wielowymiarowe

    $uczen = array(
      array('Katarzyna', 'Nowak', 30),
      array('Anna', 'Nowacka', 20),
      array('Paweł', 'Nowak', 35)
    );

    for ($j=0; $j < count($uczen); $j++) {
      for ($p=0; $p < count($uczen[$j]); $p++) {
        echo $uczen[$j][$p],' ';
      }
      echo "<br>";
    }
    echo "<hr>";

    foreach ($uczen as $key => $value) {
      foreach ($value as $key2 => $data) {
        echo $data,' ';
      }
      echo "<br>";
    }

    echo "<hr>";

    //Tablica 3wymiary i wyświetl
     $tabl = array(
       array(
         array('27','45','32'),
         array('23','49','35'),
         array('21','44','30')
       )
     );

     for ($j=0; $j < count($tabl); $j++) {
       for ($p=0; $p < count($tabl[$j]); $p++) {
         for ($s=0; $s < count($tabl[$j][$p]); $s++) {
           echo $tabl[$j][$p],' ';
         }
         echo "<br>";
       }
       echo "<br>";
     }
     ?>
  </body>
</html>
