<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>Partie 2 , exercice 1</title>
    </head>
    <body>
        <h2>Partie 2, Exercice 1</h2>
        <h3>Enoncé de l'exercice : Créer une variable age et l'initialiser avec une valeur.
            Si l'age est supérieur ou égale à 18, afficher Vous êtes majeur.
            Dans le cas contraire, afficher Vous êtes mineur.</h3>
        
        <p>
            <?php
            $age = 25;
            if($age >= 18){
                echo "Vous êtes majeur";
            }
            else
                echo "Vous êtes mineur";
            
            ?>
        </p>
        
        <a href="http://partie2ex2/"><button type="button" name="button">Exercice suivant</button></a>
    </body>
</html>
