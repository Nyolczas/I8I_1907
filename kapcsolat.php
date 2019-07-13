<?php

include 'includes\menuArray.php';
$page = "kapcsolat";
$title = 'Kapcsolat | Nyolczas István';

include 'includes\head.php';
?>

<body>

<?php
include 'includes\navbar.php';

?>
<div class="container d-flex justify-content-center">
    <form class="contact-form">
      <fieldset>
        <legend class="text-primary">Küldj egy üzenetet!</legend>
        <div class="form-group row">
        </div>

        <div class="form-group">
          <label for="inputName">Név:</label>
          <input type="text" class="form-control" id="inputName" placeholder="Nevem">
        </div>

        <div class="form-group">
          <label for="inputEmail">Email cím:</label>
          <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email címem">
        </div>
        
       
        <div class="form-group">
          <label for="inputMessage">Üzenet:</label>
          <textarea class="form-control" id="inputMessage" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 140px;"></textarea>
        </div>
       
        <button type="submit" class="btn btn-success btn-lg btn-block">Küldés</button>
      </fieldset>
    </form>
</div>

</body>
</html>