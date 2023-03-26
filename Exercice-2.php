<h1>Exercice n°2</h1>

<p>Faire un algo permettant d'afficher un tableau html avec des pays et leurs capitales</p>

<h2>Résultat</h2>

<?php

//Créer tableau associatif
$capitales = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
);


//Créer une fonction 
function afficherTableHTML($capitales){

    ksort($capitales); //Trier par ordre alpha.
    echo "<table style='border: solid black 1px; border-collapse: collapse;' ><tr>
    <th style='border: solid black 1px;'>Pays</th>
    <th style='border: solid black 1px;'>Capitales</th></tr>"; //Mettre un border a chaque <th> ou <td>
    
    foreach($capitales as $key => $value){ //Lire le tableau
        echo "<tr><td style='border: solid black 1px;'>" . strtoupper($key) . "</td>
        <td style='border: solid black 1px;'>" . $value . "</td></tr>";
    }
    echo "</table>";
}

afficherTableHTML($capitales);
?>