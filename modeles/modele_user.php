<?php

//echo "ON EST DANS MODELE USER";
function isAvailable($pseudo)
{
  $db = new PDO('mysql:host=localhost;dbname=server-php;charset=utf8', 'root', ''); //déclaration DB

  $req = $db->prepare('SELECT id FROM membres WHERE pseudo=:pseudo');
  $req->execute(['pseudo'=>$pseudo]);
  $data = $req->fetch();
  return !$data;
}

function add_membres ($pseudo, $email, $pass)
{
  $db = new PDO('mysql:host=localhost;dbname=server-php;charset=utf8', 'root', ''); //déclaration DB

  $req =$db->prepare("INSERT INTO membres (pseudo, email, pass) VALUES(:pseudo, :email, :pass)");
  $req->execute
  ([
	  "pseudo"=>$pseudo,
	  "email"=>$email,
    "pass"=>sha1($pass)
	]);
}
function log_in($pseudo,$pass)
{
  $db = new PDO('mysql:host=localhost;dbname=server-php;charset=utf8', 'root', '');
  $req =$db->prepare("SELECT pseudo FROM membres WHERE pseudo= :pseudo AND pass= :pass");
  $req->execute
  ([
    "pseudo"=>$pseudo,
    "pass"=>sha1($pass)
  ]);

  $data=$req->fetchAll();// Array donc chaque ligne va représenter un utilisateur
  if( count($data)!= 0) // Si il y a une ligne (pas égale à 0) qui correspond, alors l'utilisateur existe et pseudo et pass corresponde à ceux stocké dans la DB
  {
    echo "On donne accès en écriture au chatbox";
    $_SESSION ['pseudo'] = $pseudo;
  }
  else
  {
    echo "On ne donne pas accès en écriture au chatbox";
  }
}

?>
