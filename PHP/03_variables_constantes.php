<!doctype html>
<html lang="fr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cours PHP - Les variables et les constantes</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">

</head>
<body>
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg" >
    <div class="container-fluid">
      <a class="navbar-brand" href="01_index.php"><img src="assets/img/logo.png" alt="logo php"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="01_index.php">Introduction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="02_bases.php">Les bases</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="03_variables_constantes.php">Les variables et les constantes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="04_conditions.php">Les conditions en PHP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="05_boucles.php">Les boucles en PHP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="06_inclusions.php">Les importations des fichier</a>
          </li>
        </ul>
       
      </div>
    </div>
  </nav>
  <header class="p-5 m-4 bg-light rounded-3 border ">
        <section class="container py-5">
            <h1 class="display-5 fw-bold">Introduction au PHP</h1>
            <p class="col-md-12 fs-4"> PHP, ce sigle est un acronyme récursif  <span>Préprocesseur Hypertexte PHP</span> (PHP Hypertext Preprocessor). Il s'agit d'un langage de script côté serveur open source utilisé pour le développement Web dynamique et peut être intégré dans des codes HTML, notez bien qu'un navigateur ne comprend pas le PHP.</p> 
        </section>
  </header><!-- fin header -->
  <main class="container-fluid px-5">
    <?php
        echo "<h2> Les variables utilisateurs / affectation / concaténation </h2>";
        $number = 127;  // on déclare la variable $number et on lui affecte la valeur 127 
        echo 'Ma variable $number vaut : '. $number . '<br>';   // Avec concaténation et les simples quotes
        echo "Ma variable \$number vaut :  $number  <br> ";           // Sans concaténation et avec doubles quotes

        // Je peux voir le type d'une variable avec la fonction prédéfinie gettype()
        echo 'Le type de ma variable $number est : ' . gettype($number) . '<br>';

echo '<hr>';
#####################################################################

        $double = 1.5;

           echo "Ma variable \$double vaut :  $double  <br> ";           // Sans concaténation et avec doubles quotes

        // Je peux voir le type d'une variable avec la fonction prédéfinie gettype()
        echo 'Le type de ma variable $double est : ' . gettype($double) . '<br>';

echo '<hr>';
#####################################################################

        $chaine = 'Une chaine de caractére';
            echo "Ma variable \$chaine vaut :  $chaine  <br> ";           // Sans concaténation et avec doubles quotes

        // Je peux voir le type d'une variable avec la fonction prédéfinie gettype()
            echo 'Le type de ma variable $chaine est : ' . gettype($chaine) . '<br>';

echo '<hr>';
#####################################################################

        $chaine2 = '127';
            echo "Ma variable \$chaine2 vaut :  $chaine2  <br> ";           // Sans concaténation et avec doubles quotes

        // Je peux voir le type d'une variable avec la fonction prédéfinie gettype()
            echo 'Le type de ma variable $chaine2 est : ' . gettype($chaine2) . '<br>';

echo '<hr>';
#####################################################################

        $chaine3 = `Une chaine de caractére entre des backquotes`;
            echo 'Ma variable \$chaine2 vaut : ' .  $chaine3 . '<br>' ;

        // Je peux voir le type d'une variable avec la fonction prédéfinie gettype()
            echo 'Le type de ma variable $chaine2 est : ' . gettype($chaine3) . '<br>';  // ici il s'agit d'un NULL

echo '<hr>';
#####################################################################

        $boolean = true;
            echo 'Ma variable \$boolean vaut : ' .  $boolean . '<br>' ;

        // Je peux voir le type d'une variable avec la fonction prédéfinie gettype()
            echo 'Le type de ma variable $boolean est : ' . gettype($boolean) . '<br>';  


// Concaténation,  affectation et affectation comninées avec l'opérateur " .= " pour les chaines de caractère

        $prenom = "Nicolas ";
        $prenom .= "Thomas";  // on joute la valeur "Thomas" SANS la remplacer grâce à l'operateur ".="


            echo '<p> Bonjour' . $prenom . '</p>';
            echo "<p> Bonjour  $prenom  </p>";

        $age = 30 ;
            // echo "Bonjour  $prenom tu as $age ans";

            echo '<p> Bonjour' . $prenom . ' tu as' . $age .' ans </p>';
            echo "<p> Bonjour  $prenom tu as $age ans </p>";

echo '<hr>';
#####################################################################

        $bleu = "primary";
        $blanc = "white";
        $rouge = "danger";

            echo   "<div class=\"d-flex justify-content-center bg-dark p-5 m-auto m-5 rounded\" style=\"width: 40%;\">
                        <div class=\"bg-$bleu text-center fw-bold\" style=\"width: 50px; height: 80px; line-height: 80px\">
                            $bleu
                        </div>
                        <div class=\"bg-$blanc text-center fw-bold\" style=\"width: 50px; height: 80px; line-height: 80px\">
                            $blanc
                        </div>
                        <div class=\"bg-$rouge text-center fw-bold\" style=\"width: 50px; height: 80px; line-height: 80px\">
                            $rouge
                        </div>
                    </div> ";

            // 2 éme façon de faire éviter l'échappement

                echo    "<div class='d-flex justify-content-center bg-dark p-5 m-auto m-5 rounded' style='width: 40%;'>
                            <div class='bg-$bleu text-center fw-bold' style='width: 50px; height: 80px; line-height: 80px'>
                                $bleu
                            </div>
                            <div class='bg-$blanc text-center fw-bold' style='width: 50px; height: 80px; line-height: 80px'>
                                $blanc
                            </div>
                            <div class='bg-$rouge text-center fw-bold' style='width: 50px; height: 80px; line-height: 80px'>
                                $rouge
                            </div>
                        </div>";

