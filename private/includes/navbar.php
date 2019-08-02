<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand <?php if($page=='home'){echo 'active';} ?>" href="private/index.php">Vagyonépítő</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto container">
      <li class="nav-item <?php if($page=='bank'){echo 'active';} ?>">
        <a class="nav-link" href="#">Megtakarítás</a>
      </li>
      <li class="nav-item <?php if($page=='portfolio6040'){echo 'active';} ?>">
        <a class="nav-link" href="portfolio6040.php">Befektetés</a>
      </li>
      <li class="nav-item <?php if($page=='trade'){echo 'active';} ?>">
        <a class="nav-link" href="trade.php">Trade</a>
      </li>
    </ul>
  </div>
</nav>
