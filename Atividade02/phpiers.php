<?php 

  $celsius = $_POST['celsius'];

  $fahrenheit = ($celsius * 1.8) + 32;

  echo '<h1 class = "resultado" > A temperatura em fahrenheit é: '.$fahrenheit. ' F<br>';
  
  echo '<a class = "returnBTN" href= "http://localhost/Atividade02/" > Voltar' ;



?>