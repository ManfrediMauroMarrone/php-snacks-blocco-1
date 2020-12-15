<?php
// creo l'array matches
$matches = [
  // creo i sotto array
  'partita1' => [
    'casa' => 'pippo',
    'ospite' => 'paperino',
    'punti_casa' => 20,
    'punti_ospite' => 30
  ],
  'partita2' => [
    'casa' => 'topolino',
    'ospite' => 'pluto',
    'punti_casa' => 35,
    'punti_ospite' => 15
  ],
  'partita3' => [
    'casa' => 'minnie',
    'ospite' => 'archimede',
    'punti_casa' => 54,
    'punti_ospite' => 87
  ]
]

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack1</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p>
      <?php
      // ciclo all'interno dell'array e per ogni elemento stampo le chiavi
      foreach ($matches as &$value) {
        echo 'squadra di casa:' .$value['casa'] . ' - ' . 'squadra ospite:' . $value['ospite'] . ' ' . '|' . ' ' . 'punti squadra di casa:' .$value['punti_casa'] . ' - ' . 'punti squadra ospite:' .$value['punti_ospite'] .'<br>';
      };

      ?>

    </p>

  </body>
</html>
