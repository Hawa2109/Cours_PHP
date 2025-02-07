<?php
$title = "Les tableaux";
$titre = "Les tableaux en php (array())";
$paragraphe = "Un tableau en PHP est en fait une carte ordonnée. Une carte est un type qui associe des valeurs à des clés. Ce type est optimisé pour différentes utilisations ; il peut être considéré comme un tableau, une liste, une table de hachage, un dictionnaire, une collection, une pile, une file d'attente et probablement plus. On peut avoir, comme valeur d'un tableau, d'autres tableaux, multidimensionnels ou non.";
require_once "inc/header.inc.php";
?>

<main class="container px-5 border">
    <div class="row">
        <h2 class="text-center my-5">1 - Déclaration des tableaux</h2>
        <div class="col-sm-12 col-md-5 mt-5">
            <h3 class="text-primary text-center">Méthode 1</h3>
            <p>La premiére façon de déclarer un gtableau est en utilisant la fonction <span>array()</span> : <br> 
            <code>
                $tableau = array('valeur1', 'valeur2', 'valeur3', 'valeur4');
            </code>
            </p>
        </div>

        <div class="col-sm-12 col-md-5 mt-5">
            <h3 class="text-primary text-center">Méthode 2</h3>
            <p>La deuxième façon de déclarer un gtableau est en utilisant la syntaxe courte avec les crochets <span>[]</span> : <br> 
                <code>
                    $tableau = ['valeur1', 'valeur2', 'valeur3', 'valeur4'];
                </code>
            </p>
        </div>
    </div>

    <div class="row">
        <h2 class="text-center my-5">2 - Afficher les éléments d'un tableaux</h2>
        <div class="col-sm-12">
            <ul>
                <li>
                    Pour afficher une valeur du tableau, on écrit son indice enytre une paire de crochet aprés le nom du tableau.
                    <?php
                    $list = array('Omar', 'Alexandre', 'Fayçal');
                    // echo $list; // erreur de type Array to string conversion car on ne peut pas afficher directement un tableau
                        echo '<pre>';
                            var_dump($list); // Afficher le contenu du tableau avec les types.
                        echo '<pre>';

                    //on entoure le var_dump avec des balises pre afin de garder un format lisible
                        /**
                         * Le var_dump renvoie toutes les informations sur ce qi se trouve dans telle ou telle variable:
                         *  - il donne en premeir lieu le type de varaible et si c'est un tableau, le nombre d'éléments contenu
                         *  - Les éléments avec leur types et leur longeur
                         * Cette fonction de débug sera utiliser pour vérifier ou  récupérer les informations dans une variable.
                         */
                    $list2 = array('Andrei', 'Islem', 'Ouarda', 'Mamadou');
                        echo '<pre>';
                            var_dump($list2); // Afficher le contenu du tableau avec les types.
                        echo '<pre>';

                    ?>
                </li>
                <li>
                    Afficher "Bonjour Islem" depuis votre PHP grâce au tableau créé. 
                    <?php
                    echo "<p class='alert alert-success w-25'> Bonjour $list2[1]";
                    ?>
                </li>
            </ul>
        </div>

    </div>

</main>







<?php

require_once "inc/footer.inc.php";
?>