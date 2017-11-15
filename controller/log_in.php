<?php
class LoginController{
  public function run(){
    require_once Views . 'formulaire_login.php';
    include "modeles/modele_user.php";

    if (!isset($_POST["pseudo"]) && !isset($_POST["pass"]) )
    {
      echo "Votre pseudo ou votre mot de passe n'a pas été encodé !";
    }
    else
    {
      log_in($_POST["pseudo"],$_POST["pass"]);
    }

  }
}
 ?>
