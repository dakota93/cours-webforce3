<style>
h2{
    border-top: 1px solid navy;
    border-bottom: 1px solid navy;
    color: red;
}

table, td , tr{
    border: 2px solid black;
    border-collapse: collapse;
    padding: 20px;}

</style>

<?php

//--------------------------------------------------
echo '<h2>les balises PHP</h2>';
//--------------------------------------------------

?>

<?php
// pour ouvrir un passage en php on utilise  la balise precédente en ligne 17
// pour fermer un passage en php on utilise la balise suivante :

?>

<p>Bonjour </p>  <!-- en dehors des balises de php nous pouvons ecrire du html dans un fichier ayant l'extension .php ce n'est pas possible dans un fichier html -->

<?php

// vous n'etes pas obliger de fermer un passage en php en fin de script

// pour faire un commentaire sur 1 seule ligne 
#pour faire un commentaire sur 1 seule ligne

/*
pour faire 
des commentaire 
sur plusieurs lignes
 */

 //------------------------------
 echo'<h2>affichages</h2>';
 //------------------------------

 echo 'Bonjour <br>';// echo et une instruction qui permet d'effectuer un affichage. Nous pouvons y mettre du HTML. Toutes les instructions ce termine par un point virgule ";" en php.


 print'nous sommes lundi <br>';// print est une autre instruction d'affichage 

 var_dump('code');
 print_r('code'); // ces deux fonctions d'affichage permette d'analyser dans le navigateur le contenu d'une variable par exemple (nous en verrons l'utilisation plutard).


 //---------------------
echo'<h2>Variables</h2>';
 //--------------------

 // une variable est un espace memoire qui porte un nom et qui permet de conserver une valeur . cette valeur peut etre de n'importe quel type

 // en php ont represente une variable avec le signe "$" .

 $a = 127; // on declare la variable $a et lui affecte la valeur 127

echo gettype($a);  //gettype() est une fonction predefinie qui permet de voir le type d'une variable . ici il s'agit d'une integer (entier)

 echo'<br>';

$a = 1.5;
echo gettype($a); // ici il s'agit d'un double (nombre a virgule)
echo'<br>';

$a = 'une chaine de caractères';
 echo gettype($a); // il s'agit d'un string 
 echo'<br>';
 $a = '127'; // un nombre ecrit entre quotes ou quillement et interpreter comme un string 

 $a = true; // ou false
 echo gettype($a);// ici il s'agit d'un boolean (booléen)

 // par convention un nom de variable commence par une minuscule, puis on met une majuscule a chaque mot il peux contenir des chiffres (jamais au debut) ou un "_" pas au debut ni a la fin

 // exemple : $maVariable1

  //---------------------
echo'<h2>Concatenation</h2>';
 //--------------------

 // en php on concatene avec le ".".

 $x = 'bonjour ';
 $y = 'tout le monde';
 echo $x . $y . '<br>'; //on concatene les 2 variables et le string avec le point que l'on peux traduire par: "suivis de"

 //-------------------------

 // con catenation et affectation combinées avec l'operateur ";="

 $prenom = 'nicolas';
 $prenom .= '-marie';// on ajoute la valeur "-marie" a la valeur "nicolas" sans la remplacer grave a l'operateur ".="
 echo $prenom . '<br>';// affiche "nicolas-marie"

   //---------------------
echo'<h2>guillemets et quotes</h2>';
 //--------------------

 $message = "aujourd'hui";
 $message = 'aujourd\'hui';
 // on echappe les apostrophes quand on ecrit dans les quotes simple avec altgr+8

 $txt = 'bonjour';

 echo "$txt tout le monde <br>"; // dans les guillemets la variable est evaluée: c'est son contenu qui esta fficher

 echo '$txt tout le monde <br>';// dans les quotes simples, $txt et considérer comme une chaine de caractere brut: on affiche $txt littéralement

    //---------------------
