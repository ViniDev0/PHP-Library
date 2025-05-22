<?php 
$trucks = null;
$load = '';
$fractioneer = 1000;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $load = (double)$_POST['load'] ?? '';
  
  if ($load > 0) {
    $calculus = ($load / $fractioneer);
    $trucks = ceil($calculus);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATV - 05 - 04</title>
</head>
<body>
  <form method="post">
    <h1>Peso para transporte:</h1>

    <input type="number" name="load" step="1" min="1" required>
    <input type="submit" value="submit">
  </form>
  <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $trucks !== null):?>
    <?php if ($trucks > 1):?>
      <p>Considerando a carga de <?= $load?>, serao necessarios <?=$trucks?> caminhoes</p>
    <?php else:?>
      <p>Considerando a carga de <?= $load?>, apenas <?=$trucks?> caminhao sera enviado.</p>
    <?php endif;?>
  <?php endif; ?>
</body>
</html>