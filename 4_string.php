<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $pos=strpos('cdefgcde','cde');
      echo $pos; //0

      //Czy w ciągu text1 znajduje się text2
      $text1='abcdabcd';
      $text2=`abc`;

      if (strpos($text1,$text2) === false)
        {
          echo "<br>Ciąg $text2 nie został znaleziony w ciągu $text1";
        }
        else
        {
          echo "<br>Ciąg $text2 nie został znaleziony w ciągu $text1";
        }

        //przetwarzanie ciągu znaków

        $replace=str_replace('zsk', 'szkoła', 'zsk Poznań');
        echo $replace,'<br>';

        //substring

        echo substr('Janusz Kowalski', 3),'<br>'; //usz Kowalski
        echo substr('Janusz Kowalski', -3),'<br>'; //ski
        echo substr('Janusz Kowalski', 7,5),'<br>'; //Kowal
        echo substr('Janusz Kowalski', -8,-3),'<br>'; //Kowal
        echo substr('Janusz Kowalski', -8,5),'<br>'; //Kowal

        //zamiana polskich znaków

        $login='żąkil';
        $censore= array('ż','ą','ć');
        $replace= array('z','a','c');

        $newLogin=str_replace($censore,$replace,$login);
        echo $login,'<br>';
        echo $newLogin;

        ob_clean();//czyści ekran

        /*
        Napisz aplikację cenzurującą zdanie podane przez użytkownika, użytkownik podaje dane z formularza.
        Zamień słowa "biały, czarny" na cią znaków **#####** wyświetl dane w formacie:
        Dane pobrane od użytkowanika: ...
        Poprawione dane:
        */
        echo <<< FORM
        <form method="post">
          <input type="text" name="dane" placeholder="Wpisz dane"><br><br>
          <input type="submit" name="button" value="Zatwierdź">
        </form>
        FORM;
        if (isset($_POST['dane'])) {
          $data=$_POST['dane'];
          //echo $data;
          $znaki = array('biały','czarny');
          $cenzura = '**#####**';
          $poprawne = str_ireplace($znaki,$cenzura,$data);
          echo "Dane pobrane od użytkowanika: $data<br>";
          echo "<h3>Poprawione dane: $poprawne<h3><br>";
        }

    ?>

  </body>
</html>
