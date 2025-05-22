<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstVal = $_POST['inputOne'] ?? null;
    $secondVal = $_POST['inputTwo'] ?? null;
    $thirdVal = $_POST['inputThree'] ?? null;


    if (is_numeric($firstVal) && is_numeric($secondVal) && is_numeric($thirdVal)) {
      
      $maxValue = max($firstVal, $secondVal, $thirdVal);
      
    }
  }

  

?>