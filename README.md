# Server-php

## Qui fait quoi?

Marie-Ange

* Création formulaire signin
* Création formulaire login
* Test frontend en javascritp des différents champs des formulaires

Nico

* Controller

Antoine

* Index.php
* head - (ajouter deux boutons redirigeant vers le formulaire signin (s'enregistrer) et formulaire login (se connecter)
* modele_user avec Marie-Ange

Weich

* phpmyadmin
* modele_message avec Caro

Caro

* avec Weich pour phpmyadmin
* head
* Chatbox (view - avec ou champs de rédaction message accessible ou non selon login)



## Nom des fichiers et variables pour tous


### Pour formulaire signin (inscription)

pseudo
email
pass

### Pour formulaire login (connexion)

pseudo
pass


### Pour les messages

date
message
auteur


## Suggestions update (by James)

* Compléter les controllers :
  * ajout include model
  * (si controller messages, parametre = quelle action?)
* Modifier modele_message :
  * 2 fonctions (2actions : addMsg et getMsgs)
* Modifier header.php/views :
  * supprimer doctype etc... dans header.php
  * ajout include header.php dans toutes les vues (de cette manière chacun peut avoir son css easy)
* Variables $_SESSION[]
