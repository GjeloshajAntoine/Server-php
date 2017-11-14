<?php
try
{ //insérer IP valable à la place de localhost
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
function add($message, $auteur) {
	try
	{ //insérer IP valable à la place de localhost
		$db = new PDO('mysql:host=localhost;dbname=server-php;charset=utf8', 'root', 'root');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}
	$req =$db->prepare("INSERT INTO messages (message, auteur, dateEnvoi) VALUES(:message, :auteur, NOW())");
	$req->execute([
	  "message"=>$message,
	  "auteur"=>$auteur
	]);
}
function recup() {
	try
	{ //insérer IP valable à la place de localhost
		$db = new PDO('mysql:host=localhost;dbname=server-php;charset=utf8', 'root', 'root');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}
	$req =$db->query("SELECT * FROM messages ORDER BY id DESC LIMIT 0,10");

	$data=$req->fetchAll(); // $data = array dont chaque ligne = 1msg
	return $data;
}

var_dump(recup());
 ?>
