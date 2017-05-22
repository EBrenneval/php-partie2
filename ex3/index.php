<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>Partie 2 , exercice 3</title>
    </head>
    <body>
        <h2>Partie 2 , exercice 3</h2>
        <h3>Enoncé de l'exercice : Créer deux variables age et genre. La variable genre peut prendre comme valeur :
    Homme
    Femme
En fonction de l'âge et du genre afficher la phrase correspondante :
    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeure
    Vous êtes une femme et vous êtes mineure
Gérer tous les cas.</h3>
        <p>
            <?php
            $age = 22;
            $genre = "femme";
            if($genre == "femme"&& $age >= 18){
                echo "Vous êtes une femme et vous êtes majeure";
            }elseif($genre == "femme"&& $age <= 18){
                echo " Vous êtes une femme et vous êtes mineure";
            }elseif ($genre == "homme"&& $age >= 18){
                echo " Vous êtes un homme et vous êtes majeur";
            }else{
                echo " vous êtes un homme et vous êtes mineur";
            }
            ?>
        </p>
        <a href="http://partie2ex2/"><button type="button" name="button">Exercice précédent</button></a>
            <a href = "http://partie2ex4/"><button type = "button" name = "button">Exercice suivant</button></a>
    </body>
</html>