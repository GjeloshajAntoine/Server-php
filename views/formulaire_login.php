<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Formulaire Login</title>
  </head>

  <body>

    <h2>Formulaire de connection</h2>

    <form action="index.php?action=loginform" onsubmit="return verifForm(this)" method="post">
      <!-- permet de bloquer l'envoi du formulaire si l'un des champ n'est pas correctement rempli -->

      <div>
        <label for="pseudo">Pseudo : </label>
        <input type = "text" name="pseudo" id="pseudo"  placeholder="Votre pseudo" autofocus onblur="verifPseudo(this)" />
      </div>
      <div id="error_pseudo"></div>

      <div>
        <label for="pass">Mot de passe :</label>
        <input type = "password" id="pass" name="pass" placeholder="Votre mot de passe" />
      </div>

      <div class="button">
        <input class="button"type="submit" value="Se connecter"/>
      </div>

    </form>

    <!-- lien vers script javascript -->
    <script src="assets/js/app.js"></script>
    <!-- <script src="app.js"></script> -->

  </body>

</html>
