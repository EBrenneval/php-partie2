<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>Partie 2 , exercice 1</title>
    </head>
    <body>
        <h2>Partie 2, Exercice 2</h2>
        <h3>Enoncé de l'exercice : Créer une variable IsEasy de type booléan et l'initialiser avec une valeur.
Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
Bonus : L'écrire de deux manières différentes..</h3>

        <p>
            <?php
            $IsEasy = false;         // on initialise la variable en false ou true 
           if($IsEasy == true){      // si la condition est vrai alors on affiche la phrase
               echo "c'est facile";
           }
           elseif ($IsEasy == false) {   // si la condition est fausse , on affiche la phrase
               echo " c'est difficile";
           }
            ?>
            
           
        </p>
        <a href="http://partie2ex1/"><button type="button" name="button">Exercice précédent</button></a>
            <a href = "http://partie2ex3/"><button type = "button" name = "button">Exercice suivant</button></a>
            </body>
            </html>