echo'<h2>constante</h2>';
 //--------------------

 // une constante permet de conserver une valeur sauf que celle ci ne peyx pas changer: c'est a dire qu'on ne pourr pas la modifier durant l'execution du script . utile par exemple pour consercer les parametres de connexion a la base de donner de facon certaine.

 define('CAPITAL_FRANCE','Paris');// par convention une constante s'ecrie tjs en majuscule ici on declare la constante  CAPITAL_FRANCE  a laquelle on affecte Paris 

 echo CAPITAL_FRANCE . '<br>';// affiche Paris 

 // autre syntaxe pour declarer une constante :

 const TAUX_CONVERSION = 6.55957;
 echo TAUX_CONVERSION. '<br>';// affiche 6.55957

 //-------------------------------------------------------

 // exercice vous afficher bleu-blanc-rouge en mettant le texte de chaque couleur dans des variables. 



 $a  = "bleu";
 $a .= "-blanc";
 $a .= "-rouge";
 echo $a .'<br>';

 $a = 'bleu';
 $b = '-blanc';
 $c = '-rouge';
 echo $a . $b . $c .'<br>';
 
//---------------------
echo'<h2>opérateurs arithmétiques </h2>';
 //--------------------

 $a = 10;
 $b = 2;

 echo $a + $b . '<br>';//12
 echo $a - $b . '<br>';//8
 echo $a * $b . '<br>';//20
 echo $a / $b . '<br>';//5
 echo $a % $b . '<br>';//0 modulo = reste de la division entiere . exemple : 3%2=1 car si on a 3 billes reparties sur 2 personnes , il nous reste 1

 //---------------------------------------------------------------------

 // Opération et affectation combinées:

$a =10;
$b =2;

$a +=$b;// equivaux a $a + $b soit $a =10+2, $a vaux 12 au final
$a -= $b;// equivaux a 10 car on garde le resultat de la derniere ligne 

// on l'utilisee ces operateurs dans les paniersz d'achats par exemple.

// il existe aussi les operateurs *= /= %=


//------------------------------

//incrémenter et decrementer : 

$i = 0;
$i++;// on augmente $i de 1
$i--; // on diminue $i de 1($i vaut donc 0 ici)

//---------------------
echo'<h2>structures conditionelles</h2>';
 //--------------------

$a = 10;
$b = 5;
$c =2;

//if......else:

    if($a > $b){ // si la condtition est vrai , c'est a dire que $a et superieur a $b alors on execute les accolades qui suivent:
        echo '$a est superieur à $b <br>';
    } else{// sinon si la condtion est fausse on execute le else
        echo'non c\est $b qui est superieur ou egale a $a <br>';
    }

    // l'operateur AND qui s'ecrit &&

    if ($a > $b && $b > $c){
        echo 'ok pour les deux condtions <br>';
        /*si $a  est superieur $b et que dans le meme temps $b est superieur a $c , alors on entre dans les accolades: */
    }

    // l'opérateur OR qui s'ecrit || (altGr 6) 
    if ($a == 9 || $b > $c  ){// si $a est egale (==  pour comparer en valeur ) à 9 pi amors $b et sperieur a $c alors on execute les acollade qui suivent: 
        echo 'ok pour au moins des deux conditions <br>';
    }else{// sinon ..... c'est deux condtions sont fausse
        echo 'les deux conditions sont fausse <br>';
    }

// if ... elseif ... else :
if ($a == 8) { // si $a est égal à 8
	echo 'réponse 1 : $a est égal à 8';
} elseif ($a != 10) { // sinon si $a est différent de 10
	echo 'réponse 2 : $a est différent de 10';
} else { // sinon, si nous ne sommes pas entrés dans le if ni dans le elseif, on entre dans le else :	
	echo 'réponse 3 : les 2 conditions précédentes sont fausses <br>';
}

//--------------------------------------------------

// la condition ternaire:

//la ternaire est une autre syntaxe pour ecrire un if .... else.
$a = 10;
echo ($a==10) ? '$a est egal a 10 <br>' : '$a est different de 10 <br>';

