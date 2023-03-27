<h1>Exercice n°3</h1>

<p>
    A partir de l'exo 2, ajouter une colonne pour des liens vers wikipédia
</p>

<h2>Résultat</h2>

<?php

//Créer tableau associatif
$capitales = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
);


//Créer une fonction 
function afficherTableHTML($capitales){
    $url = "https://fr.wikipedia.org/wiki/";
    
    asort($capitales); //Trier par ordre alpha avec "asort()" pour prendre la $value
    echo "<table style='border: solid black 1px; border-collapse: collapse;'><tr>
    <th style='border: solid black 1px;'>Pays</th>
    <th style='border: solid black 1px;'>Capitales</th>  
    <th style='border: solid black 1px;'>Lien wiki</th></tr>"; //Mettre un border a chaque <th> ou <td>
    
    foreach($capitales as $key => $value){ //Lire le tableau
        echo "<tr><td style='border: solid black 1px;'>" . strtoupper($key) . "</td>
        <td style='border: solid black 1px;'>" . $value . "</td>
        <td style='border: solid black 1px;'><a href='$url".$value."' target='_blank'>Lien</a></td></tr>";
    }
    echo "</table>";
}

afficherTableHTML($capitales);
?>
