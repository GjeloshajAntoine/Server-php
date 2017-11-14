<?php
define('Controller',"controller/");
define('Views','views/');
if (!isset($_GET["action"])) {
  $action="chat";
}else {
  $action=$_GET["action"];
}
switch ($action) {
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
    $controller=new LoginController();
    break;
  default:
    include Controller.'chatbox_cont.php';
    $controller=new ChatBoxController();
    break;
}
$controller->run();
?>
