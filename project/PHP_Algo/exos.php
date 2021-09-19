<?php

// session_strza();
// varialbe = $_SESSION
// session destroy
//stocker les variables dans un JSON ou un cookie

// -------------- Inclure du code non exécuté dans la page ---------------------
// la manière  qui parait possible serait que chaque fonction exercice appelle cette fonction qui permt de lire la fonction jusqu'à cet apppel
// ar il n'est pas poàssible de lire une fonction en dehors de celle-ci.

function afficherCode($func){
    $func = func();
    ?>
    <pre><code class="language-php">
    <?php $func ; ?>
    </code></pre>
    <?php
}

// ------------Messages -------------

$messInfo = '<p class="text-secondary"> <svg xmlns="http://www.w3.org/2000/svg" width="" height="2em" fill="currentColor" class="bi bi-exclamation-diamond" viewBox="0 0 16 16"><path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/><path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/></svg> Note : en raison de son exécution automatique, les balises d\'interprétation de php ont été altérées. Pour obtenir un code valide, remplacez &lt;\?php par &lt;?php et \?&gt; par ?&gt; ci-dessus.</p>';

$success = '<span class="text-success float-right" title="Le code fonctionne correctement." alt="Le code fonctionne correctement."><svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/></svg></span>';
$fail = '<span class="text-warning float-right" title="Le code ne fonctionne pas encore parfaitement." alt="Le code ne fonctionne pas encore parfaitement."><svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/></svg></span>';

// ---------- Exercice 1-1 -----------
function ex11(){
        $A = 12;
        echo 'A vaut ' . $A . '<br>';
        $B = 2;
        echo 'B vaut ' . $B . '<br>';
        $C = $A * $B;
        echo 'C vaut ' . $C . '<br>';
}

// ---------- Exercice 1-2 -----------
function ex12(){
    // function inversion($a, $b){ // FONCTION MARCHE PAS
    //     $c = $a;
    //     $a = $b;
    //     $b = $c;
    // }
    $A = 10;
    echo 'A vaut ' . $A . '<br>';
    $B = 26;
    echo 'B vaut ' . $B . '<br>';
    $C = $A;
    $A = $B;
    $B = $C;
    echo 'Inversion. <br>';
    echo 'A vaut ' . $A . '<br>';
    echo 'B vaut ' . $B . '<br>';
}

// $c2 = 'Some content inside the popover';
// $c1 = '
//     function inversion($a, $b){
//         $c = $a;
//         $a = $b;
//         $b = $c;
//     }
//     $A = 10;
//     echo "A vaut " . $A . "<br>"
//     $B = 26;
//     echo "B vaut " . $B . "<br>"
//     inversion($A, $B); // MARCHE PAS
//     echo "Inversion.<br>";
//     echo "A vaut " . $A . "<br>";
//     echo "B vaut " . $B . "<br>";
//     ' ;


// ---------- Exercice 1-3 ----------- // MARCHE PAS
function ex13(){
    $A = "123";
    $B = "67";
    $C = $A + $B; // MARCHE PAS car quand on utilise l'opérateur + , le php transtype les valeur en numérique, $C est donc un int
    echo 'A + B vaut ' . $C . '<br>';
    echo 'A . B vaut ' . $A . $B . '<br>';
}

// ---------- Exercice 2-1 (ancien) -----------
// function ex21(){
//     echo 'Entrez le prix hors taxe d'un produit svp :<br>';
        ?>
        <!-- <form method="post" action="">
        <input type="text" name="prixht">
        <input type="submit" value="valider">
        </form> -->
        <?php
//     function prixttc($prixht){
//         $prixttc = round($prixht * 1.196, 2); // round sert à arrondi au dixième supérieur
//         return $prixttc;
//     }

//     $prixht = !empty($_POST['prixht']) ? $_POST['prixht'] : null; // la variable $prixht est définie/affectée au début de la page, même si l'user n'a pas encore activé ce formulaire utilisé pour envoyer la valeur souhaité de $prixht. Cela empêche un message de type 'Notice' indiquant que l'index de $_POST n'existe pas encore

//     if ($prixht != null) {
//         $prixTTC = prixttc($_POST['prixht']);
//         echo "le prix HT est de {$prixht}<br>";
//         echo "le prix TTC est de {$prixTTC}<br>";

//     } else {
//         echo 'aucune saisie !<br>';
//     }
// }

// ---------- Exercice 2-1  ----------- vérifier type d'input number

function ex21(){
    function prixttc($prixht){
        $prixttc = round($prixht * 1.196, 2); // round sert à arrondi au dixième supérieur
        return $prixttc;
    }

    if ( !empty($_POST['prixht']) ){
        $prixht = $_POST['prixht'];
        echo "Le prix HT du produit est de {$prixht}€.<br>";
        $prixTTC = prixttc($_POST['prixht']);
        echo "Le prix TTC du produit est de {$prixTTC}€.<br>";
    } else{
        echo "Entrez le prix hors taxe d'un produit svp :<br>";
        ?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="text" name="prixht" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <?php
    }
}

