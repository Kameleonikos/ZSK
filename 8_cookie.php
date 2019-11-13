<?php
  setcookie("name","Janusz");
  setcookie("surname","Nowak", time() + 60*60*24);
  //setcookie("x","y", time() + 20);

  /*Użytkownik podaje w formularzu w polach numerycznych dane: poleA i poleB
  Wybiera w formularzu działanie (+,-,/,*)
  Zapisz dane do tablicy asocjacyjnej*/

  /*Utwórz licznik na stronie, wykorzystaj ciasteczka*/

  $plik = fopen("licznik.txt","r");
  $licznik = fgets($plik);
  fclose($plik);

  if(!isset($_COOKIE['odwiedziny'])) {
  setcookie("odwiedziny",$_COOKIE, time() - 86400);
  $licznik++;
  $plik = fopen("licznik.txt","w");
  fwrite($plik, $licznik);
  fclose($plik);
  }
  echo"Odwiedziło nas <b>$licznik</b> osób!";
?>
