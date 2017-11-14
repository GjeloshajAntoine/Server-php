<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/chatbox_style.css">
    <title>ChatBox</title>
  </head>
  <body>
    <div>
      <!-- include 'header.php';-->
      <h1>Welcome on our ChatBox !</h1>
      <!-- Table pour afficher 10 messages -->
      <form action="index.html" method="post">
        <table>
          <tr>
            <td class="date"><?php $dateEnvoi = (isset($data[9]['dateEnvoi'])) ? $data[9]['dateEnvoi'] : (new DateTime)->format('d/m/y H:i') ; echo $dateEnvoi; ?></td>
            <td class="pseudo"><?php $pseudo = (isset($data[9]['pseudo'])) ? $data[9]['pseudo'] : 'Julie' ; echo $pseudo.' :'; ?></td>
            <td><?php $message = (isset($data[9]['message'])) ? $data[9]['message'] : 'lol' ; echo $message; ?></td>
          </tr>
          <tr>
            <td class="date"><?php $dateEnvoi = (isset($data[8]['dateEnvoi'])) ? $data[8]['dateEnvoi'] : (new DateTime)->format('d/m/y H:i') ; echo $dateEnvoi; ?></td>
            <td class="pseudo"><?php $pseudo = (isset($data[8]['pseudo'])) ? $data[8]['pseudo'] : 'Julie' ; echo $pseudo.' :'; ?></td>
            <td><?php $message = (isset($data[8]['message'])) ? $data[8]['message'] : 'lol' ; echo $message; ?></td>
          </tr>
          <tr>
            <td class="date"><?php $dateEnvoi = (isset($data[7]['dateEnvoi'])) ? $data[7]['dateEnvoi'] : (new DateTime)->format('d/m/y H:i') ; echo $dateEnvoi; ?></td>
            <td class="pseudo"><?php $pseudo = (isset($data[7]['pseudo'])) ? $data[7]['pseudo'] : 'Julie' ; echo $pseudo.' :'; ?></td>
            <td><?php $message = (isset($data[7]['message'])) ? $data[7]['message'] : 'lol' ; echo $message; ?></td>
          </tr>
          <tr>
            <td class="date"><?php $dateEnvoi = (isset($data[6]['dateEnvoi'])) ? $data[6]['dateEnvoi'] : (new DateTime)->format('d/m/y H:i') ; echo $dateEnvoi; ?></td>
            <td class="pseudo"><?php $pseudo = (isset($data[6]['pseudo'])) ? $data[6]['pseudo'] : 'Julie' ; echo $pseudo.' :'; ?></td>
            <td><?php $message = (isset($data[6]['message'])) ? $data[6]['message'] : 'lol' ; echo $message; ?></td>
          </tr>
          <tr>
            <td class="date"><?php $dateEnvoi = (isset($data[5]['dateEnvoi'])) ? $data[5]['dateEnvoi'] : (new DateTime)->format('d/m/y H:i') ; echo $dateEnvoi; ?></td>
            <td class="pseudo"><?php $pseudo = (isset($data[5]['pseudo'])) ? $data[5]['pseudo'] : 'Julie' ; echo $pseudo.' :'; ?></td>
            <td><?php $message = (isset($data[5]['message'])) ? $data[5]['message'] : 'lol' ; echo $message; ?></td>
          </tr>
          <tr>
            <td class="date"><?php $dateEnvoi = (isset($data[4]['dateEnvoi'])) ? $data[4]['dateEnvoi'] : (new DateTime)->format('d/m/y H:i') ; echo $dateEnvoi; ?></td>
            <td class="pseudo"><?php $pseudo = (isset($data[4]['pseudo'])) ? $data[4]['pseudo'] : 'Julie' ; echo $pseudo.' :'; ?></td>
            <td><?php $message = (isset($data[4]['message'])) ? $data[4]['message'] : 'lol' ; echo $message; ?></td>
          </tr>
          <tr>
            <td class="date"><?php $dateEnvoi = (isset($data[3]['dateEnvoi'])) ? $data[3]['dateEnvoi'] : (new DateTime)->format('d/m/y H:i') ; echo $dateEnvoi; ?></td>
            <td class="pseudo"><?php $pseudo = (isset($data[3]['pseudo'])) ? $data[3]['pseudo'] : 'Julie' ; echo $pseudo.' :'; ?></td>
            <td><?php $message = (isset($data[3]['message'])) ? $data[3]['message'] : 'lol' ; echo $message; ?></td>
          </tr>
          <tr>
            <td class="date"><?php $dateEnvoi = (isset($data[2]['dateEnvoi'])) ? $data[2]['dateEnvoi'] : (new DateTime)->format('d/m/y H:i'); echo $dateEnvoi; ?></td>
            <td class="pseudo"><?php $pseudo = (isset($data[2]['pseudo'])) ? $data[2]['pseudo'] : 'Julie' ; echo $pseudo.' :'; ?></td>
            <td><?php $message = (isset($data[2]['message'])) ? $data[2]['message'] : 'lol' ; echo $message; ?></td>
          </tr>
          <tr>
            <td class="date"><?php $dateEnvoi = (isset($data[1]['dateEnvoi'])) ? $data[1]['dateEnvoi'] : (new DateTime)->format('d/m/y H:i') ; echo $dateEnvoi; ?></td>
            <td class="pseudo"><?php $pseudo = (isset($data[1]['pseudo'])) ? $data[1]['pseudo'] : 'Julie' ; echo $pseudo.' :'; ?></td>
            <td><?php $message = (isset($data[1]['message'])) ? $data[1]['message'] : 'lol' ; echo $message; ?></td>
          </tr>
          <!--Dernier message (id le + gd) = array[0]-->
          <tr>
            <td class="date"><?php $dateEnvoi = (isset($data[0]['dateEnvoi'])) ? $data[0]['dateEnvoi'] : (new DateTime)->format('d/m/y H:i') ; echo $dateEnvoi; ?></td>
            <td class="pseudo"><?php $pseudo = (isset($data[0]['pseudo'])) ? $data[0]['pseudo'] : 'Julie' ; echo $pseudo.' :'; ?></td>
            <td ><?php $message = (isset($data[0]['message'])) ? $data[0]['message'] : 'lol' ; echo $message; ?></td>
          </tr>
          <!--Barre d'envoi-->
          <tr>
            <td></td>
            <td></td>
            <td><input type="text" name="message" class='inputTexte'/><input class="submit" type="submit" name="sendMessage" value="Envoyer"/></td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
