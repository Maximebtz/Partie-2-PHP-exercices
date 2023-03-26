<h1>Exercice n°3</h1>

<p>
    Afficher un lien hypertexte permettant d'accéder au site d'Elan Formation. 
    Le lien devra s'ouvrir dans un nouvel onglet (_blank).
</p>

<h2>Résultat</h2>



<?php
    $url = "https://elan-formation.eu";
    $texte = "elan formation";
?>
  <a href="<?php echo $url; ?>" target="_blank"><?php echo $texte; ?></a>

