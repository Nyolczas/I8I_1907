<?php
function menuCarousel($menuArray){
    $id = "indexCarousel";
    carousel1($id);

    for($i = 2; $i < count($menuArray); $i++) { 
        $cnt = $i - 1; 
        echo '<li data-target="#' . $id . '" data-slide-to="'. $cnt .'"></li>';
    }

    carousel2();
      
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

    carousel3($id); 
}

function galleryCarousel($id, $names, $dir, $title){
    carousel1($id, "height: 73vh;");
    for($i = 1; $i < count($names); $i++) { 
        $cnt = $i - 1; 
        echo '<li data-target="#' . $id . '" data-slide-to="'. $cnt .'"></li>' . "\n";
    }
    carousel2();
    for($i = 0; $i < count($names); $i++){
        $extra = ($i == 0 ? ' active' : '');
        echo '<div class="carousel-item'. $extra . '">' . "\n" .
        '<div class="carousel-bg" style="background-image: url(img/' . $dir . '/' . $names[$i] . '.jpg); background-size: contain; background-position: center; "></div>'. "\n" .
        '</div>' . "\n";
    }
    carousel3($id); 
}

function carousel1($id, $style = ''){
    echo '<div id="' . $id . '" class="carousel slide" data-ride="carousel" style = "' . $style . '">
    <ol class="carousel-indicators">
        <li data-target="#' . $id . '" data-slide-to="0" class="active"></li>';
}

function carousel2(){
    echo
    '</ol>
    <div class="carousel-inner">';
}

function carousel3($id){
    echo
    '</div>
    <a class="carousel-control-prev" href="#' . $id . '" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#' . $id . '" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>';
}
?>