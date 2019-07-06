<?php include 'menuArray.php'; ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <?php
            for($i = 2; $i < count($menuArray); $i++) { 
                $cnt = $i - 1; 
                echo '<li data-target="#carouselExampleIndicators" data-slide-to="'. $cnt .'"></li>';
            }
        ?>

    </ol>
    <div class="carousel-inner">
        <?php
        for($i = 1; $i < count($menuArray); $i++) {
            $extraClass = ($i == 1 ? "active" : "");
            echo '<div class="carousel-item '. $extraClass .'">
                    <div class="carousel-bg carousel-bg-' . $menuArray[$i]['pageName'] . '">
                        <a class="btn btn-outline-primary btn-lg carousel-bg-slogen" href="' . $menuArray[$i]['pageName'] . '.php">
                        ' . $menuArray[$i]['slogan'] . '
                        </a>
                    </div>
                </div>';
            }
        ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>