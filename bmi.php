<?php
include "index.php";


function calculateBMI() {
  $waga=$_POST["waga"]; //waga w kg
  $wzrost=$_POST["wzrost"]; // wzrost w cm
  //sprawdzenie  czy dane są poprawne
  $BMI=$waga/($wzrost/100*$wzrost/100); //obliczenie wskaźnika BMI
  //sprawdzanie przedziału obliczonego wskaźnika
  switch ($BMI) {
    case ($BMI < 15):
      echo "Wskaźnik BMI wynosi: ".round($BMI)."<div>"."Anoreksja";
      break;
    case ($BMI >= 15 && $BMI <= 17.4):
      echo "Wskaźnik BMI wynosi: ".round($BMI)."<div>"."Wychudzenie";
      break;
    case ($BMI >= 17.5 && $BMI <= 18.4):
      echo "Wskaźnik BMI wynosi: ".round($BMI)."<div>"."Niedowaga";
      break;
    case ($BMI >= 18.5 && $BMI <= 24.9):
      echo "Wskaźnik BMI wynosi: ".round($BMI)."<div>"."Waga prawidłowa";
      break;
    case ($BMI >= 25 && $BMI <= 29.9):
      echo "Wskaźnik BMI wynosi: ".round($BMI)."<div>"."Nadwaga";
      break;
    case ($BMI >= 30 && $BMI <= 34.9):
      echo "Wskaźnik BMI wynosi: ".round($BMI)."<div>"."OtyłośĆ pierwszego stopnia";
      break;
    case ($BMI >= 35 && $BMI <= 39.9):
      echo "Wskaźnik BMI wynosi: ".round($BMI)."<div>"."OtyłośĆ drugiego stopnia";
      break;
    case ($BMI >= 40):
      echo "Wskaźnik BMI wynosi: ".round($BMI)."<div>"."Otyłość trzeciego stopnia";
      break;
  }

}
