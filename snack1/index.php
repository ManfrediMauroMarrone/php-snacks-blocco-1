<?php
// creo l'array matches
$matches = [
  // creo i sotto array
  [
    'casa' => 'Virtus Bologna',
    'ospite' => 'Pall. Cantù',
    'punti_casa' => 83,
    'punti_ospite' => 47
  ],
  [
    'casa' => 'Reggiana',
    'ospite' => 'Milano 1958',
    'punti_casa' => 67,
    'punti_ospite' => 56
  ],
  [
    'casa' => 'Dinamo Sassari',
    'ospite' => 'Athletic Genova',
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
    <h1>Ultime partite giocate</h1>


    <div class="">
      <p>
        <?php
        // ciclo all'interno dell'array e per ogni elemento stampo le chiavi
        foreach ($matches as &$value) {
          echo 'squadra di casa:' .$value['casa'] . ' - ' . 'squadra ospite:' . $value['ospite'] . ' ' . '|' . ' ' . 'punti squadra di casa:' .$value['punti_casa'] . ' - ' . 'punti squadra ospite:' .$value['punti_ospite'] .'<br>';
        };

        ?>

      </p>

    </div>

  </body>
</html>
