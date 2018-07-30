<?php
  $direction = 1;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7/3</title>
  </head>
  <body>
    <p>
      <?php
        while ($direction < 100) {
          $direction = $direction + 15;
          echo 'On tient le bon bout';
        }
      ?>
    </p>
  </body>
</html>
