<html>

<head>
    <title>Formulaire</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6" />
    <link rel="stylesheet" media="all" type="text/css" href="css/ConfInscrip.css">
</head>

<body>

    <?php include("header.php") ?>
    <?php
    include("bdd.php");
    $mail = $_REQUEST['mail'];
    $mdp = $_REQUEST['mdp'];
    
    $hash = $bdd->query("SELECT mdp FROM profil WHERE mail = '".$mail. "';");
   
    $valeur = 'valeur_recherchee';
    $stmt = $bdd->prepare('SELECT COUNT(*) FROM profil WHERE mail = ?');
    $stmt->execute([$mail]);
    $existe = $stmt->fetchColumn();
    
    if ($existe) {
        $mdphash = $hash->fetch();
        $mdpverif = password_verify($mdp, $mdphash[0]);
        if($mdpverif == true){
            echo "<h1>Vous êtes Connecté</h1>";
        }else{
            echo "<h1>Le mot de passe est incorrect</h1><br>";
            echo "<a href='Connexion.php'>Réssayer</a>";
        }
    }else{
        echo "<h1>L'addresse mail n'est pas valide</h1>";
        echo "<a href='Connexion.php'>Réssayer</a>";
    }

    ?>

</body>

</html>