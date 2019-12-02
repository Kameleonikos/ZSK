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
      <a href="index.php">Home</a>
      <a href="zestawy.php">Zestawy</a>
      <a href="losowyzestaw.php">Losowy zestaw</a>
      <a href="kontakt.php">Kontakt</a>
      <a href="onas.php">O nas</a>
      <a href="index.php" style="float:right;">Wyloguj się</a>
      <a class="active" href="paneluzytkownika.php"  style="float:right;">Panel użytkownika</a>
    </div>
      <section class="maintext">
        <div class="content">
          <h1>Panel użytkownika</h1>
          <div class="admpanel">
            <h3>Twoje zestawy</h3>
            <form class="admform" method="post">
              Wybierz nazwę zestawu:
              <select name="usersetname">
                <option value="1">Zestaw 1</option>
              </select>
              <br>
              Usunąć? <input type="checkbox" name="userdeleteset" value="">
              <br>
              <input class="passwordboxbutton" type="submit" name="" value="Wykonaj">
            </form>
          </div>
          <br>
          <div class="admpanel">
            <form class="admform" method="post">
              <h3>Nowy zestaw</h3>
              Nazwa zestawu: <input type="text" name="newsetname" value=""><br>
              Fiszki:<br>
              <table>
                <tr>
                  <th>Słowo</th>
                  <th>Tłumaczenie</th>
                </tr>
                <tr>
                  <th><input type="text" name="word1" value=""></th>
                  <th><input type="text" name="translate1" value=""></th>
                </tr>
                <tr>
                  <th><input type="text" name="word2" value=""></th>
                  <th><input type="text" name="translate2" value=""></th>
                </tr>
                <tr>
                  <th><input type="text" name="word3" value=""></th>
                  <th><input type="text" name="translate3" value=""></th>
                </tr>
              </table>
              <input class="passwordboxbutton" type="submit" name="" value="Wykonaj">
            </form>
          </div>
          <br>
          <div class="admpanel">
            <h3>Zmiana danych</h3>
            <form class="admform" method="post">
              Zmień login:<br><input class="adminput" type="text" name="username" value="" placeholder="Aktualny login"><br>
              <input class="adminput" type="text" name="usernewname" value="" placeholder="Nowy login">
              <br>
              Zmień hasło:<br>
              <input class="adminput" type="text" name="userpassword" value="" placeholder="Aktualne hasło"><br>
              <input class="adminput" type="text" name="usernewpassword" value="" placeholder="Nowe hasło"><br>
              <input class="adminput" type="text" name="usernewpasswordcheck" value="" placeholder="Potwierdż nowe hasło"><br>
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
