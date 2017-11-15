<?php
class LogoutController{
  public function run(){
    // require_once Views . 'log_in.php';
    session_unset();//détruit toutes les variables de la session courante et donc déconnect l'utilisateur dont le pseudo et mot de passe était stocké dans session.

    echo "Vous n'êtes plus connecté !";
  }
}
 ?>
