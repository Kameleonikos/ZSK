<<?php
$x=1;
$y=1.0;
echo gettype($x);
echo gettype($y);
if ($x === $y)
{
  echo `identyczne<hr>`
}
else {
echo `rózne<hr>`
}

$x=2;
echo $x++;//2
echo ++$x;//4
echo $x;//4
$y=$x++;
echo $y;//4
$y=++$x;
echo $y;//6
echo ++$y;//7

$text=`123ssd`;
$x=(int)$text;
echo $x,<hr>;//123

$text1=0;
$x1=(bool)$text1;
echo $x1;//1

$text2=100;
$x2=(unset)$text2;
echo $x2;
echo gettype($x2); //NULL

$c;
echo $c;
echo @gettype($c); //NULL

$x=10;
echo is_string($x); //FALSE
echo is_int($x);
echo is_bool($x);
echo is_float($x);
echo is_null($x);

//Zmienne superglobalne
//$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER

echo $_SERVER[`SERVER_PORT`]; //80
echo $_SERVER[`SERVER_NAME`]; //scieżka od htdocs
echo $_SERVER[`SCRIPT_NAME`]; //ścieżka bezwzględna do htdocs
echo $_SERVER[`DOCUMENT_ROOT`]; `<br>`;
echo $_SERVER[`SERVER_PROTOCOL`]; `<br>`;

$lokalizacjapliku = $_SERVER[`DOCUMENT_ROOT`].$_SERVER[`SCRIPT_NAME`];
echo $lokalizacjapliku, `<hr>`;

//STAŁE

define(`NAZWISKO`,`Kowal`);
echo NAZWISKO;

define(`imie`,`Janusz`);
echo imie;

define(`WIEK`,18,true);
echo WIEK;

define(`PI`, 3.14159);
echo PI;
 ?>
