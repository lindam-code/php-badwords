<?php
  $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,
  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
  mollit anim id est laborum.';
  $testo_badword = str_replace($_GET["badword"], '***', $testo);
?>

<h1>Testo</h1>
<p><?php echo $testo ?></p>
<span> <?php echo ' Lunghezza del lorem ipsum : ' . strlen($testo) . ' caratteri.' ?></span>
<h2>Testo con le badwords</h2>
<p><?php echo $testo_badword ?></p>
