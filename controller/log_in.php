<?php
class LoginController{
  public function __construct(){}
  public function run(){
    require_once Views . 'formulaire_login.php';
    include "modeles/modele_user.php";
    if ($_POST["pseudo"]=="" && $_POST["pseudo"]=="" )
    {
      echo "Votre pseudo ou votre mot de passe n'a pas été encodé !";
    }
    log_in($_POST["pseudo"],$_POST["pass"]);
  }
}
 ?>
