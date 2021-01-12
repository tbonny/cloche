<?php
    try
    {   // Connexion à la Base de données 
        $db = new PDO('mysql:host=192.168.64.163;dbname=musique_cloche','musique', 'musique');
    }
    catch(exception $erreur)
    {   // Retourne ce message s'il y a une erreur lors de la connexion à la BDD
        echo "Erreur de connexion a la BDD " ;}
    
    if (isset ($_POST['valider'])){
                    $nom=$_POST['nommusique'];
                    $mus->exec("INSERT INTO 'musique' VALUES(','$nom')");
     }
    ?>