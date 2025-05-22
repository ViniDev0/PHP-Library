<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./phiers.php">
  <link rel="stylesheet" href="./styled.css">
  <title>Atividade 04 A</title>
</head>

<body>
  <header class="wrapper">
    <h1>Soma De Valores</h1>
    <h3>Caso os valores sejam superiores a 100, serão reduzidos em 10 pontos.</h3>
  </header>
  <form action="./phiers.php" method="post" class="Forms">
    <h2 class="inputTitle">Valor 01</h2>
    <input type="number" name="value01" id="firstValue" class="Input">
    <h2 class="inputTitle">Valor 02</h2>
    <input type="number" name="value02" id="secondValue" class="Input">
    <button type="submit" id="sendButton">Send</button>
  </form>
</body>

</html>