<?php
class SigninController{
  public function __construct(){}
  public function run(){
    if (isset($_POST["pseudo"]))
    {
         include "modeles/modele_user.php";

            //On test si les différents champs ne sont pas vides
           if (($_POST['pseudo'] !="") && ($_POST['email'] !="") && ($_POST['pass'] !=""))
           {
             //On vérifie si longueur pseudo est bien situé entre 3 et 25 caractères
             if ((strlen ($POST['pseudo']) >= 3 && (strlen ($POST['pseudo'])<=25))
             {
               echo "La longeur de votre pseudo est bien située entre 3 et 25 caractères !";

               //On vérifie que le mail correspond bien aux critères de vérification standard
               if (preg_match("#^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$#", $_POST['email']))
               {
                 echo "L'email encodée correspond aux critères !";
                 add_membres($_POST["pseudo"],$_POST["email"],$_POST["pass"]);//on  appele la fonction qui a été créée dans modele_use.php et on lui indique les paramétre recueillis par method post dans formulaire
                 echo "Votre inscription s'est déroulée avec succès !";
               }
             }
           }
           else
           {
             echo "Il y a une erreurs dans l'un des champs ! Veuillez vérifier les données que vous avez encodées!";
           }
    }
    require_once Views . 'formulaire_signin.php';
  }
}
 ?>
