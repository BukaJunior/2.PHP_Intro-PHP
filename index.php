<?php // <= Ceci permet de dire à l'interpréteur que la suite du fichier est du code PHP !


echo "Hello World !";
// <= echo est une instruction qui permet d'afficher du texte !
// ! Ne pas oublier le point-virgule à la fin de chaque instruction !

echo PHP_EOL;
// <= Cette instruction permet d'ajouter un retour à la ligne !

echo "Proton!";
// <= On peut mettre plusieurs instructions sur une même ligne !
echo PHP_EOL;

echo "Comment ça va ?" . PHP_EOL . "Bien et toi ?" . PHP_EOL;
// <= On peut aussi mettre plusieurs instructions sur une même ligne, en les séparant par un point (CONCATENATION) on peut coller !

echo 'Comme d\'habitude !' . PHP_EOL;
// <= Pour utiliser les simples quotes, il faut les échapper avec "\" !

$promo = "Proton";

echo "Hello $promo !" . PHP_EOL;

// EXERCICE 1

// 1- Créer une variable $prenom et qui contient votre prénom dedans. Puis vous affichez son contenu avec echo.
$prenom = "Junior" . PHP_EOL;
echo $prenom;

// 2 - Reprendre cette variable et GRACE A ELLE affiche la phrase "Je m'appelle XXX" (où XXX est le contenu de la variable $prenom)
echo "Je m'appelle " . $prenom . PHP_EOL;

var_dump($prenom);
// <= var_dump permet d'afficher le contenu d'une variable, ainsi que son type !

// EXERCICE 2
// - Paul et Virginie vont aux champignons avec un panier chacun. On peut modéliser ces paniers à l'aide de deux variables : $panierPaul et $panierVirginie. Comme c'est une bonne année, ils en ont ramassé respectivement 37 et 42. Créez ces variables avec leurs adéquates.

$panierPaul = 37;
$panierVirginie = 42;

// EXERCICE 3
// -  En rentrant à la maison, ils ont mis leurs paniers en commun dans une variable appelée $panierCommun. Faites le calcul et remplissez cette variable.

$panierCommun = $panierPaul + $panierVirginie;
var_dump($panierCommun);

// EXERCICE 4
// - Dans une variable appelée $moyenne faites la moyenne du nombre champignons ramassés par personne (somme totale des champis divisée par le nombre de paniers (2))

$moyenne = $panierCommun / 2;
var_dump($moyenne);

$promo = "Proton";

if ($promo != "Proton") {
    echo "La promo est Proton" . PHP_EOL;
} else {
    echo "La promo n'est pas Proton" . PHP_EOL;
}

// On stocke dans une variable l'age d'une personne
$age = 15;

// On modélise avec une variable booléene le fait que cette personne possède des revenus (si elle gagne de l'argent = true, sinon false)
$revenus = false;

// On peut vérifier que deux conditions sont vraies à l'aide du signe && (ce qui veut dire ET).
// La 1ere condition comme la 2nd doivent etre remplies pour passer dans le if.
// Si on veut qu'une seule condition sur les deux soit remplie pour passer dans le if, on utilise un OU avec le signe || (Alt Gr + 6).
// Ici une seule des conditions est nécéssaire.

// On veut vérifier qu'une personne soit majeure ET gagne de l'argent pour pouvoir payer des impots

if ($age >= 18 && $revenus == true) {
    echo "Bienvenue sur le site des impots, veuillez rentrer votre numero fiscal et votre carte bleue";
} else {
    echo "Vous n'êtes pas imposable" . PHP_EOL;
}

// - Créer une variable $aliment qui contient le mot "fraise"
// - Ecrire la condition qui permet de vérifier le contenu de la variable $aliment. Si elle contient "fraise", afficher "C'est un fruit !" sinon afficher "Je ne connais pas cet aliment"
// - Modifier la condition écrite pour qu'elle gère en plus le cas où $aliment contient "carotte" et afficher "C'est un légume" dans ce cas
// - Modifier la condition pour afficher "C'est un fruit" si $aliment content "fraise" OU "framboise" OU "cerise".

$aliment = "carotte";

if ($aliment == "fraise" || $aliment == "framboise" || $aliment == "cerise") {
    echo "C'est un fruit" . PHP_EOL;
} else if ($aliment == "carotte") {
    echo "C'est un légume" . PHP_EOL;
}
 else {
    echo "Je ne connais pas cet aliment" . PHP_EOL;
}



// Cette ligne permet d'arrêter l'intreprétation du code PHP. On pourrait mettre du HTML derrière, PHP ne le lirait pas ! Si tout le fichier contient du PHP, cette ligne est optionnelle !
?>

<!--  PHP dans le HTML -->
<h1>La page de la promo: <?php echo $promo; ?></h1>
