<?php
$action=$_GET["action"];
switch ($action) {
  case 'login':
    include 'log_in.php';
    break;
  case 'loginform':
    break;
  case 'signup':
    include 'new_user.php';
    break;
  case 'signupform':
    include 'new_user.php';
    break;
  case 'disconnect':
    # code...
    break;
  default:

    break;
}
?>
