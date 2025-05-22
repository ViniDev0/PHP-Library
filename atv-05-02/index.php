<?php
$nome = '';
$idade = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['Nome'] ?? '';
  $idade = intval($_POST['Idade']) ?? '';

}  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATV 05 - 02</title>
</head>

  <form method="POST">
    <input type="text" name="Nome" placeholder="Nome" >
    <input type="number" name="Idade" placeholder="Idade" min="16">
    <input type="submit" value="Enviar">
  </form>

  <?php if ($idade >= 75):?>
    <p><?=$nome?>, esta apto a votar. Porem, nao e obrigatorio!</p>
  <?php elseif ($idade < 75 && $idade >= 18): ?>
    <p><?=$nome?>, esta apto a votar. Seu voto e obrigatorio!</p>
  <?php elseif ($idade >= 16 && $idade < 18):?>
    <p><?=$nome?>, esta apto a votar. Porem, nao e obrigatorio!</p>
  <?php endif;?>
  
</body>

</html>