<?php
$action=$_GET["action"];
define('Controller',"controller/");
define('Views','views/');
switch ($action) {
  case 'chat':
    include Controller.'chatboxb_cont.php';
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
    $controller=new LoginController();
    break;
  default:
    echo 'default';
    include Controller.'chatbox_cont.php';
    $controller=new ChatBoxController();
    break;
}
$controller->run();
?>
