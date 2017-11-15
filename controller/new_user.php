<?php
class SigninController{
  public function __construct(){}
  public function run(){
    if (isset($_POST["pseudo"]))
    {
         include "modeles/modele_user.php";
         add_membres($_POST["pseudo"],$_POST["email"],$_POST["pass"]);//on  appele la fonction qui a été créée dans modele_use.php et on lui indique les paramétre recueillis par method post dans formulaire

    }
    require_once Views . 'formulaire_signin.php';
  }
}
 ?>
