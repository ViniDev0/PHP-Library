<?php 
  $firstVal = isset($_POST['value01']) ? floatval($_POST['value01']) : 0;
  $secondVal = isset($_POST['value02']) ? floatval($_POST['value02']) : 0;

  $warningMessage = "<script type='text/javascript'>alert('valor foi maior que 100 pontos!');</script>";
  $sum = $firstVal + $secondVal;
  
  if ($sum > 100) {
    $sum -= 10;
    echo $warningMessage;
  }
  $result = "<h1 class='result'> O valor e: {$sum}";
  echo $result;
?>