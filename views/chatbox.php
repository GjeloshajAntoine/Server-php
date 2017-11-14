

  <!--<link rel="stylesheet" href="../assets/css/chatbox_style.css">-->
    <div>
      <h2>Welcome on our ChatBox !</h2>
      <!-- Table pour afficher 10 messages -->
      <form action="" method="post">
        <?php for ($i=0; $i <10 ; $i++) { ?>
        	<div>
        		<div class="date"><?php $dateEnvoi = (isset($data[$i]['dateEnvoi'])) ? $data[$i]['dateEnvoi'] : "" ; echo $dateEnvoi; ?></div>
        		<div class="pseudo"><?php $pseudo = (isset($data[$i]['pseudo'])) ? $data[$i]['pseudo'].' :' : '' ; echo $pseudo; ?></div>
        		<div ><?php $message = (isset($data[$i]['message'])) ? $data[$i]['message'] : '' ; echo $message; ?></div>
        	</div>
        <?php } ?>
          <!--Barre d'envoi-->
          <div>
            <?php if(isset($_SESSION['pseudo'])){ ?> <input type="text" name="message" class='inputTexte'/><input class="submit" type="submit" name="sendMessage" value="Envoyer"/> <?} else {echo 'Veuillez vous connecter!';} ?>
          </div>
      </form>
    </div>
