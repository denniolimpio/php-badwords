<!-- Consegna:
Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.  -->

<?php

// http://localhost:8888/index.php?badword=
$_GET['badword'];


 // variabile con paragrafo di testo
$stringa_paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident,
sunt in culpa qui officia deserunt mollit anim id est laborum.";

// lunghezza paragrafo

$stringa_length = strlen ($stringa_paragraph);

// concateno le due variabili con una variabile di appoggio

$paragraph_length =  $stringa_paragraph .  ' '  .  " ($stringa_length caratteri) ";



// sostituisco la parola passata in get (index.php?word=) con ***
$reple_paragraph = str_replace($_GET, "***", $paragraph_length )


?>


<!-- // stampo a schermo-->

<p> <?php echo $reple_paragraph  ?></p>
