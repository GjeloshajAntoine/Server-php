<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=server-php;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

/*
Ajouter le message dans la base de données.
Récupere le message pour l'afficher dans la chatbox.
*/

$req =$db->prepare("INSERT INTO messages (message, idAuteur, dateEnvoi) VALUES(:message, :idAuteur, NOW())");
$req->execute([
  "message"=>$_POST["message"],
  "idAuteur"=>$_POST["idAuteur"]
]);

$req =$db->query("SELECT * FROM messages ORDER BY id DESC LIMIT 0,10");

$data=$req->fetchAll(); // $data = array dont chaque ligne = 1msg

 ?>
