<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiszkomani</title>
    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="topnav">
      <a class="active" href="index.php">Home</a>
      <a href="zestawy.php">Zestawy</a>
      <a href="losowyzestaw.php">Losowy zestaw</a>
      <a href="kontakt.php">Kontakt</a>
      <a href="onas.php">O nas</a>
      <?php if (isset($_SESSION["login"])) {
        ?><a href="paneluzytkownika.php" style=float:right;>Panel użytkownika</a>
        <a href="wylogowanie.php" style=float:right;>Wyloguj się</a><?php
      } else {
        ?><a href="rejestracja.php" style="float:right;">Zarejestruj się</a>
        <a id="loginbutton" style="float:right; color: white !important;">Zaloguj się</a> <?php
      }?>
    </div>
    <div class="loginpopup">
      <div class="loginpopup-content">
         <img src="close.png" alt="disapare image" id="close">
      <form method="post">
        <h1>Logowanie</h1>
        <input class="logininput" type="text" name="login" value="" placeholder="Nazwa użytkownika" required><br>
        <input class="logininput" type="password" name="password" value="" placeholder="Hasło" required><br>
        <input type="submit" name="commit" value="Zaloguj się" class="passwordboxbutton"><br>
        <?php if (isset($_POST["commit"])) {
          require_once ('connect.php');
          $loginlog=$_POST["login"];
          $passwordlog=$_POST["password"];
          $checkactive= "SELECT `id_status` FROM `users` WHERE login = '$loginlog'";
          $checkactivee=mysqli_query($conn,$checkactive);
          echo "string";
          if (mysqli_fetch_row($checkactivee)[0]==1) {
            echo "Użytkownik nieaktywny, poczekaj na aktywację.";
          }
          else {
            if (mysqli_fetch_row($checkactivee)[0]==3) {
              echo "Użytkownik zablokowany.";
            }
            else {
                echo "d";
                $checkpassword = "SELECT `password` FROM `users` WHERE login = '$loginlog'";
                $hashedpassword = mysqli_query($conn,$checkpassword);
                $hashedpasswordafter = mysqli_fetch_row($hashedpassword)[0];
                if (password_verify($passwordlog,$hashedpasswordafter)) {
                  echo "s";
                  $_SESSION["login"]=$loginlog;
                  header("Location: paneluzytkownika.php");
                }
                else {
                  echo "Złe hasło!";
                }
              }
            }
          } ?>
      </form>
      </div>
      </div>
      <section class="maintext">
        <div class="content">
          <h1>Witamy żądny wiedzy użytkowniku!</h1>

        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut sem vel ex tempus sollicitudin quis et nisi. Cras viverra purus non dui euismod congue. Curabitur auctor pulvinar lectus vitae pharetra. Fusce sit amet ligula vel dolor euismod fringilla. Morbi sed nulla iaculis, efficitur ligula a, ultrices dolor. Aliquam sed aliquam augue. Phasellus vehicula urna sit amet est suscipit finibus. Fusce iaculis eu felis sit amet pellentesque. Aliquam ut quam gravida ipsum eleifend pharetra. Etiam et est a neque vehicula ornare vitae faucibus nulla. Praesent sed lacus commodo dolor vestibulum congue sollicitudin at velit. Suspendisse potenti. Proin cursus congue enim, at luctus ante faucibus at. Aenean vitae nunc vitae tortor ultrices consequat.

Vestibulum molestie, ligula eget eleifend porta, nibh mauris hendrerit turpis, fermentum bibendum quam turpis et massa. Aliquam consequat quis lacus feugiat accumsan. Suspendisse et felis a tortor pharetra faucibus. In hac habitasse platea dictumst. Nullam id ligula id orci vestibulum pellentesque. Nulla at diam non ligula accumsan tempor in vitae est. Nunc in dolor porttitor enim rhoncus luctus in ut ipsum.

Donec ullamcorper massa vel tortor tempus, id luctus lacus laoreet. Fusce a est in turpis interdum iaculis ut ac ligula. Vivamus rutrum sollicitudin elit, eget ultrices ipsum ornare quis. Phasellus interdum risus non elit finibus efficitur. Etiam lacinia, enim vitae tempus volutpat, felis dui vehicula nunc, in varius orci magna et erat. Aliquam enim dolor, mollis vitae nunc et, rhoncus mattis neque. Praesent nulla odio, gravida in aliquam id, consequat ut massa. Sed sit amet finibus mauris, vitae convallis arcu. Curabitur suscipit malesuada nunc, ac accumsan lacus tempor ut. Phasellus laoreet arcu eu ipsum sollicitudin, vitae vehicula nisi pellentesque. In eu dui nunc. Donec varius magna nec suscipit semper. Vestibulum a nisi nisl.

Mauris arcu mauris, consequat pulvinar facilisis at, lacinia ac risus. Nulla mi libero, condimentum vel accumsan et, luctus sit amet purus. Mauris sed leo quis orci porttitor varius nec a orci. Ut at enim in ex bibendum porta. Curabitur id eleifend neque. Integer ut dui eget ipsum fringilla accumsan et at eros. Etiam vestibulum risus magna, quis accumsan mi pharetra ac. Nulla ut justo dictum, vulputate velit at, rutrum ligula. Curabitur a dolor sapien. Nunc in elementum erat. Sed non elementum nunc, a sodales nibh. Maecenas sed eros vitae diam mollis condimentum. Morbi pretium porta nulla non aliquam. Suspendisse venenatis nibh in elit dictum tincidunt eu ac nulla. Mauris at pharetra nulla. Nam eget placerat ligula, imperdiet sollicitudin turpis.

Praesent blandit tempor sapien, in viverra velit cursus quis. Aenean commodo imperdiet eros non mattis. Donec facilisis id nulla vitae molestie. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi et felis tellus. Nunc lectus erat, molestie quis facilisis in, sagittis sed elit. Maecenas elementum massa leo, sit amet faucibus dolor ultricies non. Vestibulum hendrerit elit tellus, sit amet eleifend enim imperdiet id. Maecenas pharetra placerat finibus. Mauris nec nibh quis ex condimentum posuere vitae vel velit. Fusce in orci ut libero sollicitudin placerat. Vestibulum sit amet blandit nunc. Nunc condimentum metus sit amet mi efficitur rhoncus.
        </div>
      </section>
      <footer>
        Jakub Putto 2019
      </footer>
      <script type="text/javascript">
  document.getElementById("loginbutton").addEventListener("click", function(){
       document.querySelector(".loginpopup").style.display = "flex";});
  document.getElementById("close").addEventListener("click", function(){
       document.querySelector(".loginpopup").style.display="none";});
      </script>
  </body>
</html>
