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
  </head>
  <body>
    <div class="topnav">
      <a  href="index.php">Home</a>
      <a href="zestawy.php">Zestawy</a>
      <a href="losowyzestaw.php">Losowy zestaw</a>
      <a href="kontakt.php">Kontakt</a>
      <a href="onas.php">O nas</a>
      <a href="rejestracja.php" style="float:right;">Zarejestruj się</a>
      <a id="loginbutton" style="float:right; color: white !important;">Zaloguj się</a>
    </div>
    <div class="loginpopup">
      <div class="loginpopup-content">
         <img src="close.png" alt="disapare image" id="close">
      <form method="post" action="index.html">
        <h1>Logowanie</h1>
        <input class="logininput" type="text" name="login" value="" placeholder="Nazwa użytkownika"><br>
        <input class="logininput" type="password" name="password" value="" placeholder="Hasło"><br>
        <input type="submit" name="commit" value="Login" class="passwordboxbutton"><br>
      </form>
        Zapomniałeś hasła? <a class="passwordboxbutton">Zresetuj hasło</a>
      </div>
      </div>
      <section class="maintext">
        <div class="content">
          <h1>Panel admina</h1>
          <div class="admpanel">
            <h3>Użytkownicy</h3>
            <form class="admform" method="post">
              Wybierz ID użytkownika: <input class="adminput" type="number" name="idusersearch" value="" placeholder="Id użytkownika"><br>
              Wybierz akcję: <select name="useridaction">
                <option value="delete">Usuń</option>
                <option value="setactive">Aktywuj</option>
                <option value="deactive">Dezaktywuj</option>
                <option value="block">Zablokuj</option>
                <option value="unblock">Odblokuj</option>
              </select>
              <br>
              <input class="passwordboxbutton" type="submit" name="" value="Wykonaj">
            </form>
          </div>
          <br>
          <div class="admpanel">
            <h3>Zestawy fiszek</h3>
            <form class="admform" method="post">
              Wybierz ID zestawu: <input class="adminput" type="number" name="idsetsearch" value="" placeholder="Id zestawu"><br>
              Usunąć? <input type="checkbox" name="deleteset" value="">
              <br>
              <input class="passwordboxbutton" type="submit" name="" value="Wykonaj">
            </form>
          </div>
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