// dans la ternaire le "?" remplace le if et le ":" remplace le else . ainsi ont dit : si $a et egale a 10 on,t affiche la premiere expressions sinon la seconde.

//------------------------------------------------------------
// comparaison avec == et ===

$varA = 1;//integr
$varB = '1';// string

if($varA == $varB){ // la condition est vrai car en valeur 1 et '1' sont equivalents
    echo '$varA est egal a $varB en valeur uniquement<br>';
}

if($varA === $varB){ // la condition est fausse car 1 et '1' sont different en type
echo '$varA est egal a $varB en valeur et en type (strictement egaux) <br>';
}else{
echo 'les deux variable sont different en valeur ou en type (pas strictement egales) <br>';
}

// pour memoire l'operateur "=" est un signe d'affectation

//------------------------------------------------------------

//isset() et emptu()

// definition :
// empty () verifie si c'est vide: 0, '',NULL,false, non défini 
// isset() verifie si c'est defini , et non NULL

$var1 = 0;
$var2 = '';

if(empty($var1)){
echo '$var1 est vide(0, string vide, NULL false ou non defini) <br>';
}

if (isset($var2)) {
echo '$var2 existe et est non NULL <br>';
}

// difference entre isset et empty : si on supprime les declaration des variable $var1 et $var2 empty reste vrai car $var1 n'est pas definie.isset deviens fausse car $var2 n'est pas defini non plus.

// utilisation : empty pour verifier qu'un champs de formulaire et remplis . isset pour verifier l'existance d'une variable avant de l'utiliser 

// l'operateur NOT qui s'ecrit

$var3 = 'quelque chose';
if (!empty($var3)){//"!" pour not qui est une negation. Ainsi quand on a !TRUE cela reviens a FALSE et quand on a !FALSE cela reviens a TRUE
    echo '$var3 n\'est pas vide <br>';// ici on entre dans la condition, car $var3 n'est pas vide 
}

//----------------------------------------------

// php7 : afficher une variable sous condition d'existance  avec l'operateur "??"

echo $maVar ?? 'valeur par defaut';// on affiche la variable $ùmaVar si elle existe sinon on affiche le string qui suit 

// exemple d'utilisation : pour laisser les valeurs saisie dans un formulaire..

//---------------------
echo'<h2>SWITCH</h2>';
 //--------------------

 // la condition switch est une autre syntaxe pour écrire un if .... elseif.... else quand on veux comparer une variable a une multitude de valeurs.

 $langue = 'chinois';

 switch ($langue){
     case 'francais': // on compare $langue a la valeur des "cases" et on execute le code qui suit si elle correspond:
        echo 'bonjour !';
     break; // est obligatoire pour quitter le switch une fois un "case" executer 
     case 'italien': 
        echo 'ciao !';
     break;
     case 'espana': 
        echo 'hola !';
     break;
     default: //  on tombe dans le cas par defaut si on entre pas dans les cases precedents 
     echo 'hello ! <br>';
    break;
 }


 // exercice: vous reecrivez ce switch avec des if... pour obtenir exactement le meme resultats



if( $langue == 'francais' ){ 
    echo 'bonjour';
}

elseif( $langue == 'italien' ){ 
    echo 'ciao';
}

elseif( $langue == 'espana' ){ 
    echo 'hola';
}
else{
echo 'hello <br>';
}

//---------------------------------
echo '<h2> FONCTION PREDEFINIES </h2>';
//---------------------------------

// Une fonction prédéfini permet de réaliser un traitement spécifique préderterminé dans le langage PHP.

//--------
// strpos()
$email1 = 'prenom@site.fr';
echo strpos($email1, '@' );// strpos() indique la position 6 du caractère "@" dans la chaine de caractères $email1 (on compte à partir de 0)


echo '<br>';

$email2 = 'toto';
echo strpos($email2, '@');

