<?php
class LoginController{
  public function __construct(){}
  public function run(){
    require_once Views . 'formulaire_login.php';
    include "modeles/modele_user.php";
    log_in($_POST["pseudo"],$_POST["pass"]);
  }
}
 ?>
