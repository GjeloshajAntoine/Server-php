

  <link rel="stylesheet" href="../assets/css/chatbox_style.css">
    <div>
      <h2>Welcome on our ChatBox !</h2>
      <!-- Table pour afficher 10 messages -->

<!-- $data tableau avec 10 lignes (nous est fourni par recup)-->        
        <?php for ($i=0; $i <10 ; $i++) { ?>
        	<div class="cont">
        		<div class="date"> <?php $dateEnvoi = (isset($data[$i]['dateEnvoi'])) ? $data[$i]['dateEnvoi'] : "" ; echo $dateEnvoi; ?> </div>
        		<div class="pseudo"> <?php $pseudo = (isset($data[$i]['pseudo'])) ? $data[$i]['pseudo'].' :' : '' ; echo $pseudo; ?> </div>
        		<div class="text"> <?php $message = (isset($data[$i]['message'])) ? $data[$i]['message'] : '' ; echo $message; ?> </div>
        	</div>
        <?php } ?>
          <!--Barre d'envoi-->
      <form action="" method="post">
          <div>
            <?php if(isset($_SESSION['pseudo'])){ ?> <input type="text" name="message" class='inputTexte'/> <input class="submit" type="submit" name="sendMessage" value="Envoyer"/> <?php } else {echo 'Veuillez vous connecter!';} ?>
          </div>
      </form>
    </div>
