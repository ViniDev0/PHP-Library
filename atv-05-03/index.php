<?php
$primeiroSalario = '';
$segundoSalario = '';
$terceiroSalario = '';
$highestPayGrade = null;
$lowestPayGrade = null;

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $primeiroSalario = $_POST['valor01'] ?? '';
    $segundoSalario = $_POST['valor02'] ?? '';
    $terceiroSalario = $_POST['valor03'] ?? '';


    if ($primeiroSalario !== '' && $segundoSalario !== '' && $terceiroSalario !== '') {

      $highestPayGrade = max($primeiroSalario, $segundoSalario, $terceiroSalario);
      $lowestPayGrade = min($primeiroSalario, $segundoSalario, $terceiroSalario);

    }

  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATV - 05 - 03</title>
</head>
<body>
  <form method="post">

    <input type="number" name="valor01" min="1" placeholder="Salario01" required > 
    <input type="number" name="valor02" min="1" placeholder="Salario02" required >
    <input type="number" name="valor03" min="1" placeholder="Salario03" required >

    <input type="submit" value="comparar">

  </form>

  <?php if($_SERVER['REQUEST_METHOD'] === 'POST' && $highestPayGrade !== null && $lowestPayGrade !== null):?>
    <h1>Resultados</h1>
    <p>O maior salario: <?= $highestPayGrade?></p>
    <p>O menor salario: <?= $lowestPayGrade?></p>
  <?php endif; ?>
</body>
</html>