<h1>Exercice n°10</h1>

<p>
En utilisant l'ensemble des fonctions personnalisées crées précédemment,
créer un formulaire complet qui contient les informations suivantes : 
champs de texte avec nom, prénom, adresse e-mail, ville, sexe et
une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
 « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
</p>
<h2>Résultat</h2>

<?php

$name = array("Nom :", 
            "Prénom :", 
            "adresse e-mail :", 
            "Ville :");
$sexe = array("Madame", 
            "Monsieur", 
            "Autre");
$formation = array("Développeur Logiciel", 
                    "Designer web", 
                    "Intégrateur", 
                    "Chef de projet");
 
echo "<form>";
function affichageFormulaire($name){
    
    echo "Saisir les champs suivants : <br>";
    forecddds($name as $key){
        echo "<br><label for='$key'>$key</label><br> 
        <input type='text' id='$key' name='$key'/><br>";
        
    }
}
   
function affichageSexe($sexe){
     
    echo "<label><br> Sexe : <br></label>";
    echo "<select>";
    foreach($sexe as $type){
        echo "<option value='$type'>$type</option>";
    }
    echo "</select><br>";
    
}

    
function affichageFormations($formation){
    
    echo "<br><label>Formations :</label><br>";
    foreach($formation as $key){
        echo "<input type='radio' name='name'> $key <br></label>";
    } 
    
}

echo "</form>";


affichageFormulaire($name);
affichageSexe($sexe);
affichageFormations($formation);
echo "<br><input type='submit' name='submit' value='submit'>";
?>