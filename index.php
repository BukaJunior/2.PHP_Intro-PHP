<?php // <= Ceci permet de dire à l'interpréteur que la suite du fichier est du code PHP !

// Ici on indique à PHP d'afficher une information à l'aide du mot-clé "echo". Cette information est entourée de guillemets pour que PHP ne la lise pas. On aurait pu mettre n'importe quel texte à l'intérieur, PHP n'a pas besoin de comprendre ce qu'on veut afficher.
// ! Pour indiquer à PHP qu'on a terminé notre instruction, on utilise le point virgule.  Il est obligatoire !
echo "Bonjour"; 
// En PHP, les espaces et sauts de lignes ne comptent pas tant qu'ils ne sont pas indiqués dans nos chaines de caractères (strings)
// Une chaine de caractères est un ensemble de caractères (lettres, nombres, etc) délimité par des guillemets (quotes) simples ou doubles.
// ! Si notre chaine commence par un type donné de guillemets il faut la terminer avec le meme type.
echo ' Proton';


// On affiche un retour à la ligne dans le terminal uniquement avec PHP_EOL (end of line). L'avantage de ce mot clé c'est qu'il est compris par tous les systèmes d'exploitation. Donc pas besoin de retenir les différents caractères servent au retour à la ligne

echo PHP_EOL;

// PHP ne peut pas afficher deux choses en une seule instruction. Echo ne fonctionne qu'avec un seul argument. Pour lui dire d'afficher une chaine de caractères puis d'y acoller un saut de ligne on utilise la concaténation.
// Pour concaténer deux informations, on utilise un point (un peu comme un point de colle pour coller deux papiers ensemble)
echo "Comment ça va ?" . PHP_EOL . "C'est la journée mondiale de l'espéranto !";

echo PHP_EOL;

// Si on veut afficher des guillemets alors qu'ils servent déjà à ouvrir et fermer une string, il faut les échapper à l'aide du caractère \.
echo "Comme disait Gandalf : \"Sers-toi de la force, Harry\"  dans le film Retour vers le futur";

echo PHP_EOL;

echo "--------------";

echo PHP_EOL;



// En PHP, on peut stocker des informations dans des sortes de petites boites appelées variables (parce qu'on peut varier leur contenu).
// Une variable commence toujours par un dollar suivi de son nom.
// On essaie systématiquement de mettre un explicite qui décrit son contenu.
// Un nom de variable ne peut pas contenir d'espaces et d'accents  et doit commencer par une minuscule. Si ce nom est composé de plusieurs mots, on séparer les mots soit par des underscores "_" (snake_case) soit on met une majuscule à chaque mot sauf le premier (camelCase).
$nomPromo = "Photon";

// Avec echo on peut aussi afficher le contenu d'une variable.
echo $nomPromo;
echo PHP_EOL;

// On peut modifier le contenu d'une variable c'est à dire lui donner une nouvelle valeur.
$nomPromo = "Proton";

echo $nomPromo;
echo PHP_EOL;

echo "Salut les " . $nomPromo . " ! Comment ça va les " . $nomPromo . " ?";
echo "Alors les " . $nomPromo . ", vous aimez PHP ? ";
echo PHP_EOL;

echo "-----------" . PHP_EOL;


// 1- Créer une variable $prenom et qui contient votre prénom dedans. Puis vous affichez son contenu

$prenom = "Fabio";
echo $prenom;
echo PHP_EOL;

// 2 - Reprendre cette variable et GRACE A ELLE affiche la phrase "Je m'appelle XXX" (où XXX est le contenu de la variable $prenom)

echo "Je me présente, je m'appelle " . $prenom;
echo PHP_EOL . "-----------" . PHP_EOL;


// Types de données gérés par PHP

$exempleString = "Ceci est une chaine de caractères"; // String
$exempleEntier = 10; // Integer ou Int (nombre entier)
$exempleNombreDecimal = 10.5; // Float (nombre décimal avec un point !!!)
$exempleBooleen = true; //Bool (boolean) contient soit true (1) soit false (0)
$exempleString2 = "60"; // String qui contient la valeur 60, ce n'est pas un entier !

// Var_dump est un outil permettant d'afficher à la fois le contenu d'une variable ET son type.
var_dump($exempleEntier);
var_dump($exempleNombreDecimal);
var_dump($exempleBooleen);
var_dump($exempleString);
var_dump($exempleString2);

echo PHP_EOL . "-----------" . PHP_EOL;

// Le caractère + permet de faire des additions
$somme = 10 + 5;
var_dump($somme);

// On peut réutiliser des variables pour d'autres opérations. Ici on prend le résultat de la première addition et on le double.
$somme2 = $somme + $somme;
var_dump($somme2);

