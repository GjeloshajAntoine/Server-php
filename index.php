<?php
$action=$_GET["action"];
define('Controller',"controller/")
switch ($action) {
  case 'login':
    include Controller.'log_in.php';
    LoginController
    break;
  case 'loginform':
    break;
  case 'signup':
    include Controller.'new_user.php';
    break;
  case 'signupform':
    include Controller.'new_user.php';
    break;
  case 'logout':
    include Controller."log_out.php";
    break;
  default:
    include Controller.'';
    break;
}
?>
