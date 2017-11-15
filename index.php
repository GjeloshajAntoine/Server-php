<?php
session_start(); // indispensable d'être appelée avant tout echo et donc placé en haut de l'index pour passer avant toutes les views qui pourrait être inclues
define('Controller',"controller/"); //définition de constante (manière de le noter systématiquement)
define('Views','views/'); //définition de constante (manière de le noter systématiquement)


include Views . 'header.php'; // inclut le header avec boutons sur toutes les pages

if (!isset($_GET["action"])) { // si on ne met rien dans la page, on arrive sur la page chat par défaut
  $action="chat";
}else {
  $action=$_GET["action"];
}

switch ($action) { // On définit les actions
  case 'chat':
    include Controller.'chatbox_cont.php';
    $controller=new ChatBoxController();
    break;
  case 'login':
    include Controller.'log_in.php';
    $controller=new LoginController();
    break;
  case 'loginform':
    include Controller.'log_in.php';
    $controller=new LoginController();
    break;
  case 'signup':
    include Controller.'new_user.php';
    $controller=new SigninController();
    break;
  case 'signupform':
    include Controller.'new_user.php';
    $controller=new SigninController();
    break;
  case 'logout':
    include Controller."log_out.php";
    $controller=new LogoutController();
    break;
  default:
    include Controller.'chatbox_cont.php';
    $controller=new ChatBoxController();
    break;
}
$controller->run(); // On lance l'action en fonction du case définit plus haut
?>
