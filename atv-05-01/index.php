<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $oddNums = null;
  $sumOdds = null;
  
  for ($nums = 0; $nums < 1001; $nums++) {
      if ($nums % 2 == 1) {
        $sumOdds += $nums;
        $oddNums++;
      }
    }
}  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATV 05 - 01</title>
</head>

  <form method="POST">
    <input type="submit" value="Comecar">
  </form>

<?php if (isset($oddNums)): ?>
    <h1>Resultado</h1>
    <p>Total de Numeros Impares: <?= $oddNums ?></p>
    <p>Soma dos Numeros Impares: <?= $sumOdds ?></p>
<?php endif;?>

</body>

</html>