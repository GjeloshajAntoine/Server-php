<?php
$action=$_GET["action"];
$controller="controller/";
switch ($action) {
  case 'login':
    include $controller.'log_in.php';
    break;
  case 'loginform':
    break;
  case 'signup':
    include $controller.'new_user.php';
    break;
  case 'signupform':
    include $controller.'new_user.php';
    break;
  case 'disconnect':
    incl
    break;
  default:

    break;
}
?>
