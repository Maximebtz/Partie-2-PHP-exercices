<h1>Exercice n°6</h1>

<p>
Créer une fonction personnalisée permettant de remplir une liste
 déroulante à partir d'un tableau de valeurs.
</p>

<h2>Résultat</h2>

<?php

$elements = array("Monsieur","Madame","Mademoiselle");


echo "<label>Liste</label><br>";

function alimenterListeDeroulante($elements){
    echo "<select>"; //<Select> pour afficher un selecteur <option> pour afficher les clés
   foreach($elements as $key){
    echo "
        <option value='$key'>$key</option>";
    }
    echo "</select>";
};

alimenterListeDeroulante($elements);
?>