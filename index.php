<?php
$action=$_GET["action"];
define('Controller',"controller/");
define('Views','views/');
switch ($action) {
  case 'chat':
    include Controller.'chatbox-cont.php';
    break;
  case 'login':
    include Controller.'log_in.php';
    $controller=new LoginController();
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
    $controller=new LoginController();
    break;
  default:
    include Controller.'chatbox_cont.php';
    $controller=new ChatBoxController();
    break;
}
$controller->run();
?>