// ---------- Exercice 2-2 -----------
function ex22(){
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) ){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        echo 'Bonjour ' . $prenom . ' ' . $nom . ', je vous souhaite la bienvenue. <br>';
    } else{
        echo "Bonjour, quels sont vos noms et prénoms svp ? <br><br>";
        ?>
        <form method="post" action="" class="input-group form-inline">
            <input type="text" name="prenom" placeholder="Prénom" class="form-control">
            <input type="text" name="nom" placeholder="Nom" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <?php
    }
}

// ---------- Exercice 3-1 ----------- // vérifié type d'input number
function ex31(){
    function positivite($nb1, $nb2){
        if( $nb1*$nb2 > 0 ){
            return 'positif';
        } elseif( $nb1*$nb2 < 0 ){
            return 'négatif';
        } elseif( $nb1*$nb2 == 0 ){
            return 'positif et négatif (0)';
        } else{
            return 'ERROR';
        }
    }

    if (!empty($_POST['nb1']) && !empty($_POST['nb2']) ){
        $nb1 = $_POST['nb1'];
        $nb2 = $_POST['nb2'];

        echo 'Le produit de ' . $nb1 . ' et ' . $nb2 . ' est ' . positivite($nb1, $nb2) . '. <br>';
    } else{
        echo "Entrez deux nombres svp :<br>";
        ?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="number" name="nb1" placeholder="Nombre n1">
            <input type="number" name="nb2" placeholder="Nombre n2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <?php
    }
}

// ---------- Exercice 3-2 -----------
function ex32(){
    function films($age){
        if($age < 13){
            echo 'Vous pouvez aller voir le film <i>Action Man</i>, parfait pour les enfants.<br>';
        } elseif($age >= 13 && $age <= 18){
            echo 'Vous pouvez aller voir le film <i>Matrix</i>, accessible aux adolescents.<br>';
        } elseif($age > 18){
            echo 'Vous pouvez aller voir le film <i>Evil Dead</i>, réservé aux adultess.<br>';
        } else{
            echo 'Je ne peux pas vous conseiller car quelque chose n\' pas fonctionné. Désolé (+__+)<br>';
        }
    }

    if ( !empty($_POST['age']) ){
        $age = $_POST['age'];
        films($age);
    } else{ // Etat initial
        echo "Quel âge avez-vous ?<br>";
        ?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="number" name="age" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <?php
    }
}

// ---------- Exercice 4-1 -----------
function ex41(){
    $nbrMyst = 9;

    if ( !empty($_POST['nbrMyst']) ){
        if($_POST['nbrMyst'] == $nbrMyst){
            echo "Bravo ! Vous avez trouvez le nombre mystère, c'était bien " . $nbrMyst . '.<br>';
        } elseif (is_numeric($_POST['nbrMyst'])){
            echo "Dommage ! Retentez votre chance, c'est gratuit.<br>";
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="nbrMyst" placeholder="Nombre entre 0 et 10" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        } else {
            echo "Ceci n'est pas un nombre. Réessayez, vous pouvez y arriver !<br>";
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="nbrMyst" placeholder="Nombre entre 0 et 10" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        }
    } else{
        echo "Trouvez le nombre mystère !<br>";
        echo "Il est compris entre 0 et 10.<br>";
        ?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="number" name="nbrMyst" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <?php 
    }
}

// ---------- Exercice 4-2 -----------
function ex42(){
    function decompte($chiffreA){
        echo 'Les nombres inférieurs à ' . $chiffreA . ' sont :<br>';
        for($i = $chiffreA - 1 ; $i >= 0 ; $i--){
            echo $i . ' ;<br>';
        }
    }

    if ( !empty($_POST['chiffreA']) ){
        if($_POST['chiffreA'] >= 0 AND $_POST['chiffreA'] < 20){
            $chiffreA = $_POST['chiffreA'];
            decompte($chiffreA);
        } elseif (is_numeric($_POST['chiffreA'])){
            echo "Entrez un nombre entre 1 et 20 svp.<br>";
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="chiffreA" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        } else {
            echo "Ceci n'est pas un nombre. Réessayez, vous pouvez y arriver !<br>";
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="chiffreA" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        }
    } else{
        echo "Entrez un nombre entre 0 et 20 svp :<br>";
        ?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="number" name="chiffreA" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <?php
    }
}

