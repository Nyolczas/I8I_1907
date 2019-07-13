<?php include 'menuArray.php'; ?>
<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-dark ">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="nav navbar-nav mr-auto d-flex justify-content-between w-100">
          <?php 
              foreach ($menuArray as $menu) {
                  $extraClass = ($page==$menu['pageName'] ? "active" : "");
                  echo "<li class=\"nav-item $extraClass \">\n";
                  echo '<a class="nav-link '.$extraClass.'" href="'. $menu['pageName'].'.php">'.$menu['bjutiName'].'</a>'."\n";
                  echo "</li>\n";
                  
              }
          ?>
      </ul>
    </div>
  </div>
</nav>
