<h1>Exercice n°3</h1>

<p>
    Afficher un lien hypertexte permettant d'accéder au site d'Elan Formation. 
    Le lien devra s'ouvrir dans un nouvel onglet (_blank).
</p>

<h2>Résultat</h2>



<?php
$url = "https://elan-formation.eu";
$texte = "elan formation";
echo "<a href='$url' target='_blank'>$texte</a>"; //Mettre un "target='_blank'" pour envoyer vers un nouvel ouglet
?>