// ---------- Exercice 4-3 -----------
function ex43(){

    $nbrDevine = 17;

    if ( !empty($_POST['nbrDevine']) ){
        $tentative = $_POST['nbrDevine'];
        if ($_POST['nbrDevine'] == $nbrDevine){
            echo "Bravo ! Vous avez trouvez le nombre mystère, c'était bien " . $nbrDevine . '.<br>';
        } elseif (is_numeric($_POST['nbrDevine']) && $tentative < $nbrDevine){
            echo "Dommage ! Le nombre mystère est supérieur à " . $tentative . '<br>';
            echo "Réessayez !<br>";
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="nbrDevine" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        } elseif (is_numeric($_POST['nbrDevine']) && $tentative > $nbrDevine){
            echo "Dommage ! Le nombre mystère est inférieur à " . $tentative . '<br>';
            echo "Réessayez !<br>";
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="nbrDevine" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        } else {
            echo "Ceci n'est pas un nombre. Réessayez, vous pouvez y arriver !<br>";
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="nbrDevine" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        }
    } else{
        echo "Trouvez le nombre mystère !<br>";
        echo "Il est compris entre 0 et 20.<br>";
        ?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="number" name="nbrDevine" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <?php 
    }
}

// ---------- Exercice 5-1 -----------
// function ex51(){
//     echo 'Néant. <br>';
// }

// ---------- Exercice 6-1 -----------
function ex61(){
    echo "Soit le tableau suivant :<br>";
    echo '$nombres = [10, 15, 20, 15, 14, 8].<br>';
    $nombres = [10, 15, 20, 15, 14, 8];
    $somme = 0;
    for( $i = 0 ; $i < 6 ; $i++ ){
        $somme = $somme + $nombres[$i];
    }
    echo 'La somme des valeurs de $nombres est ' . $somme . '<br>';
}

// ---------- Exercice 6-2 -----------
function ex62(){
    // $nbrEleve ;
    if ( !empty($_POST['nbrEleve']) ){
        if($_POST['nbrEleve'] > 0 && $_POST['nbrEleve'] < 25){
            $nbrEleve = $_POST['nbrEleve'] ; // BONNE FIN de 1ere PARTIE
        } elseif (is_numeric($_POST['nbrEleve'])){
            echo "Entrez un nombre d'élèves plus raisonnable svp.<br>";
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="nbrEleve" placeholder="Nombre entre 0 et 25" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        } else {
            echo "Ceci n'est pas un nombre. Réessayez, vous pouvez y arriver !<br>";
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="nbrEleve" placeholder="Nombre entre 0 et 25" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        }
    } else{
        echo "Combien y a-t-il d'élèves ?<br>";
        ?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="number" name="nbrEleve" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <?php
    }

    function isFormated($listeNote, $nbrEleve){
        $tabNotes = explode(" ", $_POST['listeNote']); //transforme en tableau
        if(count($tabNotes) == $nbrEleve){  //vérifier si le bon nombre de note a été entré
            for($i = 0 ; $i < $nbrEleve ; $i++){ //vérifier si chaque note entrée est dans le bon format
                if( is_numeric($tabNotes[$i]) && $tabNotes[$i] <= 20 && $tabNotes[$i] >= 0 ){
                    return true ;
                } else{
                    return false ;
                }
            }
        } else{
            return false ;
        }
    }

    if ( !empty($_POST['listeNote']) ){
        $listeNote = $_POST['listeNote'];
        $isFormated = isFormated($listeNote, $nbrEleve); // ATTENTION : $nbrEleve n'est pas conservé d'une session sur l'autre
        if( $isFormated ){
            echo "Très bien, le tableau \$tabNotes vaut" . $tabNotes . '.<br>'; // BONNE FIN
        } else {
            echo "Entrez une liste de " . $nbrEleve . ' notes sur 20, séparées par un <u>espace</u> svp.<br>'; // ATTENTION : $nbrEleve n'est pas conservé d'une session sur l'autre
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input  type="text" name="listeNote" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        }
    } elseif ( !empty($nbrEleve) ){
        echo "Très bien, la classe comprend " . $nbrEleve . ' élèves.<br>';
        echo "Veuillez entrer les notes de tous les élèves, séparées par un <u>espace</u>.<br>";
        ?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input  type="text" name="listeNote" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <?php
    } 
}

// ---------- Exercice 6-3 -----------
function ex63(){


}

// ---------- Exercice 7-1 -----------
function ex71(){
    $nbres = [[0, 18], [1, 45], [45, 48], [-3, 2]];
    echo "Soit le tableau \$nbres[] de valeur [[0, 18], [1, 45], [45, 48], [-3, 2]].<br>"; // essayer d'afficher automatiquement la valeur d'un talbeau multidimensionnel

    $max = $nbres[0][0] ;
    for ( $i=0 ; !empty($nbres[$i]) ; $i++ ){
        for ( $j=0 ; !empty($nbres[$i][$j]) ; $j++ ){
            if ($nbres[$i][$j] > $max)
            $max = $nbres[$i][$j] ;
        }
    }
    echo 'La valeur numérique maximale de ce tableau est ' . $max . '.<br>' ;
}

