<?php
// definisco i parametri name mail a age
  $name = $_GET['name'];

  $mail = $_GET['mail'];

  $age = $_GET['age'];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>
      <?php
      // verifico se name è più lungo di 3 caratteri, se mail contiene un punto e una chiocciola e se age è un numero
      if (strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age) !== false) {
        // se le condizioni sono verificate stampo accesso riuscito
        echo 'Credenziali corrette: Accesso riuscito';
      }else {
        // altrimenti stampo accesso negato
        echo 'Credenziali non corrette: Accesso negato';
      }

      ?>

    </h1>

  </body>
</html>