var_dump(strpos($email2, '@')); // Grâce au var_dump() on aperçoit que la fonction retourne  false car le caractère "@" n'est pas trouvé dans $email2. Notez bien que quand on fait un echo de false, cela n'affiche rien dans le navigateur. var_dump() est uine instruction d'affichage améliorer que l'on utilise quand on developpe, puis qu'on retire à la fin de la production du site.


//--------------------
// strlen()
$phrase = 'mettez une phrase ici <br>';
echo strlen($phrase); // strlen() petmet de retourner la taile de la chaien de caractère (nombre d'octets occcupé, un caractère ACCENTUER valant 2 octets et un espace 1 octet).

echo '<br>';

//---------------
// substr()
$texte = 'Vous mettez ici un très long texte Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi consequuntur unde, minima quisquam ipsum alias est ab illo ea architecto nobis aliquid, beatae deleniti saepe nulla! Tempora quidem voluptatum ad.'; 
echo substr($texte, 0, 20) . '...<a href="#">lire la suite</a>'; // Coupe une partie du texte, en portant de la position 0 ici et sur 20 octets

//---------------------------------
echo '<h2> FONCTION et utilisateur </h2>';
//---------------------------------

// des fonctions sont des morceaux de code ecrits dans des accolades et portant un nom .On appelle une fonction au besoin pour executer le code qui s'y trouve.

// il est d'usage de creer des fonctions pour ne pas se répéter quand on veux executer plusieurs fois le meme traitement. on parle alors de "factoriser" son code 

function separation(){// on declare une fonction avec le mot clé function suivi du nom de la fonction et d'une paire de () qui accueillerons des parametre ulterieurement 
    echo '<hr>';

}
separation(); // pour executer une fonction (donc le code qui s'y trouve ), on l'apelle en ecrivant son nom suivi d'une paire de ().

//-------------------------------------------------------

// fonction avec parametre et return:
function bonjour ($prenom,$nom) { // $prenom et $nom sont les parametres de notre fonction. Ils permettent de recevoir unevaleur car il s'agit de variable de reception

    return 'bonjour ' .$prenom  .' '. $nom .' ! <br>';// return permet de sortir la phrase bonjour etc... de la fonction et de la renvoyer a l'endroit ou la function est appeler 
}

echo bonjour ('john', 'doe');// si la fonction attend des valeurs il faut obligatoirement les lui donner  et dans le meme ordre que les parametres. ces valeurs s'apellent les arguments . ici on met un echo car la fonction nous retourne la phrase mais ne l'affiche pas. 

// on peux remplacer les arguments par des variables (provenant d'un formulaire par exemple): 

    $prenom = 'pierre';
    $nom = 'giraud';
    echo bonjour ($prenom,$nom);// ici les deux arguments sont variable et peuvent recevoir n'importe quel valeurs; 

 

// Exemple : vous écrivez une fonction qui multiplie un nombre 1 par un nombre 2 fournis lors de l'appel. Cette fonction retourne le résultat de la multiplication. Vous affichez le résultat.


function multiplication($chiffre1, $chiffre2){
     return 'la réponse de : ' . $chiffre1 . ' multiplié par ' . $chiffre2 . ' est ' . $chiffre1 * $chiffre2 . ' ! <br>' ;
}

$chiffre1 = 2;
$chiffre2 = 5;

echo multiplication($chiffre1, $chiffre2);

/* echo 'la réponse est ' . $a * $b . '<br>'; // 10 */

//----------------------------------------------------
echo '<h2> VARIABLE LOCALE ET VARIABLE GLOBALE </h2>';
//----------------------------------------------------


//--------------
// Aller de l'espace local à l'espace global : 
function jourSemaine(){
    $jour = 'mardi'; // Ici noys nous trouvons dans l'espace local de la fonction. Cette variable est donc dite "locale"
    return $jour;// return permet de sortir une valeur de la fonction.
}
//echo $jour;// On ne peut pas accéder à cette variable ici car elle n'est connue qu'à l'intérieur de la fonction jourSemaine()
echo jourSemaine(); // On récupère la valeur "mardi" grâce au return en fin de la fonction.

