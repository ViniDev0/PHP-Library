<?php 
if (isset($_POST['bands'])) {
  
  $band = $_POST['bands'];

  if ($band == 'Rock') {
    printf("<h1>Você gosta do estilo Rock!</h1>");
  } 
  else if ($band == 'Soul') {
    printf("<h1>Você gosta do estilo Soul!</h1>");
  }
  else if ($band == 'Pop') {
    printf("<h1>Você gosta do estilo Pop!</h1>");
  } else {
    printf("<h1>Você gosta do estilo Blues!</h1>");
  }
}

?>