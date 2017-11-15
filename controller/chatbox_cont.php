<?php
class ChatBoxController{
  public function run(){
    include("modeles/modele_message.php");

    if(isset($_POST["sendMessage"]) && isset($_POST["message"])) {
      $message = $_POST["message"];
      add($message, $_SESSION["pseudo"]);
    }
    $data = recup();
    require_once Views . 'chatbox.php';
  }
}
 ?>
