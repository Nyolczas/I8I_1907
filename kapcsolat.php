<?php

include './includes/menuArray.php';
$page = "kapcsolat";
$title = 'Kapcsolat | Nyolczas István';

include './includes/head.php';
?>

<body>

<?php include './includes/navbar.php';?>
<div class="kapcsolat-container">
<div class="container d-flex justify-content-center">
<?php
if (isset($_REQUEST['email'])) {
  $email = $_REQUEST['email'];
  $name = $_REQUEST['name'];
  $subject = $name . ' üzenetet küldött a honlapodon keresztül!';
  $message = $name . ' az alábbi üzenetet küldte a ' . $email . ' email címről:' . "\n \n". $_REQUEST['message'];

  echo '<div class="message-wrapper w-50">';
  if(mail("nyolczas@gmail.com", "Subject: $subject", $message)){
    echo '<legend class="text-success">Sikeres üzenetküldés!</legend>
    <h5>Kedves '.$name .'! Köszönöm az üzeneted, hamarosan válszolni fogok.</h5>';
  } else {
    echo '<legend class="text-danger">Valami hiba történt!</legend>
    <h5>Kedves '.$name .'! Sajnos most valami hiba történt, kérlek próbáld újra később, vagy írj a <a href="mailto:nyolczas@gmail.com">nyolczas@gmail.com</a>-ra.</h5>';
  }
  echo '</div>';

} else {
  echo '<form method="post" action="kapcsolat.php" name="form" class="contact-form">
  <fieldset class="mb-5">
    <legend class="text-primary">Küldj egy üzenetet!</legend>
    <div class="form-group row">
    </div>

    <div class="form-group">
      <label for="name">Név:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Nevem" require>
    </div>

    <div class="form-group">
      <label for="email">Email cím:</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email címem" require>
    </div>
    
   
    <div class="form-group">
      <label for="message">Üzenet:</label>
      <textarea class="form-control" id="message" name="message" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 140px;"></textarea>
    </div>
   
    <button type="submit" class="btn btn-success btn-lg btn-block">Küldés<i class="fa fa-paper-plane ml-3"></i></button>
    </fieldset>
    <h5 class="text-primary my-5">Vagy telefonálj: <i class="fa fa-phone-square mx-3"></i><a  href="tel:06703258987">70 325 89 87</a></h5>
</form>';
}
?>
</div>
</div>
</body>
</html>