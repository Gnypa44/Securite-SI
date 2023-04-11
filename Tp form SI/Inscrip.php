<html>

<head>
  <title>Formulaire</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6" />
  <link rel="stylesheet" media="all" type="text/css" href="css/Inscrip.css">
</head>

<body>
  <form action="ConfInscrip.php" method="post" onsubmit="return validation()">
    <div id="formulaire">
      <h1>Bienvenue dans l'inscription!</h1>
      <label for="nom" id="labelNom">Nom</label>
      <br>
      <input type="text" id="nom" name="nom" autocomplete="off">
      <br>
      <label for="prenom" id="labelPrenom">Prenom</label>
      <br>
      <input type="text" id="prenom" name="prenom" autocomplete="off">
      <br>
      <label for="mail" id="labelMail">Adresse Mail</label>
      <br>
      <input type="text" id="mail" name="mail" autocomplete="off">
      <br>
      <label for="mdp" id="labelMdp">Mot de passe</label>
      <br>
      <input type="password" id="mdp" name="mdp" autocomplete="off">
      <br>
      <label for="confmdp" id="labelConfMdp">Confirmation du mot de passe</label>
      <br>
      <input type="password" id="confmdp" name="confmdp" autocomplete="off">
      <br>
      <br>
      <input type="submit" id="submit" name="submit">
    </div>

  </form>

  <script src="javascript/Inscrip.js"></script>
</body>

</html>