<?php


function add_membres ($pseudo, $email, $pass)
{
  $db = new PDO('mysql:host=localhost;dbname=server-php;charset=utf8', 'root', 'root'); //déclaration DB

  $req =$db->prepare("INSERT INTO membres (pseudo, email, pass) VALUES(:pseudo, :email, :pass)");
  $req->execute
  ([
	  "pseudo"=>$pseudo,
	  "email"=>$email,
    "pass"=>$pass
	]);
}
?>
