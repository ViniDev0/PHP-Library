<?php include 'phpiers.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styled.css">
  <title>Atividade 04 B</title>
</head>

<body>
  <header class="wrapper">
    <h1>Valores Para Comparar!</h1>
    <h3>Escreva Três Valores Para Comparação</h3>
  </header>
  <form method="post" class="FormsHandler">
    <input type="number" name="inputOne" id="input01" class="inputs" placeholder="Primeiro Valor">
    <input type="number" name="inputTwo" id="input02" class="inputs" placeholder="Segundo Valor">
    <input type="number" name="inputThree" id="input03" class="inputs" placeholder="Terceiro Valor">
    <input type="submit" value="Submit" class="SendBTN">
  </form>

  <?php if (isset($maxValue)): ?>
  <h1 class="results">O maior número é:<?=$maxValue?></h1>
  <?php endif; ?>
</body>

</html>