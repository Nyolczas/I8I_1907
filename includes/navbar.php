<?php
$menuArray = [ 
    [
        'pageName' => 'web',
        'bjutiName' => 'Webfejlesztés'
    ],[
        'pageName' => 'anim',
        'bjutiName' => 'Animáció'
    ],[
        'pageName' => 'illu',
        'bjutiName' => 'Illusztráció'
    ],[
        'pageName' => 'ddd',
        'bjutiName' => '3D'
    ],[
        'pageName' => 'vfx',
        'bjutiName' => 'Vfx'
    ],[
        'pageName' => 'grafika',
        'bjutiName' => 'grafika'
    ],[
        'pageName' => 'storyb',
        'bjutiName' => 'Storyboard'
    ],[
        'pageName' => 'concept',
        'bjutiName' => 'Concept Art'
    ],[
        'pageName' => 'artdir',
        'bjutiName' => 'Művészeti Vezetés'
    ]
];
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
        <?php 
            foreach ($menuArray as $menu) {
                $extraClass = ($page==$menu['pageName'] ? "active" : "");
                echo "<li class=\"nav-item $extraClass \">\n";
                echo '<a class="nav-link '.$extraClass.'" href=\"'. $menu['pageName'].'.php">'.$menu['bjutiName'].'</a>'."\n";
                echo "</li>\n";
            }
        ?>
    </ul>
  </div>
</nav>