// Le caractère - permet de faire une soustraction
$soustraction = 5 - 3;
var_dump($soustraction);

// Le caractère * permet de faire une multiplication
$multiplication = 6 * 7;
var_dump($multiplication);

// Le caractère / permet de faire une division
$division = 9 / 3;
var_dump($division);


//On peut réutiliser toutes ces variables pour faire des calculs plus complexes 
// Comme en maths, on met des parenthèses autour des opérations à calculer en premier
$megamix = ($somme + $soustraction) * $division / $multiplication;
var_dump($megamix);

// On peut redéfinir une variable en utilisant sa propre valeur. Ici $somme était égale à 15, on lui addition 1. Elle est maintenant égale à 16
$somme = $somme + 1;

echo PHP_EOL . "-----------" . PHP_EOL;


// - Paul et Virginie vont aux champignons avec un panier chacun. On peut modéliser ces paniers à l'aide de deux variables : $panierPaul et $panierVirginie. Comme c'est une bonne année, ils en ont ramassé respectivement 37 et 42. Créez ces variables avec leurs adéquates.

$panierPaul = 37;

$panierVirginie = 42;

var_dump($panierPaul);
var_dump($panierVirginie);


// -  En rentrant à la maison, ils ont mis leurs paniers en commun dans une variable appelée $panierCommun. Faites le calcul et remplissez cette variable.

$panierCommun = $panierPaul + $panierVirginie;
var_dump($panierCommun);


// - Dans une variable appelée $moyenne faites la moyenne du nombre champignons ramassés par personne (somme totale des champis divisée par le nombre de paniers (2))

$moyenne = $panierCommun / 2;
var_dump($moyenne);

echo PHP_EOL . "-----------" . PHP_EOL;

$nomPromo = "Proton";


// If (condition) permet d'exécuter certaines instructions si la condition entre parenthèses est vraie (ici si $nomPromo contient la valeur Proton).
// Le signe == permet de vérifier que les deux éléments comparés sont identiques.
// Le signe != permet de vérifier que deux éléments sont différents
if ($nomPromo == "Proton") {
    // Cette phrase ne s'affiche que si la variable $nomPromo contient exactement "Proton"
    echo "Coucou la promo Proton";
}
// Avec else if on peut décrire une autre condition à vérifier SEULEMENT SI la première n'était pas vérifiée
else if ($nomPromo == "Photon") {
    echo "Coucou la promo jumelle !";
}
// Else permet de décrire les instructions à exécuter si aucun des if et else if n'est vérifié.
else {
    echo "Coucou autre promo qui s'appelle " . $nomPromo;
}


echo PHP_EOL . "-----------" . PHP_EOL;


// On stocke dans une variable l'age d'une personne
$age = 15;

// On modélise avec une variable booléene le fait que cette personne possède des revenus (si elle gagne de l'argent = true, sinon false)
$revenus = false;

// On peut vérifier que deux conditions sont vraies à l'aide du signe && (ce qui veut dire ET). La 1ere condition comme la 2nd doivent etre remplies pour passer dans le if.
// Si on veut qu'une seule condition sur les deux soit remplie pour passer dans le if, on utilise un OU avec le signe || (Alt Gr + 6). Ici une seule des conditions est nécéssaire.

// On veut vérifier qu'une personne soit majeure ET gagne de l'argent pour pouvoir payer des impots
if( $age >= 18 && $revenus == true) {
    echo "Bienvenue sur le site des impots, veuillez rentrer votre numero fiscal et votre carte bleue";
} else {
    echo "Vous ne pouvez pas payer d'impots";
}

echo PHP_EOL . "-----------" . PHP_EOL;


// - Créer une variable $aliment qui contient le mot "fraise"
// - Ecrire la condition qui permet de vérifier le contenu de la variable $aliment. Si elle contient "fraise", afficher "C'est un fruit !" sinon afficher "Je ne connais pas cet aliment"
// - Modifier la condition écrite pour qu'elle gère en plus le cas où $aliment contient "carotte" et afficher "C'est un légume" dans ce cas
// - Modifier la condition pour afficher "C'est un fruit" si $aliment content "fraise" OU "framboise" OU "cerise".

$aliment = "framboise";


if($aliment == "fraise" || $aliment == "cerise" || $aliment ==  "framboise") {
    echo "C'est un fruit !";
} 
else if ($aliment == "carotte") {
    echo "C'est un légume";

} 
else {
    echo "Je ne connais pas cet aliment";
}


// Cette ligne permet d'arrêter l'intreprétation du code PHP. On pourrait mettre du HTML derrière, PHP ne le lirait pas ! Si tout le fichier contient du PHP, cette ligne est optionnelle !
?>
