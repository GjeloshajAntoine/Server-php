<?php
class ChatBoxController{
  public function __construct(){}
  public function run(){
    include("modele_message.php");
    // function add($message, $auteur) {
    // 	linkDB();
    // 	$req =$db->prepare("INSERT INTO messages (message, auteur, dateEnvoi) VALUES(:message, :auteur, NOW())");
    // 	$req->execute([//array associatif
    // 	  "message"=>$message,
    // 	  "auteur"=>$auteur
    // 	]);
    // }
    // function recup() {
    // 	linkDB();
    // 	$req =$db->query("SELECT * FROM messages ORDER BY id DESC LIMIT 0,10");
    //
    // 	$data=$req->fetchAll(); // $data = array dont chaque ligne = 1msg
    // 	return $data;
    // }
    if(isset($_POST["sendMessage"]) && isset($_POST["message"])) {
      $message = $_POST["message"];
      add($message, $_SESSION["pseudo"]);
    }
    recup(); // -> renvoie $data qui contient les 10 derniers msg
    require_once Views . 'chatbox.php';
  }
}
 ?>
