<h1>Exercice n°15</h1>

<p>
En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, 
vérifier si une adresse e-mail a le bon format.
</p>
<h2>Résultat</h2>

<?php

$email = "elan@elan-formation.fr";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email est valide.";
} 
else {
    echo "L'adresse email est invalide.";
}
?>