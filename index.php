<?php
  $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
  mollit anim id est laborum.';
  // Sostituisco la parola da cambiare con tre asterischi
  $testo_badword = str_replace($_GET["badword"], '***', $testo);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>badword</title>
  </head>
  <body>
    <h1>Testo</h1>
    <p><?php echo $testo ?></p>
    <span>Lunghezza del lorem ipsum : <?php echo strlen($testo); ?> caratteri.</span>
    <h2>Testo censurato</h2>
    <p><?php echo $testo_badword ?></p>
    <span>Lunghezza del lorem ipsum censurato : <?php echo strlen($testo_badword); ?> caratteri.</span>
  </body>
</html>
