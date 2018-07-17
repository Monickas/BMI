<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css"

  </head>
  <body>
    <div id="container">
    <form action="bmi.php" method="post">
      Podaj wagę w kilogramach <input type="integer" name="waga" required >
      Podaj wzrost w centymetrach<input type="integer" name="wzrost"required >
      <input type="submit" value="Sprawdź" name="submit">
    </form>
  </body>
  rgfdrfg
  <?php
  if (isset($_POST["submit"])){
    if (isset($_POST["waga"]) && isset($_POST["wzrost"]) && $_POST["waga"] > 0 && $_POST["wzrost"] > 0)
    {
       calculateBMI();
    } else {
      echo "Nieprawidłowe dane!";
    }
  }
  ?>
</html>
