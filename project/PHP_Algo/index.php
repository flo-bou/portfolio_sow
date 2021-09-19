<?php
include 'exos.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices d'algorithmie en PHP</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/prism.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <script src="assets/js/jquery-3.5.1.min.js" defer></script>
    <script src="assets/js/bootstrap.bundle.min.js" defer></script>
    <script src="assets/js/prism.js" defer></script>
    <!-- <script src="assets/js/script.js" defer></script> -->
</head>

<body>
    <header class="container">
        <div class="jumbotron">
            <h1 class="display-3">Exercices d'algorithmie en PHP</h1>
            <p class="lead">Exercices d'algorithmie pour débutant par Grafikart</p>
            <p> <a href="https://www.grafikart.fr/formations/apprendre-algorithmique">grafikart.fr/formations/apprendre-algorithmique</a>
            </p>
            <!-- <hr class="my-2">
            <p>More info</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
            </p> -->
        </div>
    </header>

    <main class="container">
        <!-- bg-light -->

        <h2 class="m-4">Chapitre 1 : Les variables</h2>

        <div class="card-deck">
            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 1-1</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>A vaut 12.</p>
                        <p>B vaut 2.</p>
                        <p>Combien vaut A * B ?</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p11">
                        <?php ex11(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m11" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>

            <!-- <button type="button" class="btn btn-secondary" data-toggle="popover" title="Popup title" data-content="Popup content">Trigger</button> -->
            <!-- </section> -->

            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 1-2</h3>
                </header>
                <div class="card-body my-auto">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Inverser la valeur de A et de B.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p12">
                        <?php ex12(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m12" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->

            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 1-3</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>A vaut "123".</p>
                        <p>B vaut "67".</p>
                        <p>C vaut A + B.</p>
                        <p>Quelle est la valeur de C ?</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p13">
                        <?php ex13(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m13" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->
        </div>

        <h2 class="m-4">Chapitre 2 : Lecture / Ecriture</h2>

        <div class="card-deck">
            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 2-1</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Demander à l'utilisateur le prix hors taxe d'un objet.</p>
                        <p>Renvoyer le prix TTC.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p21">
                        <?php ex21(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m21" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->

            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 2-2</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Demander à l'utilisateur ses noms et prénoms.</p>
                        <p>Puis afficher une phrase de salutation presonnalisée.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p22">
                        <?php ex22(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m22" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->
        </div>

        <h2 class="m-4">Chapitre 3 : Les tests</h2>

        <div class="card-deck">
            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 3-1</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Demander deux nombre à l'utilisateur.</p>
                        <p>Indiquer à l'utilisateur si le produit de ces deux nombres est positif ou négatif.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p31">
                        <?php include 'ex31.php'; ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m31" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->

            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 3-2</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Demander l'âge de l'utilisateur.</p>
                        <p>Lui indiquer quel film il peut aller voir.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p32">
                        <?php ex32(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m32" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->
        </div>

        <h2 class="m-4">Chapitre 4 : Les boucles</h2>

        <div class="card-deck">
            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 4-1</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Choisissez un nombre entre 0 et 10.</p>
                        <p>Faites deviner à l'utilisateur ce nombre.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p41">
                        <?php ex41(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m41" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->

            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 4-2</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Demander à l'utilisateur un chiffre.</p>
                        <p>Afficher tous les chiffres inférieurs jusqu'à 0.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p42">
                        <?php ex42(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m42" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->

            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 4-3</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Choisir un nombre entre 0 et 20.</p>
                        <p>Demander à l'utilisateur de trouver ce nombre en lui indiquant à chaque porposition si
                            celle-ci est trop haute ou trop basse.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p43">
                        <?php ex43(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m43" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->
        </div>

        <h2 class="m-4">Chapitre 5 : La boucle POUR</h2>
        <p>Pas d'exercice. T__T</p>

        <h2 class="m-4">Chapitre 6 : Les Tableaux</h2>

        <!-- <div class="row"> -->
        <div class="card-deck">
            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 6-1</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Ecrire un algorithme qui calcule la somme des valeurs d'un tableau.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p61">
                        <?php ex61(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m61" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->

            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 6-2</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Demander le nombre d'élèves dans la classe.</p>
                        <p>Rentrer les notes de tous les élèves dans un tableau.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p62">
                        <?php ex62(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m62" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->

            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 6-3</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Reprendre l'algorithme précédent et afficher le nombre d'élève au dessus de la moyenne.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p63">
                        <?php ex63(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m63" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->
        </div>

        <!-- <div class="jumbotron-fluid"> -->
        <h2 class="m-4">Chapitre 7 : Les tableaux multi-dimensionnels</h2>
        <!-- </div> -->

        <div class="card-group">
            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 7-1</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Trouver la plus grande valeur dans un tableau multidimensionnel donné.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p71">
                        <?php ex71(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m71" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->
        </div>

        <h2 class="m-4">Chapitre 8 : Les fonctions</h2>

        <div class="card-deck">
            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 8-1</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Demander un mot à l'utilisateur.</p>
                        <p>Afficher le nombre de lettres de ce mot.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p81">
                        <?php ex81(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m81" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->

            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 8-2</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Générer un nombre aléartoire.</p>
                        <p>Demander à l'utilisateur de trouver le nombre en lui indiquant des indices.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p82">
                        <?php ex82(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m82" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->
        </div>

        <h2 class="m-4">Chapitre 9 : Les fonctions personnalisés</h2>

        <div class="card-deck">
            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 9-1</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Demander à l'utilisateur 2 nombres.</p>
                        <p>Indiquer quel est le nombre le plus grand en utilisant une fonction qui renvoie un booléen.
                        </p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p91">
                        <?php ex91(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m91" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $success; ?>
                </div>
            </div>
            <!-- </section> -->
        </div>

        <h2 class="m-4">Chapitre 10 : Boss final : le tri à bulle</h2>

        <div class="card-deck">
            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 10-1</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Demander à l'utilisateur d'entrer un tableau.</p>
                        <p>Trier ce tableau avec une méthode.</p>
                        <p>Afficher ce tableau.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p101">
                        <?php ex101(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m101" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $fail; ?>
                </div>
            </div>
            <!-- </section> -->

            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 10-2</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Demander à l'utilisateur d'entrer un tableau.</p>
                        <p>Trier ce tableau avec une méthode.</p>
                        <p>Afficher ce tableau.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p102">
                        <?php ex102(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m102" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $fail; ?>
                </div>
            </div>
            <!-- </section> -->

            <!-- <section class="col"> -->
            <div class="card">
                <header class="card-header text-center">
                    <h3>Exercice 10-3</h3>
                </header>
                <div class="card-body">
                    <p class="card-title lead text-center">Enoncé</p>
                    <div class="card-text">
                        <p>Demander à l'utilisateur d'entrer un tableau.</p>
                        <p>Trier ce tableau avec une méthode.</p>
                        <p>Afficher ce tableau.</p>
                    </div>
                    <hr>
                    <p class="card-title lead text-center">Résultat</p>
                    <div class="card-text" id="p103">
                        <?php ex103(); ?>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="button" data-target="#m103" class="btn border-info text-info bg-white btn-sm" data-toggle="modal">
                        Voir le code
                    </button>
                    <?php echo $fail; ?>
                </div>
            </div>
            <!-- </section> -->
        </div>
    </main>

    <!-- ***************************************************** -->

    <!-- ***************** Début des modaux ****************** -->

    <!-- ***************************************************** -->

    <div class="modal fade" tabindex="-1" role="dialog" id="m11">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 1-1</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">
function ex11(){
    $A = 12;
    echo 'A vaut ', $A, '<br>';
    $B = 2;
    echo 'B vaut ', $B, '<br>';
    $C = $A * $B;
    echo 'C vaut ', $C, '<br>';
}
                    </script>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="m12">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="modal-title lead">Exercice 1-2</span>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <script type="text/plain" class="language-PHP language-markup">
function ex12(){
    $A = 10;
    echo 'A vaut ', $A, '<br>';
    $B = 26;
    echo 'B vaut ', $B, '<br>';
    $C = $A;
    $A = $B;
    $B = $C;
    echo 'Inversion. <br>';
    echo 'A vaut ', $A, '<br>';
    echo 'B vaut ', $B, '<br>';
}
                    </script>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="m13">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 1-3</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">
function ex13(){
    $A = "123";
    $B = "67";
    $C = $A + $B; // MARCHE PAS car quand on utilise l'opérateur + , le php transtype les valeur en numérique, $C est donc un int
    echo 'A + B vaut ' . $C . '<br>';
    echo 'A . B vaut ' . $A . $B . '<br>';
}
                    </script>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="m21">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 2-1</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP">
function ex21(){
    function prixttc($prixht){
        $prixttc = round($prixht * 1.196, 2); // round sert à arrondi au dixième supérieur
        return $prixttc;
    }

    if ( !empty($_POST['prixht']) ){
        $prixht = $_POST['prixht'];
        echo "Le prix HT du produit est de $prixht", '€.<br>';
        $prixTTC = prixttc($_POST['prixht']);
        echo "Le prix TTC du produit est de $prixTTC", '€.<br>';
    } else{
        echo "Entrez le prix hors taxe d'un produit svp :", '<br>';
        \?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="text" name="prixht" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <\?php
    }
}
                    </script>
                    <?php echo $messInfo; ?>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="m22">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 2-2</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">
function ex22(){
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) ){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        echo 'Bonjour ', $prenom, ' ', $nom, ', je vous souhaite la bienvenue. <br>';
    } else{
        echo "Bonjour, quels sont vos noms et prénoms svp ? <br><br>";
        \?>
        <form method="post" action="" class="input-group form-inline">
            <input type="text" name="prenom" placeholder="Prénom" class="form-control">
            <input type="text" name="nom" placeholder="Nom" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <\?php
    }
}
                    </script>
                    <?php echo $messInfo; ?>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="m31">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 3-1</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">
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

        echo 'Le produit de ', $nb1, ' et ', $nb2, ' est ', positivite($nb1, $nb2), '. <br>';
    } else{
        echo "Entrez deux nombres svp :<br>";
        \?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="number" name="nb1" placeholder="Nombre n1">
            <input type="number" name="nb2" placeholder="Nombre n2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <\?php
    }
}
                    </script>
                    <?php echo $messInfo; ?>
                </div>
            </div>
        </div>
    </div>
        <!-- Début du modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="m32">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 3-2</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">
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
        echo "Quel âge avez-vous ?", '<br>';
        \?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="number" name="age" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <\?php
    }
}
                    </script>
                    <?php echo $messInfo; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="m41">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 4-1</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">
function ex41(){
    $nbrMyst = 9;

    if ( !empty($_POST['nbrMyst']) ){
        if($_POST['nbrMyst'] == $nbrMyst){
            echo "Bravo ! Vous avez trouvez le nombre mystère, c'était bien ", $nbrMyst, '.<br>';
        } elseif (is_numeric($_POST['nbrMyst'])){
            echo "Dommage ! Retentez votre chance, c'est gratuit.", '<br>';
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="nbrMyst" placeholder="Nombre entre 0 et 10" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php
        } else {
            echo "Ceci n'est pas un nombre. Réessayez, vous pouvez y arriver !", '<br>';
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="nbrMyst" placeholder="Nombre entre 0 et 10" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php
        }
    } else{
        echo "Trouvez le nombre mystère !", '<br>';
        echo "Il est compris entre 0 et 10.", '<br>';
        \?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="number" name="nbrMyst" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <\?php
    }
}
                    </script>
                    <?php echo $messInfo; ?>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="m42">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 4-2</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">
function ex42(){
    function decompte($chiffreA){
        echo 'Les nombres inférieurs à ', $chiffreA, ' sont :<br>';
        for($i = $chiffreA - 1 ; $i >= 0 ; $i--){
            echo $i, ' ;<br>';
        }
    }

    if ( !empty($_POST['chiffreA']) ){
        if($_POST['chiffreA'] >= 0 && $_POST['chiffreA'] < 20){
            $chiffreA = $_POST['chiffreA'];
            decompte($chiffreA);
        } elseif (is_numeric($_POST['chiffreA'])){
            echo "Entrez un nombre entre 1 et 20 svp.", '<br>';
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="chiffreA" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php
        } else {
            echo "Ceci n'est pas un nombre. Réessayez, vous pouvez y arriver !", '<br>';
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="chiffreA" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php
        }
    } else{
        echo "Entrez un nombre entre 0 et 20 svp :", '<br>';
        \?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="number" name="chiffreA" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <\?php
    }
}
                    </script>
                    <?php echo $messInfo; ?>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="m43">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 4-3</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">
function ex43(){

    $nbrDevine = 17;

    if ( !empty($_POST['nbrDevine']) ){
        $tentative = $_POST['nbrDevine'];
        if ($_POST['nbrDevine'] == $nbrDevine){
            echo "Bravo ! Vous avez trouvez le nombre mystère, c'était bien ", $nbrDevine, '.<br>';
        } elseif (is_numeric($_POST['nbrDevine']) && $tentative < $nbrDevine){
            echo "Dommage ! Le nombre mystère est supérieur à ", $tentative, '<br>';
            echo "Réessayez ! ", '<br>';
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="nbrDevine" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php 
        } elseif (is_numeric($_POST['nbrDevine']) && $tentative > $nbrDevine){
            echo "Dommage ! Le nombre mystère est inférieur à ", $tentative, '<br>';
            echo "Réessayez ! ", '<br>';
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="nbrDevine" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php 
        } else {
            echo "Ceci n'est pas un nombre. Réessayez, vous pouvez y arriver !", '<br>';
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="nbrDevine" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php 
        }
    } else{
        echo "Trouvez le nombre mystère !", '<br>';
        echo "Il est compris entre 0 et 20.", '<br>';
        \?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="number" name="nbrDevine" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <\?php 
    }
}
                    </script>
                    <?php echo $messInfo; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="m61">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 6-1</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">
function ex61(){
    echo "Soit le tableau suivant :", '<br>';
    echo '$nombres = [10, 15, 20, 15, 14, 8].<br>';
    $nombres = [10, 15, 20, 15, 14, 8];
    $somme = 0;
    for( $i = 0 ; $i < 6 ; $i++ ){
        $somme = $somme + $nombres[$i];
    }
    echo 'La somme des valeurs de $nombres est ', $somme, '<br>';
}
                    </script>
                    <?php echo $messInfo; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="m62">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 6-2</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">
function ex62(){
    // $nbrEleve ;
    if ( !empty($_POST['nbrEleve']) ){
        if($_POST['nbrEleve'] > 0 && $_POST['nbrEleve'] < 25){
            $nbrEleve = $_POST['nbrEleve'] ; // BONNE FIN de 1ere PARTIE
        } elseif (is_numeric($_POST['nbrEleve'])){
            echo "Entrez un nombre d'élèves plus raisonnable svp.", '<br>';
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="nbrEleve" placeholder="Nombre entre 0 et 25" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php 
        } else {
            echo "Ceci n'est pas un nombre. Réessayez, vous pouvez y arriver !", '<br>';
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="nbrEleve" placeholder="Nombre entre 0 et 25" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php 
        }
    } else{
        echo "Combien y a-t-il d'élèves ?", '<br>';
        \?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="number" name="nbrEleve" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <\?php
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
            echo "Très bien , le tableau \$tabNotes vaut", $tabNotes, '.<br>'; // BONNE FIN
        } else {
            echo "Entrez une liste de ", $nbrEleve, ' notes sur 20, séparées par un <u>espace</u> svp.<br>'; // ATTENTION : $nbrEleve n'est pas conservé d'une session sur l'autre
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input  type="text" name="listeNote" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php 
        }
    } elseif ( !empty($nbrEleve) ){
        echo "Très bien, la classe comprend ", $nbrEleve, ' élèves.<br>';
        echo "Veuillez entrer les notes de tous les élèves, séparées par un <u>espace</u>.<br>";
        \?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input  type="text" name="listeNote" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <\?php
    } 
}
                    </script>
                    <?php echo $messInfo; ?>
                </div>
            </div>
        </div>
    </div>
        <!-- Début du modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="m63">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 6-3</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">

                </script>
                    <p class="text-secondary">Note : en raison de l'exécution automatique du PHP, les balises d'interprétation du php ont été altérées </p>
                    <p class="text-secondary">Pour obtenir un code valide, remplacez &lt;\?php par &lt;?php et \?&gt; par ?&gt; ci-dessus.</p>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>
        <!-- Début du modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="m71">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 7-1</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">
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
    echo 'La valeur numérique maximale de ce tableau est ', $max, '.<br>' ;
}
                    </script>
                    <?php echo $messInfo; ?>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>
        <!-- Début du modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="m81">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 8-1</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">
function ex81(){
    if ( !empty($_POST['motDonne']) ){ // Une fois que l'utilisateur a appuyé sur le bouton d'envoi
        $motDonne = trim($_POST['motDonne']); // supprime les espaces de début et fin de chaine
        if (strpos($motDonne, ' ') !== false){ // test si le mot donné contient un espace
            // la nouvelle fonction str_contains() en PHP 8 permet de faire les choses plus rapidement avec cette écriture : if (str_contains($motDonne, " ")
            echo "N'écrivez qu'un seul mot svp.<br>";
            echo "Réessayez ! ", '<br>';
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="text" name="motDonne" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php 
        } elseif ( is_numeric($motDonne) ){ // test si le mot n'est pas un nombre
            echo "N'écrivez pas un nombre svp.<br>";
            echo "Réessayez ! ", '<br>';
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="text" name="motDonne" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php 
        } else { // le mot donné est effectivement dans le bon format
            $longeurMot = strlen($motDonne);
            echo "Le mot \"", $motDonne, "\" contient ", $longeurMot, " lettres.<br>";
        }
    } else{ // Etat avant le début de l'exercice
        echo "Veuillez entrer un mot svp.", '<br>';
        echo "N'importe lequel, vraiment.", '<br>';
        \?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="text" name="motDonne" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <\?php 
    }
}
                    </script>
                    <?php echo $messInfo; ?>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>
        <!-- Début du modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="m82">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 8-2</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">
function ex82(){

    $nbrAlea = rand(0, 20); // il faut stocker cette variable entre les changemetns de session

    if ( !empty($_POST['tentative2']) ){
        $tentative2 = $_POST['tentative2'];
        if ($tentative2 == $nbrAlea){
            echo "Bravo ! Vous avez trouvez le nombre mystère, c'était bien ", $nbrAlea, '.<br>';
        } elseif (is_numeric($tentative2) && $tentative2 < $nbrAlea){
            echo "Dommage ! Le nombre aléatoire est supérieur à ", $tentative2, '<br>';
            echo "Réessayez ! ", '<br>';
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="text" name="tentative2" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php 
        } elseif (is_numeric($tentative2) && $tentative2 > $nbrAlea){
            echo "Dommage ! Le nombre aléatoire est inférieur à ", $tentative2, '<br>';
            echo "Réessayez ! ", '<br>';
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="text" name="tentative2" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php 
        } else {
            echo "Ceci n'est pas un nombre. Réessayez, vous pouvez y arriver !", '<br>';
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="text" name="tentative2" placeholder="Nombre entre 0 et 20" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php 
        }
    } else{
        echo "J'ai choisi un nombre aléatoire entre 0 et 20.", '<br>';
        echo "Trouvez-le !", '<br>';
        \?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="text" name="tentative2" placeholder="Nombre entre 0 et 20" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <\?php 
    }
}
                    </script>
                    <?php echo $messInfo; ?>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>
        <!-- Début du modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="m91">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 9-1</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">
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
                echo $number1, " est supérieur ou égale à ", $number2, '.<br>';
            } elseif ($isPlusGrand == false){
                echo $number1, " est inférieur à ", $number2, '.<br>';
            } else {
                echo 'Quelque chose s\'est mal passé :\'(';
                echo "Réessayons.", '<br>';
                \?>
                <form method="post" action="" class="input-group form-inline m-2">
                    <input type="number" name="number1" placeholder="Nombre n1" class="form-control">
                    <input type="number" name="number2" placeholder="Nombre n2" class="form-control">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Valider</button>
                    </div>
                </form>
                <\?php 
            }
        } else { // Les entrées ne sont pas deux nombres
            echo "Entrez deux nombres s'il vous plait.";
            echo "Je suis sûr que vous pouvez y arriver !", '<br>';
            \?>
            <form method="post" action="" class="input-group form-inline m-2">
                <input type="number" name="number1" placeholder="Nombre n1" class="form-control">
                <input type="number" name="number2" placeholder="Nombre n2" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Valider</button>
                </div>
            </form>
            <\?php 
        }
    } else{
        echo "J'ai choisi un nombre aléatoire entre 0 et 20.", '<br>';
        echo "Trouvez-le !", '<br>';
        \?>
        <form method="post" action="" class="input-group form-inline m-2">
            <input type="number" name="number1" placeholder="Nombre n1" class="form-control">
            <input type="number" name="number2" placeholder="Nombre n2" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        <\?php 
    }
}
                    </script>
                    <?php echo $messInfo; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="m101">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 10-1</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">

                    </script>
                    <?php echo $messInfo; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="m102">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 10-2</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">

                    </script>
                    <?php echo $messInfo; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="m103">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title lead">Exercice 10-3</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <script type="text/plain" class="language-PHP language-markup">

                    </script>
                    <?php echo $messInfo; ?>
                </div>
            </div>
        </div>
    </div>
    <footer style="text-align: right;">
        <span style="font-weight: 500; color: grey; border: 1px solid grey; border-radius: 1rem; padding: 10px; margin: 10px;">
            <a href="../../index.php#projects" style="text-decoration: none; color: inherit"> retour </a>
            <big>⤴</big>
        </span>
    </footer>
    <footer class="container py-4 text-center">
        <p>Travaux effectués du 4 au 7 janvier 2021</p>
    </footer>
</body>

</html>