<div class="main">
  <h2>Welcome on our ChatBox !</h2>
  <?php  for ($i=9; $i >=0 ; $i--) { ?>
    <div class="box">
      <?php if(($i%2)==0){ ?> <div class="white"> <?php } else { ?> <div class="grey"> <?php } ?>
        <div class="pseudo"> <?php $pseudo = (isset($data[$i]['auteur'])) ? $data[$i]['auteur'].' :' : '' ; echo $pseudo; ?> </div>
        <div class="date"> <?php $dateEnvoi = (isset($data[$i]['dateEnvoi'])) ? $data[$i]['dateEnvoi'] : "" ; echo $dateEnvoi; ?> </div>
        <div class="text"> <?php $message = (isset($data[$i]['message'])) ? $data[$i]['message'] : '' ; echo $message; ?> </div>
      </div>
    </div>
  <?php } ?>
  <form action="" method="post">
    <div>
      <?php if(isset($_SESSION['pseudo'])){ ?> <input type="text" name="message" class='inputTexte'/> <input class="submit" type="submit" name="sendMessage" value="Envoyer"/> <?php } else {echo 'Veuillez vous connecter pour envoyer un message !';} ?>
    </div>
  </form>
</div>
</body>
</html>
