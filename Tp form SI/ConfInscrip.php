<html>

<head>
    <title>Formulaire</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6" />
    <link rel="stylesheet" media="all" type="text/css" href="css/ConfInscrip.css">
</head>

<body>
  
    <?php

    $dbname = "formulaire";
    $dbpass = "";
    $dbuser = "root";
    $dbip = "localhost";

    $bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser, $dbpass);


    //$sql = "INSERT INTO etudiant (nom, prenom, tel,mail, ville) VALUES ( '".$nom."', '".$prenom."', '".$tel."', '".$mail."' , '".$ville."');";
    //echo $sql;

    $nom = $_REQUEST['nom'];
    $prenom = $_REQUEST['prenom'];
    $mail = $_REQUEST['mail'];
    $mdp = $_REQUEST['mdp'];
    $mdphash = password_hash($mdp, PASSWORD_DEFAULT);
    $bdd->query("INSERT INTO profil VALUES ( '' ,'$nom', '$prenom', '$mail' , '$mdphash');");



    ?>


</body>

</html>