<!-- Consegna:
Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.  -->

<?php
// http://localhost:8888/index.php?badword=
$badword = $_GET['badword'];
// variabile con paragrafo di testo
$stringa_paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit";
// lunghezza paragrafo
$stringa_length = strlen ($stringa_paragraph);
// concateno le due variabili con una variabile di appoggio
$paragraph_length =  $stringa_paragraph .  ' '  .  " ($stringa_length caratteri) ";
// sostituisco la parola passata in get (index.php?word=) con ***
$reple_paragraph = str_replace($_GET, "***", $paragraph_length )


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title> badword</title>
  <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- // stampo a schermo-->

  <!-- paragrafo originale, prima della censura -->
  <h3> Paragrafo </h3>
  <p> <?php echo $paragraph_length ?> </p>


  <!-- paragrafo dopo la censura -->
  <h3> Paragrafo censurato</h3>
  <p> <?php echo $reple_paragraph  ?></p>
  <span> Parola censurata: <?php echo $badword  ?> </span>


</body>
</html>
