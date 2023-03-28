<h1>Exercice n°7</h1>

<p>
 Créer une fonction personnalisée permettant de générer des cases à cocher.
 On pourra préciser dans le tableau associatif si la case est cochée ou non.
</p>
<h2>Résultat</h2>

<?php

//Faire un tableau avec valeur booléen pour savoir si vrai ou faux
$elements = array(
    "Choix 1" => false,
    "Choix 2" => true,
    "Choix 3" => false,
);

function genererCheckbox($elements){
    
    echo "<label> Choisissez la bonne réponse : <br>";
    foreach($elements as $key => $value){
        $checked_attr = $value ? "$value" : "";
        echo "<input type='checkbox' name='$key' $checked_attr>$key<br>";
    }
}

genererCheckbox($elements);
?>


<!-- 
    - $checked_attr = $value ? "$value" : ""; : Cette ligne définit une 
variable $checked_attr qui sera utilisée pour stocker l'attribut checked de la case à cocher. 
L'opérateur ternaire ? : est utilisé ici pour affecter $value à $checked_attr si $value 
est vrai (c'est-à-dire qu'il a une valeur), 
sinon $checked_attr sera défini sur une chaîne vide "".

- echo "<input type='checkbox' name='$key' $checked_attr>$key<br>"; : 
Cette ligne utilise la fonction echo pour afficher la balise HTML de la case à cocher. 
Le type d'entrée est "checkbox" et le nom de l'entrée est $key, 
qui est une variable passée au code en tant que paramètre. 
L'attribut checked est ajouté à la balise d'entrée en fonction de la valeur de 
$checked_attr que nous avons définie dans la première ligne. 
Enfin, le nom de l'entrée est affiché à côté de la case à cocher suivi d'une 
balise HTML de saut de ligne <br>.

En résumé, ce code PHP génère une case à cocher HTML avec un nom et
 un attribut checked optionnel, en fonction des paramètres qui lui sont passés. -->