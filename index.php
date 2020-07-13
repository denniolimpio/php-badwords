<!-- Consegna:
Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.  -->


<?php


// variabile con paragrafo di testo

$stringa_paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident,
sunt in culpa qui officia deserunt mollit anim id est laborum.";

$reple_paragraph = str_replace( "mollit", "*********", $stringa_paragraph )




?>



<!-- stampo il paragrafo -->


<!-- // stampo -->

<span> <?php echo ' ' . $reple_paragraph ?></span>

<p> <?php echo strlen ($stringa_paragraph)?></p>