echo '<hr>';
########################################################################################

                echo '<h2 class="mt-5"> Opérateurs numérique </h2>';
                    $a = 10;
                    $b = 2;
                    //10   //2
                echo " $a + $b = " . $a + $b . "<br>"; // affiche 12  
                echo " $a - $b = " . $a - $b . "<br>"; // affiche 8
                echo " $a * $b = " . $a * $b . "<br>"; // affiche 20
                echo " $a / $b = " . $a / $b . "<br>"; // affiche 5
                echo " $a % $b = " . $a % $b . "<br>"; // affiche 0

echo '<hr>';
#######################################################################################

                //Incrémenter et décrémenter
                echo "<br>";
                    $i = 0;
                    $i++; // 
                echo $i;

                echo "<br>";
                    $i--;
                echo $i;
echo '<hr>';
##########################################################################################

                echo '<h2 class="mt-5"> Les variables prédéfinies : super-globale </h2>';

                echo $_SERVER["HTTP_HOST"];
                // echo '<pre>';      // Formater l'affichage
                //     var_dump($_SERVER);
                // echo '</pre>';    // Formater l'affichage

                // Je veux afficher le contenu de ma super_global  $_SERVER["HTTP_HOST"] dans une chaine de caractère: 
                     $message = " Le nom de domaine à partir du quel j'affiche ma page c'est :  <strong> {$_SERVER["HTTP_HOST"]}</strong> <br>";
                echo $message; // J'utilise les accolades pour intégrer ma variable $_SERVER["HTTP_HOST"]  dans une chaine de caractère
echo '<hr>';
##############################################################################################

                echo '<h2 class="mt-5"> Transtypage des variables </h2>';
                    $string1 = '100';
                    var_dump($string1);
                echo '<br>';
                    var_dump((int) $string1); // retourne la chaine de caractére en un entier "int"
                echo '<br>';


                    $string2 = (float)'12.5';
                    var_dump($string2); // affiche 12.5 avec type float
                echo '<br>';

                    $string3 = (int)'12.5';
                    var_dump($string3); // affiche 12 avec type integer
echo '<hr>';


                echo '<h2 class="mt-5"> Constante utilisateurs </h2>';

                ############# Avec la fonction prédéfinie define()

                 // le nom de la constante : "CHAINE", la valeur de la constante : "la valeur de la constante CHAINE";
                    define('CHAINE','la valeur de la constante CHAINE');
                echo CHAINE .'<br>';
                    define('ENTIER', 30);
                    //  define('ENTIER', '30');
                echo ENTIER .'<br>';
                echo gettype(ENTIER); 

                 //je récupère la valeur de  ma constante dans une chaine de caractère
                echo "J'ai ENTIER ans <br>"; // Pas d'interprétation de la constante ENTIER et l'affichage de son valeur
                echo "J'ai ". ENTIER ." ans <br>"; // Avec les constantes on ne peut pas utiliser le mécanispe de la subtitution des variables

            //  Constante avec le mot réservé const

            //  le nombre d'heure mensuel = temps hebdomadaire x 52 mois (soit 35x52/12 = 1515.67h par mois)
                    const SEMAINE = 52;
                    const HEBDOMADAIRE = 35;
                    const MOIS = 12;
                    const HEURES = HEBDOMADAIRE * SEMAINE / MOIS;

                echo HEURES . '<br>';

                    // const NBR_AU_PIF = rand(1,10);  //  Avec cette expréssion on ne peut pas appeler èdes fonctions

                    define("NBR_AU_PIF", rand(1,10));
                echo NBR_AU_PIF . '<br>';
echo '<hr>';
##########################################################################################

                echo '<h2 class="mt-5"> Constante prédéfinie / magiques </h2>';

                echo PHP_VERSION;
                echo '<br>';

                echo PHP_MAJOR_VERSION;
                echo '<br>';

                echo __LINE__;
                echo '<br>';
                
                echo __DIR__;


    ?>
  </main>
  <footer>
    <div class="d-flex justify-content-evenly align-items-center bg-dark text-white p-3">
      <a class="nav-link" target="_blank" href="https://www.php.net/manual/fr/langref.php">Doc PHP</a>
      <a class="nav-link" href="01_index.php"><img src="assets/img/logo.png" alt="logo php"></a>
      <a class="nav-link" target="_blank" href="https://devdocs.io/php/">DevDocs</a>
    </div>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>