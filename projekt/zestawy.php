<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiszkomani</title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <div class="topnav">
      <a href="index.php">Home</a>
      <a class="active" href="zestawy.php">Zestawy</a>
      <a href="losowyzestaw.php">Losowy zestaw</a>
      <a href="kontakt.php">Kontakt</a>
      <a href="onas.php">O nas</a>
      <a href="rejestracja.php" style="float:right;">Zarejestruj się</a>
      <a id="loginbutton" style="float:right;">Zaloguj się</a>
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
        <a class="setbutton" href="choosenset.php">Zestaw</a>
        <a class="setbutton" href="choosenset.php">Zestaw</a>
        <a class="setbutton" href="choosenset.php">Zestaw</a>
        <a class="setbutton" href="choosenset.php">Zestaw</a>
        <a class="setbutton" href="choosenset.php">Zestaw</a>
        <a class="setbutton" href="choosenset.php">Zestaw</a>
        <a class="setbutton" href="choosenset.php">Zestaw</a>
        <a class="setbutton" href="choosenset.php">Zestaw</a>
        <a class="setbutton" href="choosenset.php">Zestaw</a>
        <a class="setbutton" href="choosenset.php">Zestaw</a>
        <a class="setbutton" href="choosenset.php">Zestaw</a>
        <a class="setbutton" href="choosenset.php">Zestaw</a>
        <a class="setbutton" href="choosenset.php">Zestaw</a>
        <a class="setbutton" href="choosenset.php">Zestaw</a>
        <a class="setbutton" href="choosenset.php">Zestaw</a>
        <a class="setbutton" href="choosenset.php">Zestaw</a>
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
