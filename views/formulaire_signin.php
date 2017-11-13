<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
    <link rel="stylesheet" href="style.css">
    <title>Formulaire Signin</title>
  </head>

  <body>

    <h2>Formulaire d'inscription</h2>

    <form action="../controller/new_user.php" method="post">

      <div>
        <label for="pseudo">Pseudo : </label>
        <input type = "text" id="pseudo" placeholder="Votre pseudo" />
      </div>

      <div>
        <label for="email">Email : </label>
        <input type = "email" id="email" placeholder="Votre email" />
      </div>

      <div>
        <label for="pass">Mot de passe :</label>
        <input type = "password" id="pass" placeholder="Votre mot de passe"/>
      </div>

      <div class="button">
        <input type="submit" value="S'enregister"/>
      </div>

    </form>
  </body>

</html>
