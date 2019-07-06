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
        <legend>Küldj egy üzenetet!</legend>
        <div class="form-group row">
        </div>

        <div class="form-group">
          <label for="inputName">Neved:</label>
          <input type="text" class="form-control" id="inputName" placeholder="Nevem">
        </div>

        <div class="form-group">
          <label for="inputEmail">Email címed:</label>
          <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email címem">
          <small id="emailHelp" class="form-text text-muted">Neved és email címed senkinek nem adom tovább.</small>
        </div>
        
       
        <div class="form-group">
          <label for="inputMessage">Üzeneted:</label>
          <textarea class="form-control" id="inputMessage" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 101px;"></textarea>
        </div>
       
        <button type="submit" class="btn btn-primary btn-lg btn-block">Elküldöm</button>
      </fieldset>
    </form>
</div>

</body>
</html>