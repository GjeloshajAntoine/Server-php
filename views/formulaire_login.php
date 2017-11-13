<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Formulaire Login</title>
  </head>

  <body>
    <form action="../controller/log_in.php" method="post">

      <div>
        <label for="pseudo">Pseudo : </label>
        <input type = "text" id="pseudo" />
      </div>

      <div>
        <label for="pass">Mot de passe :</label>
        <input type = "pass" id="pass" />
      </div>

      <div class="button">
        <button type="submit">Se connecter</button>
      </div>

    </form>
  </body>

</html>
