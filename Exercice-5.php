<h1>Exercice n°5</h1>

<p>
    Faire un "Input" en précisant le nom des champs associés
</p>

<h2>Résultat</h2>

<?php

//Faire un tableau
$nomInput = array("Nom", "Prenom", "Ville");

function afficherInput($nomInput){
   foreach($nomInput as $key) echo "
    <form>
    <label for='$key'>$key</label><br> 
    <input type='text' id='$key' name='$key'/>
    </form>";
}

afficherInput($nomInput);
?>