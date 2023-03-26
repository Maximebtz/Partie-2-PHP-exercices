<h1>Exercice n°1</h1>

<p>Créer une fonction pour mettre le texte donné en rouge et en majuscule</p>

<h2>Résultat</h2>


<?php

//Créer les variables de texte et de couleur
$texte_a_modifier = "Mon texte en paramètre";
$couleur_texte = "red";

//Créer la fonction de convertion avec les paramètres à changer
function convertirMajRouge($texte, $couleur) {
  $texte_majuscule = strtoupper($texte); //Mettre en majuscule
  echo '<span style="color:' . $couleur . '">' . $texte_majuscule . '</span>'; //Utiliser <span> + du CSS pour changer la couleur
}

//Lire la fonction avec mes premières variables
convertirMajRouge($texte_a_modifier, $couleur_texte);
?>