//------------
// Aller de l'espace global vers l'espace local :
$pays = 'France'; // Ici nous nous trouvons dans l'espace global. Cette variable est donc dite "globale".

function affichePays(){
    global $pays; // global permet d'aller chercher la variable $pays à l'extérieur de la fonction pour pouvoir l'exploiter à l'intérieur.
    echo $pays;// Affiche "France".
}

affichePays();





//----------------------------------------------------
echo '<h2> STRUCTURES ITERATIVES : LES BOUCLES </h2>';
//----------------------------------------------------
//---------------
//Les boucles siont destinées à répéter du code de façon automatique.

// Boucle while : 
$i = 0; // Valeur de départ de la boucle
while ($i < 3){// Tant que $i est inférieur à 3 on entre dans la boucle.
    echo $i . '----';// Affiche "0----1-----2-----".
    $i++; // On oublie pas d'incrémenter la variable $i pour que la condition d'entrée devienne false à un moment donné (évite les boucles infini)
} 

//exercice : a l'aider d'une boucle while vous affichez les années de 1920 a 2020 dans le menu déroulant; 
echo '<select>';
$date = 1920;
while ($date < 2020){
    echo  '<option>' . $date . '</option>' ;
    $date++ ;
}
echo   '</select>';



echo '<select>';
$date = 2020;
while ($date > 1920){
    echo  '<option>' . $date . '</option>' ;
    $date-- ;
}
echo   '</select>';

// la boucle do while:
    // la boucle do while a la particularité de s'executer au moins une fois, puis tant que la condition de fin est vrai. 

    $j = 0;// valeur de départ de la boucle 
    do {
        echo '<br> je fait un tour de boucle <br>';
        $j++;
        
    } while ($j > 10);// la condition renvoie false tout de suite , pourtant la boucke a bien tournée une fois Attention au ";" apres le while

    echo '<br>';

    //--------------------------------------

    // la boucle for:

        // la boucle for et une autre syntaxer que la boucle while
        for ($i = 0; $i < 6; $i++){ // on trouve dans les () de la for : la valeur de départ ; la condition d'entrée dans la boucle ; variation de $i (incrementation, decrementation...)
            echo $i . '--';
        }

        // exercice vous aller afficher les mois de 1 a 12 a l'aide d'une boucle for dans un menu deroulant 
        echo'<br>';
        ?>
        <form>
        <label>Mois de naissance</label>

<select>
<?php

for ($mois = 1; $mois <= 12; $mois++){
    echo  '<option>' . $mois . '</option>' ;
}
?>
</select>

<input type="submit">
</form>
<?php

// faire une boucle for qui affiche 0 à 9 sur la meme ligne 
// puis vous completer la boucle precedente pour mettre les chiffre dans une table html vous y mettrez du css

?>
    


    <table>
    <tr>
   
<?php

for ($n = 0; $n < 10; $n++){
    echo '<td>';
    echo $n ;
    echo '</td>';
}
echo '</tr>';
   echo '</table>';

   //------------------------------------------------
   echo'<h2>les tableaux array</h2>';
   //----------------------------------------------------

   // un  tableau appele array en anglais est une variable amélioré dans laquelle on stocke une multitude de valeur ces valeurs peuvent etre n'importe quel type  elles possedent un indice dont la numeratotation commence a 0

   // declarer un array methode 1:
   
   $liste = array ('noryah', 'sebastien', 'zitouni ', 'kiki', 'phillippe');// les valeur sont séparer par une virgule

   //echo $liste; // erreur de type "array to string conversation" car on ne peut pas afficher directement un tableau 

echo '<pre>';
    var_dump($liste);
echo '</pre>';


echo '<pre>';
print_r($liste);
echo '</pre>';// <pre> est une balise html qui permet de formater le texte

// pour notre besoion nous crreons notre fonction personelle d'affichage :

