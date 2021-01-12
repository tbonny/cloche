<?php session_start();
include "include/menu.php";
include "include/ClientTCP.php";
include "include/database.php";
include "include/gestion.php";
global $db;

$TCPc = new TCPclient('192.168.65.15', 203);
$TCPc->setConnexion();

?>
<?php

$secletnewen = $db->prepare('SELECT `ID_M`, `Nom` FROM `musique` WHERE `Nom` = "' . $_GET['nommusique'] . '"');
$secletnewen->execute();
$fechtnewen = $secletnewen->fetch();
if (empty($fechtnewen)) {
    if (isset($_GET['nomenregis'])) {
        if (!empty($_GET['nommusique'])) {
            $newmus = $db->prepare('INSERT INTO `musique`(`ID_M`, `Nom`) VALUES (NULL,"' . $_GET['nommusique'] . '")');
            $newmus->execute();

            $secletnew = $db->prepare('SELECT `ID_M`, `Nom` FROM `musique` WHERE `Nom` = "' . $_GET['nommusique'] . '"');
            $secletnew->execute();
            $secletnewe = $secletnew->fetch();

            $_SESSION['idnew'] = $secletnewe['ID_M'];
            
        }
    }
}
if (isset($_POST['cloche01'])) {
    $newsecletenre = $db->prepare('SELECT * FROM `enregistrement` WHERE `ID_M` ="' . $_SESSION['idnew'] . '"');
    $newsecletenre->execute();

    $newsecletenrefecht = $newsecletenre->fetch();
    if (empty($newsecletenrefecht)) {

        $newenregiste = $db->prepare('INSERT INTO `enregistrement`(`ID`, `Trame`, `ID_M`, `passage`) VALUES (NULL,"CH01","' . $_SESSION['idnew'] . '",1)');
        $newenregiste->execute();
    } else {

        $newselectenregis = $db->prepare('SELECT * FROM `enregistrement` WHERE `ID_M` = "' . $_SESSION['idnew'] . '" ORDER BY `enregistrement`.`passage` DESC ');
        $newselectenregis->execute();

        $newselectenregisfecht = $newselectenregis->fetch();
        if ($newselectenregisfecht['passage'] < 5) {
            $passage = $newselectenregisfecht['passage'] + 1;
            $newenregiste = $db->prepare('INSERT INTO `enregistrement`(`ID`, `Trame`, `ID_M`, `passage`) VALUES (NULL,"CH01","' . $_SESSION['idnew'] . '","' . $passage . '")');
            $newenregiste->execute();
            echo $passage;
        } elseif ($newselectenregisfecht['passage'] == 5) {
            echo "Musique Plaine";
            session_destroy();
            
        }
    }
} elseif (isset($_POST['cloche02'])) {

    $newsecletenre = $db->prepare('SELECT * FROM `enregistrement` WHERE `ID_M` ="' . $_SESSION['idnew'] . '"');
    $newsecletenre->execute();

    $newsecletenrefecht = $newsecletenre->fetch();
    if (empty($newsecletenrefecht)) {

        $newenregiste = $db->prepare('INSERT INTO `enregistrement`(`ID`, `Trame`, `ID_M`, `passage`) VALUES (NULL,"CH02","' . $_SESSION['idnew'] . '",1)');
        $newenregiste->execute();
    } else {

        $newselectenregis = $db->prepare('SELECT * FROM `enregistrement` WHERE `ID_M` = "' . $_SESSION['idnew'] . '" ORDER BY `enregistrement`.`passage` DESC ');
        $newselectenregis->execute();

        $newselectenregisfecht = $newselectenregis->fetch();
        if ($newselectenregisfecht['passage'] < 5) {
            $passage = $newselectenregisfecht['passage'] + 1;
            $newenregiste = $db->prepare('INSERT INTO `enregistrement`(`ID`, `Trame`, `ID_M`, `passage`) VALUES (NULL,"CH02","' . $_SESSION['idnew'] . '","' . $passage . '")');
            $newenregiste->execute();
            echo $passage;
        } elseif ($newselectenregisfecht['passage'] == 5) {
            echo "Musique Plaine";
            session_destroy();
            
        }
    }
} elseif (isset($_POST['cloche03'])) {

    $newsecletenre = $db->prepare('SELECT * FROM `enregistrement` WHERE `ID_M` ="' . $_SESSION['idnew'] . '"');
    $newsecletenre->execute();

    $newsecletenrefecht = $newsecletenre->fetch();
    if (empty($newsecletenrefecht)) {

        $newenregiste = $db->prepare('INSERT INTO `enregistrement`(`ID`, `Trame`, `ID_M`, `passage`) VALUES (NULL,"CH03","' . $_SESSION['idnew'] . '",1)');
        $newenregiste->execute();
    } else {

        $newselectenregis = $db->prepare('SELECT * FROM `enregistrement` WHERE `ID_M` = "' . $_SESSION['idnew'] . '" ORDER BY `enregistrement`.`passage` DESC ');
        $newselectenregis->execute();

        $newselectenregisfecht = $newselectenregis->fetch();
        if ($newselectenregisfecht['passage'] < 5) {
            $passage = $newselectenregisfecht['passage'] + 1;
            $newenregiste = $db->prepare('INSERT INTO `enregistrement`(`ID`, `Trame`, `ID_M`, `passage`) VALUES (NULL,"CH03","' . $_SESSION['idnew'] . '","' . $passage . '")');
            $newenregiste->execute();
            echo $passage;
        } elseif ($newselectenregisfecht['passage'] == 5) {
            echo "Musique Plaine";
            session_destroy();
           
        }
    }
} elseif (isset($_POST['cloche04'])) {

    $newsecletenre = $db->prepare('SELECT * FROM `enregistrement` WHERE `ID_M` ="' . $_SESSION['idnew'] . '"');
    $newsecletenre->execute();

    $newsecletenrefecht = $newsecletenre->fetch();
    if (empty($newsecletenrefecht)) {

        $newenregiste = $db->prepare('INSERT INTO `enregistrement`(`ID`, `Trame`, `ID_M`, `passage`) VALUES (NULL,"CH04","' . $_SESSION['idnew'] . '",1)');
        $newenregiste->execute();
    } else {

        $newselectenregis = $db->prepare('SELECT * FROM `enregistrement` WHERE `ID_M` = "' . $_SESSION['idnew'] . '" ORDER BY `enregistrement`.`passage` DESC ');
        $newselectenregis->execute();

        $newselectenregisfecht = $newselectenregis->fetch();
        if ($newselectenregisfecht['passage'] < 5) {
            $passage = $newselectenregisfecht['passage'] + 1;
            $newenregiste = $db->prepare('INSERT INTO `enregistrement`(`ID`, `Trame`, `ID_M`, `passage`) VALUES (NULL,"CH04","' . $_SESSION['idnew'] . '","' . $passage . '")');
            $newenregiste->execute();
            echo $passage;
        } elseif ($newselectenregisfecht['passage'] == 5) {
            echo "Musique Pleine";
            session_destroy();
            
        };
    }
}elseif(isset($_POST['Stopm'])){
    session_destroy();
   
}
?>
<?php
if (isset($_POST['01'])) {

    $TCPc->getRead("CH01");
} elseif (isset($_POST['02'])) {

    $TCPc->getRead("CH02");
} elseif (isset($_POST['03'])) {

    $TCPc->getRead("CH03");
} elseif (isset($_POST['04'])) {

    $TCPc->getRead("CH04");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/musique.css">
</head>

<body class="img">
    <?php menu(); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 pad">
                <div class=" align-self-center card">
                    <p class="card-text">
                    <form action="" method="post">
                        <table class="table">
                            <th scope="col" class="text-center">Cloche</th>
                            <tr>
                                <td class="bouton">

                                    <input type="submit" name="cloche" value="cloche n°1">

                                </td>
                            </tr>
                            <tr>
                                <td class="bouton">

                                    <input type="submit" name="02" value="cloche n°2">

                                </td>
                            </tr>
                            <tr>
                                <td class="bouton">

                                    <input type="submit" name="03" value="cloche n°3">

                                </td>
                            </tr>
                            <tr>
                                <td class="bouton">

                                    <input type="submit" name="04" value="cloche n°4">

                                </td>
                            </tr>
                            <tr>
                                <td class="bouton">
                                    <input type="submit" name="00" value="baisser marteau">
                                </td>
                            </tr>
                        </table>
                    </form>
                    </p>
                </div>
            </div>
            <!-- colone pour connexion au compte pour enregistre -->
            <?php

            $musique = $db->prepare("SELECT * FROM musique");
            $musique->execute();
            $musiqueindex = 0;
            while ($selectmusique = $musique->fetch()) {
                $musiques[$musiqueindex++] = new gestion($selectmusique['ID_M'], $selectmusique['Nom']);
            }
            if (isset($_GET["musique"])) {
                foreach ($musiques as $objetmusique) {
                    if ($objetmusique->getId() == $_GET["musique"]) {
                        $enregistre = $db->prepare("SELECT * FROM musique, enregistrement WHERE musique.ID_M = enregistrement.ID_M AND musique.ID_M = :id ORDER BY enregistrement.passage ASC");
                        $enregistre->execute([
                            'id' => $objetmusique->getId()
                        ]);

                        while ($test = $enregistre->fetch()) {
                            echo $test["Trame"];
                            $TCPc->getRead($test["Trame"]);
                        }
                    }
                }
            }
            ?>
            <div class="col-md-4 col-md-offset-4 pad">
                <div class="align-self-center card">
                    <p class="card-text">
                    <table class="table">
                        <tr>
                            <th scope="col" class="text-center">Musique</th>

                            <!--choisir musiquz-->
                        </tr>
                        <tr>
                            <td>
                                <form action="" methode="get">
                                    <!-- Formulaire pour la liste deroulante -->
                                    <select name="musique">
                                        <?php

                                        echo '<option value="0">Choisir une musique</option>';
                                        foreach ($musiques as $objetmusique) {
                                            echo '<option value="' . $objetmusique->getId() . '">' . $objetmusique->getNom() . '</option>';
                                        }



                                        ?>
                                    </select>
                                    <input type="submit"></input>


                                </form>
                            </td>
                        </tr>

                        <th scope="col" class="text-center">Enregistrer une musique</th>
                        <?php if (empty($_SESSION['idnew'])) { ?>
                            <tr>
                                <td>

                                    <form action="" methode="post">
                                        <input type="text" name="nommusique" value="">
                                        <input type="submit" name="nomenregis" value="new">
                                    </form>
                                </td>
                            </tr>
                        <?php } else { ?>
                            <form action="" method="post">
                                <tr>
                                    <td class="bouton">

                                        <input type="submit" name="cloche01" value="cloche n°1">

                                    </td>
                                </tr>
                                <tr>
                                    <td class="bouton">

                                        <input type="submit" name="cloche02" value="cloche n°2">


                                    </td>
                                </tr>
                                <tr>
                                    <td class="bouton">

                                        <input type="submit" name="cloche03" value="cloche n°3">


                                    </td>
                                </tr>
                                <tr>
                                    <td class="bouton">

                                        <input type="submit" name="cloche04" value="cloche n°4">


                                    </td>
                                    <td class="bouton">

                                        <input type="submit" name="Stopm" value="Stopmusique">


                                    </td>

                            </form>
                        <?php } ?>
                        </tr>


                    </table>
                    </p>
                </div>
            </div>


        </div>


    </div>
</body>

</html>