// ---------- Exercice 8-1 -----------
function ex81(){

    if ( !empty($_POST['motDonne']) ){ // Une fois que l'utilisateur a appuyé sur le bouton d'envoi
        $motDonne = trim($_POST['motDonne']); // supprime les espaces de début et fin de chaine
        if (strpos($motDonne, ' ') !== false){ // test si le mot donné contient un espace
            // la nouvelle fonction str_contains() en PHP 8 permet de faire les choses plus rapidement avec cette écriture : if (str_contains($motDonne, " ")
            echo "N'écrivez qu'un seul mot svp.<br>";
            echo "Réessayez ! <br>";
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="text" name="motDonne" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        } elseif ( is_numeric($motDonne) ){ // test si le mot n'est pas un nombre
            echo "N'écrivez pas un nombre svp.<br>";
            echo "Réessayez ! <br>";
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="text" name="motDonne" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        } else { // le mot donné est effectivement dans le bon format
            $longeurMot = strlen($motDonne);
            echo "Le mot \"" . $motDonne . "\" contient " . $longeurMot . " lettres.<br>";
        }
    } else{ // Etat avant le début de l'exercice
        echo "Veuillez entrer un mot svp.<br>";
        echo "N'importe lequel, vraiment.<br>";
        ?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="text" name="motDonne" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <?php 
    }
}

// ---------- Exercice 8-2 -----------
function ex82(){

    $nbrAlea = rand(0, 20); // il faut stocker cette variable entre les changemetns de session

    if ( !empty($_POST['tentative2']) ){
        $tentative2 = $_POST['tentative2'];
        if ($tentative2 == $nbrAlea){
            echo "Bravo ! Vous avez trouvez le nombre mystère, c'était bien " . $nbrAlea . '.<br>';
        } elseif (is_numeric($tentative2) && $tentative2 < $nbrAlea){
            echo "Dommage ! Le nombre aléatoire est supérieur à " . $tentative2 . '<br>';
            echo "Réessayez ! <br>";
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="text" name="tentative2" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        } elseif (is_numeric($tentative2) && $tentative2 > $nbrAlea){
            echo "Dommage ! Le nombre aléatoire est inférieur à " . $tentative2 . '<br>';
            echo "Réessayez ! <br>";
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="text" name="tentative2" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        } else {
            echo "Ceci n'est pas un nombre. Réessayez, vous pouvez y arriver !<br>";
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="text" name="tentative2" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        }
    } else{
        echo "J'ai choisi un nombre aléatoire entre 0 et 20.<br>";
        echo "Trouvez-le !<br>";
        ?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="text" name="tentative2" placeholder="Nombre entre 0 et 20" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <?php 
    }
}

// ---------- Exercice 9-1 -----------
function ex91(){

    function isPlusGrand($number1, $number2){
        if ($number1 >= $number2){
            return true ;
        } else {
            return false ;
        }
    }

    if ( !empty($_POST['number1']) && !empty($_POST['number2']) ){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        if(is_numeric($number1) && is_numeric($number2)){ // Si les entrées sont deux nombres
            $isPlusGrand = isPlusGrand($number1, $number2);

            if ($isPlusGrand == true){
                echo $number1 . " est supérieur ou égale à " . $number2 . '.<br>';
            } elseif ($isPlusGrand == false){
                echo $number1 . " est inférieur à " . $number2 . '.<br>';
            } else {
                echo 'Quelque chose s\'est mal passé :\'(';
                echo "Réessayons.<br>";
                ?>
                <form method="post" action="" class="input-group form-inline m-2">
                    <input type="number" name="number1" placeholder="Nombre n1" class="form-control">
                    <input type="number" name="number2" placeholder="Nombre n2" class="form-control">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Valider</button>
                    </div>
                </form>
                <?php 
            }
        } else { // Les entrées ne sont pas deux nombres
            echo "Entrez deux nombres s'il vous plait.";
            echo "Je suis sûr que vous pouvez y arriver !<br>";
            ?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="number1" placeholder="Nombre n1" class="form-control">
                <input type="number" name="number2" placeholder="Nombre n2" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <?php 
        }
    } else{
        echo "J'ai choisi un nombre aléatoire entre 0 et 20.<br>";
        echo "Trouvez-le !<br>";
        ?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="number" name="number1" placeholder="Nombre n1" class="form-control">
            <input type="number" name="number2" placeholder="Nombre n2" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <?php 
    }
}

// ---------- Exercice 10-1 -----------
function ex101(){


}

// ---------- Exercice 10-2 -----------
function ex102(){


}

// ---------- Exercice 10-3 -----------
function ex103(){


}

?>