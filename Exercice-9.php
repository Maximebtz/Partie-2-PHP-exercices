<h1>Exercice n°9</h1>

<p>
Créer une fonction personnalisée permettant d’afficher des boutons 
radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").

</p>
<h2>Résultat</h2>

<?php


$elements = array(
    "Masculin",
    "Féminin",
    "autre",
);

function genererCheckbox($elements){
    
    echo "<label>Vous êtes : <br>";
    foreach($elements as $key){
        echo "<input type='radio' name='$key' >$key<br>";
    }
}


genererCheckbox($elements);

?>