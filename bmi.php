<?php

$waga=$_POST["waga"]; //waga w kg
$wzrost=$_POST["wzrost"]; // wzrost w cm
//sprawdzenie  czy dane są poprawne
if (preg_match("@[0-9]@",$_POST["waga"]))  {
} else {
  echo "Nieprawidłowe dane!";
  die();
}
if (preg_match("@[0-9]@",$_POST["wzrost"]))  {
} else {
  echo "Nieprawidłowe dane!";
  die();
}
$BMI=$waga/($wzrost/100*$wzrost/100); //obliczenie wskaźnika BMI
//sprawdzanie przedziału obliczonego wskaźnika
 if($BMI < 15) {
    echo "Wskaźnik BMI wynosi: ".round($BMI)."<br>"."Anoreksja";
  }
 elseif($BMI >= 15 && $BMI <= 17.4){
     echo "Wskaźnik BMI wynosi: ".round($BMI)."<br>"."Wychudzenie";
   }
 elseif($BMI >= 17.5 && $BMI <= 18.4){
     echo "Wskaźnik BMI wynosi: ".round($BMI)."<br>"."Niedowaga";
   }
 elseif($BMI >= 18.5 && $BMI <= 24.9){
     echo "Wskaźnik BMI wynosi: ".round($BMI)."<br>"."Waga prawidłowa";
   }
 elseif($BMI >= 25 && $BMI <= 29.9){
     echo "Wskaźnik BMI wynosi: ".round($BMI)."<br>"."Nadwaga";
   }
 elseif($BMI >= 30 && $BMI <= 34.9){
     echo "Wskaźnik BMI wynosi: ".round($BMI)."<br>"."OtyłośĆ pierwszego stopnia";
   }
 elseif($BMI >= 35 && $BMI <= 39.9){
     echo "Wskaźnik BMI wynosi: ".round($BMI)."<br>"."OtyłośĆ drugiego stopnia";
   }
 elseif($BMI >= 40){
     echo "Wskaźnik BMI wynosi: ".round($BMI)."<br>"."Otyłość trzeciego stopnia";
   }

?>