function debug ($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

debug($liste);

// autre facon de déclarer un array (methode 2):

$tab = ['france','italie','espagne','portugal'];
// indice   0       1         2           3
echo $tab[3] . '<br>'; // pour afficher une valeur du tableau on ecrit son indice dans une paire de crochets apres le nom du tableau ici afficher

// ajouter une valeur a la fin d'un tableau :

$tab[]= 'suisse'; // les crochets vides signifie qu'on ajoute une valeur a la fin du tableau $tab

debug($tab); // pour verifier que la valeur suisse est presente
echo $tab[4] . '<br>';

// --------------------------------

//les tableaux associatif:
    // dans un tableaux associatif nous pouvons choisir le nom des indices 
    $couleur = array (
        'b'=>'bleu',
        'r'=>'rouge',
        'v'=>'vert',
    );
// pour afficher un valeur de notre tableau associatif :
    echo 'la premier couleur du tableau est ' . $couleur['b'] . '.<br>';
     echo "la premier couleur du tableau est $couleur[b] .  <br>";
     // quand un tableau associatif est ecrit dans des guillemets ou des quotes ; il perd les quotes autour de son indice.

     // compter le nombre d'elements contenue dans un tableau
    echo'nombre de valeurs dans le tableau:' . count ($couleur). '<br>';// affiche 3
    echo'nombre de valeurs dans le tableau:' . sizeof($couleur) . '<br>';// affiche 3 aussi car sizeof() fait la meme chose que count() dont il est un alias


    //-------------------------------------------------
    echo '<h2>la boucle foreach</h2>';
    //----------------------------------------------------

    // foreach est un moyen simple de passer en revue un tableau de facon automatique Cette boucle ne fonctionne que sur les tableaux et les objet.

    debug($tab); // pour voir le tableau a parcourir

    foreach($tab as $pays){ //on parcvours le tableau $tab par ses valeurs la variable $pays prend les valeur du tableau succesivement  a chaque tour de boucle.le mot clé as fait partie de la syntaxe il est obligatoire.
        echo $pays. '<br>';
    }
    echo'<hr>';
// la boucle foreach pour parcourir les indices et les valeurs:


    foreach ($tab as $indice => $pays){// quand il y a deux variable apres 'as' celle de gauche parcours les indices et celle de droite parcours les valeurs (quelque soit leur noms)
        echo $indice.' correspond à '. $pays. '<br>';
    }

    // vous declarer un tableau associatif avec les indice prenom nom email et telephone  et vous y mettez les valeurs correspondant a une seule personne .puis avec une boucle foreach vous affichez les valeurs dans des paragraphes sauf le prenom qui doit etre dans un <h3>.


     $contact = array(
    'prenom' => 'John',
    'nom' => 'Doe',
    'email' => 'jdoe@gmail.fr',
    'telephone' => '06 05 88 88 88'
);

debug($contact);

foreach ($contact as $indice => $valeur){
    if($indice == 'prenom'){
        echo '<h3>' . $valeur . '</h3>';
    }else {
        echo '<p>' . $valeur . '</p>';
    }
}
//-------------------------------------
echo '<h2> TABLEAUX MULTI DIMENTIONNEL </h2>';
//-------------------------------------

// On parle de tableau multidimentionnel quand un tableau est contenu dans un autre tableau. Chaque tableau représente une dimension
// Création d'un tableau multidimentionnel :
$tab_multi = array(
    0 => array(
        'prenom' => 'Julien',
        'nom' => 'Dupont',
        'telephone' => '01 24 25 86 94'
    ),
    1 => array(
        'prenom' => 'Nicolas',
        'nom' => 'Durant',
        'telephone' => '01 45 87 25 33'
    ),
    2 => array(
        'prenom' => 'Pierre',
        'nom' => 'Dulac'
    )
);
debug($tab_multi);

// afficher la valeur "jullien " de $tab_multi:
echo $tab_multi[0]['prenom'];



