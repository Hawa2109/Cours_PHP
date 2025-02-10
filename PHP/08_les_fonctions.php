<?php
$title = "Les fonctions";
$titre = "Les fonctions en PHP";
$paragraphe="";

require_once "inc/header.inc.php";

?>

<main class="container px-5 border border-dark">
    <div class="row">
        <h2 class="mt-5">1-Les fonctions prédéfinies</h2>
        <ul>
               <li> Une fonction prédéfinie permet de réaliser un traitement spécifique prédéterminé dans le language PHP</li>
        </ul>
        <div class="col-sm-12 mt-5">
            <h3 class="text-primary text-center mb-5">Les fonctions prédéfinies des chaînes de carcatères </h3>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <ul>
                                   <!-- https://www.php.net/manual/en/function.rtrim.php -->
                                   <li><span>substr()</span> : permet d'extraire une partie d'une chaine de caractère</li>
                                   <li><span>strpos()</span>: permet de récuperer la position d'un caractère dans une chaîne de caractère </li>
                                   <li><span>strlen()</span> : permet de récupérer la taille d'une chaîne de carctére</li>
                                   <li><span>substr_replace()</span> : permet de remplacer un segment de la chaîne</li>
                                   <li><span>substr_ireplace()</span>: Version insensible à la casse de str_replace()</li>
                                   <li><span>str_contains()</span> : permet de vérifier si la chaîne contient un mot particulier</li>
                                   <li><span>str_starts_with()</span> : permet de vérifier si une chaîne commence par une sous-chaîne donnée</li>
                                  
                              </ul>
                </div>
                <div class="col-sm-12 col-md-6">
                    <ul>
                            <li><span>str_ends_with()</span> : permet de vérifier si une chaîne se termine par une sous-chaîne donnée</li>
                            <li><span>trim()</span> : permet de supprimer les espaces avant et après une chaîne de caractère </li>
                            <li><span>strtolower()</span> : permet de retourner la chaîne en miniscule</li>
                            <li><span>strtoupper()</span> : permet de retourner la chaîne en majuscules</li>
                            <li><span>ucfirst()</span> : permet de mettre le premier caractère en majuscule. </li>
                            <li><span>lcfirst()</span> : permet de mettre le premier caractère en miniscule. </li>
                    </ul>
                </div>
            </div>
        </div>

        <?php
        $maChaine = "bonjour, j'aime le PHP !!";

        // J'affiche un caractére de la chaine ci-dessus 
        echo $maChaine[3]. '<br>';  // affiche j
        //  Modifier un caractére de la chaine
        $maChaine [0] = "B";     // je remplace le "b" minuscule en "B" majuscule
        echo $maChaine. '<br>';  
        // On va extraire une partie de la chaine de caractére
        $nvlChaine = substr($maChaine, 0, 9);   // Cette fonction prend en paramétre la variable, le point de départ et la longueur qu'on souhaite obtenir
        echo $nvlChaine. '<br>';

         ############################ EXERCICE #############################################

            //  Récupérer une partie du texte (de l'indice 0 à l'indice 39) et remplacer la partie enlever avec ce morceau de code : ...<a href="#"> Lire la suite </a>.
            $texte = "  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi ducimus illum, sequi harum vitae tempore veritatis? Aliquam saepe quia delectus molestiae aut repudiandae expedita autem, dolorem dolorum cum nesciunt dolor.
                    Praesentium eum, molestiae autem quas numquam temporibus et cupiditate corporis quo eos deserunt magni non cum explicabo doloribus, fugiat illum necessitatibus maxime! Similique corporis veniam sunt consequuntur soluta est aliquam?
                    Mollitia, sint incidunt est vero, blanditiis, officiis nostrum quisquam maxime rem sed at neque dolor magni ratione. Veniam, obcaecati. Voluptate consequuntur consectetur provident voluptates ex mollitia, saepe odio necessitatibus voluptas?
                    Facilis, officia illo accusantium libero quidem laborum inventore, eveniet excepturi nobis neque doloremque itaque expedita voluptatum molestias hic quo facere! Aliquam suscipit deserunt perferendis nesciunt illo earum eaque quo excepturi.";

                    ##################### CORRECTION ###################################

                    // Récupérer une partie du texte (de 0 à 39)
                    $partie = substr($texte, 0, 40);
                    echo $partie. '<br>';
                    // remplacer la partie enlever
                    echo "<p>$partie<a href='#'> Lire la suite </a> </p>";

                    // Récuper la position d'un caractére dans une chaine de caractére 
                    echo 'La position de la lettre H dans ma phrase est : '. strpos($maChaine, 'H') . '<br>'; // la position 19

                    //  ATTENTION : la fonction est sensible à la casse. Elle fait attention à la casse des léttres
                        var_dump($maChaine, 'h'); 

                        //  Récuper la taille d'une chaine de caractére 
                        echo strlen($maChaine). '<br>';

                        // Remplacer une partie de la chaine 
                        $maChaine = str_replace('PHP', 'JS', $maChaine); // Les paramétre de la fonction : la chaine de caractére à changer. La chaine qui remplace c'est le JS et la variable à manipuler
                        echo $maChaine . '<br>';



        ?>

    </div>

</main>



<?php
require_once "inc/footer.inc.php";

?>

