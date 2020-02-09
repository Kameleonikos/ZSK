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
      <a href="index.php">Home</a>
      <a href="zestawy.php">Zestawy</a>
      <a href="losowyzestaw.php">Losowy zestaw</a>
      <a href="kontakt.php">Kontakt</a>
      <a href="onas.php">O nas</a>
      <?php if (isset($_SESSION["login"])) {
        ?><a href="paneluzytkownika.php" style=float:right;>Panel użytkownika</a>
        <a href="wylogowanie.php" style=float:right;>Wyloguj się</a><?php
      } else {
        ?><a class="active" href="rejestracja.php" style="float:right;">Zarejestruj się</a>
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
      <div class="maintext">
        <div class="content">
          <h1>Zarejestruj się!</h1>
          <div class="admpanel">
            <form class="admform" method="post">
              Login: <input class="cfinput" type="text" name="login" value="" required>
              E-mail: <input class="cfinput" type="email" name="email" value="" required>
              Hasło: <input class="cfinput" type="password" name="password" value="" required>
              Powtórz hasło: <input class="cfinput" type="password" name="passwordcheck" value="" required>
              Imię: <input class="cfinput" type="text" name="imie" value="" required>
              Nazwisko: <input class="cfinput" type="text" name="nazwisko" value="" required>
              Data urodzenia: <input class="cfinput" type="date" name="dataurodzenia" value="" required><br>
              <input class="passwordboxbutton" type="submit" name="rejestracjadone" value="Skończone!"><br>
              <?php
              if (isset($_POST["rejestracjadone"])) {
                require_once ('connect.php');
                $login=$_POST["login"];
                $email=$_POST["email"];
                $password=password_hash($_POST["password"],PASSWORD_ARGON2ID);
                $imie=$_POST["imie"];
                $nazwisko=$_POST["nazwisko"];
                $dataurodzenia=$_POST["dataurodzenia"];
                if (filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                  $logincorr = "SELECT COUNT(*) FROM `users` WHERE login = '$login'";
                  $emailcorr = "SELECT COUNT(*) FROM `users` WHERE email = '$email'";
                  if ($logincorr==0 && $emailcorr==0) {
                    $insert = "INSERT INTO `users`(`login`, `password`, `mail`, `name`, `surname`, `birthday`) VALUES ('$login','$password','$email','$imie','$nazwisko','$dataurodzenia')";
                    if (mysqli_query($conn,$insert)) {
                      echo "Zostałeś zarejestrowany!";
                    }
                    else {
                      echo "Coś poszło nie tak! Skontaktuj się z administratorem.";
                      echo mysqli_error($conn);
                    }
                  }
                  else {
                    $bladdupl="Istnieje użytkowik z takimi danymi";
                    echo "<script type='text/javascript'>alert('$bladdupl');</script>";
                  }
                }
            }
              ?>
            </form>
          </div>
        </div>
      </div>
      <footer>
        Jakub Putto 2019
      </footer>
      <script type="text/javascript">
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
  document.getElementById("loginbutton").addEventListener("click", function(){
       document.querySelector(".loginpopup").style.display = "flex";});
  document.getElementById("close").addEventListener("click", function(){
       document.querySelector(".loginpopup").style.display="none";});
      </script>
  </body>
</html>
