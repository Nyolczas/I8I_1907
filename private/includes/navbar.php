</head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <?php 
          foreach ($menuArray as $menu) {
              $brandClass = ($menu['pageName'] == 'index' ? " navbar-brand" : "");
              $extraClass = ($page==$menu['pageName'] ? "active" : "");
              echo "<li class=\"nav-item $extraClass \">\n";
              echo '<a class="nav-link '.$extraClass . $brandClass .'" href="'. $menu['pageName'].'.php">'.$menu['bjutiName'].'</a>'."\n";
              echo "</li>\n";  
          }
          ?>
      </ul>
      <form method="post" action="logout.php" class="form-inline my-2 my-lg-0">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Kijelentkezés</button>
      </form>
    </div>
  </div>
</nav>
