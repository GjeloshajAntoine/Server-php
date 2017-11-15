<?php
class SigninController{
  public function __construct(){}
  public function run(){
    if (isset($_POST["pseudo"]))
    {
       include "../modeles/modele_user.php";
    }
    require_once Views . 'formulaire_signin.php';
  }
}
 ?>
