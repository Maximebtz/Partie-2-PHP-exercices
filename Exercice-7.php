<h1>Exercice n°7</h1>

<p>
 Créer une fonction personnalisée permettant de générer des cases à cocher.
 On pourra préciser dans le tableau associatif si la case est cochée ou non.
</p>
<h2>Résultat</h2>

<?php


function genererCheckbox($elements){
    
    echo "<label> Choisissez la bonne réponse : <br>";
    foreach($elements as $key => $value){
        $checked_attr = $value ? "$value" : "";
        echo "<input type='checkbox' name='$key' $checked_attr>$key<br>";
    }
}



$elements = array(
    "Choix 1" => false,
    "Choix 2" => true,
    "Choix 3" => false,
);


genererCheckbox($elements);
?>