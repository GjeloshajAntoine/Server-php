# Création d'un serveur PHP local et se connecter en groupe sur une même DB

1. Trouver le fichier httpd.conf (qui peut se trouver dans opt/lampp/etc)
2. Ouvrir le fichier httpd.conf et taper Ctrl+F pour rechercher "ServerName"
On aura quelque chose qui ressemble à cela:
#ServerName www.example.com:@@Port@@
# XAMPP
ServerName localhost
3. On cherche à cibler ServerName localhost et le remplacer par l'adresse IPV4 -Adresse de la personne qui va jouer le rôle de serveur. Elle doit être identique pour tout les membres du groupe.
4. Pour trouver cette addresse, la personne qui va jouer le rôle de serveur doit aller dans l'onglet "Search your computer et taper "System Settings"
5. Puis aller sur l'icone Network
6. Cliquer sur la flèche orange à coté de BC-HUB et relevé l'adresse qui est indiqué à coté de IPv4 Adress qui ressemble à ceci: 10.20.0.141
7. Retourner dans httpd.conf et remplacer localhost par cette adresse. On optient quelque chose qui ressemble à cela:
#ServerName www.example.com:@@Port@@
# XAMPP
ServerName 10.20.0.141
8. Enregister le fichier httpd.conf avec l'adresse de la personne qui fait le rôle de serveur pour le groupe.
9.La personne qui joue le rôle de serveur doit créer un répository commun sur github et ajouter tout les membres du groupe comme collaborateurs.
10. Chaque collaborateurs doit accepter le mail envoyer par le membre serveur sur son email pour pouvoir participer au répository commun sur github.
11. Sur le repository commun, chacun créer une nouvelle branche à son nom pour travailler dessus sans risquer de compromettre la branche master. Le contenu des branches sera merger avec le master quand le contenu de celle-ci sera au point et une par une pour gérer les conflits qui pourraient survenir.
12. Aller sur l'adresse phpmyadmin du membre serveur en allant à l'adress 10.20.01.136/phpmyadmin/ et se logger avec les identifiant du membre serveur nom et mot de passe.
13. Le membre serveur créer une nouvelle base de données de dans son phpmyadmin. C'est cette base de données qui va être utilisée par tout le groupe.








