<?php
include './includes/carousel.php';
//<!-- Button trigger modals -->
function modalButton($row, $name, $path, $titl, $desc, $isModal = true, $webPath = '') {

    if($row == 3) {
        $columns = '<div class="col-sm-12 col-md-6 col-lg-4 mb-3">';
        $imgClass = "prev-img prev-img-3";
    }
    if($row == 4) {
        $columns = '<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">';
        $imgClass = "prev-img prev-img-4";
    }
    if($row == 6) {
        $columns = '<div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">';
        $imgClass = "prev-img prev-img-6";
    }

    echo $columns . "\n";
    if($isModal) {
        echo '<div  class="card mb-3 100-h" data-toggle="modal" data-target="#' . $name . 'Modal">' . "\n";
    } else {
        echo '<a href="' . $webPath . '" target="_blank" class="card mb-3 100-h">' . "\n";
    }    
       echo '<div class ="' . $imgClass .'" style="background-image: url(img/' . $path . '/smalls/' . $name . '.jpg);" ></div>'  . "\n" .
            '<div class="prev-img-title">
            <h6 class="text-primary">' . $titl . '</h6>
            <p><small>' . $desc . '</small></p>'. "\n" .
            '</div>' . "\n" ;
    if($isModal) { echo '</div>' . "\n"; } else { echo '</a>' . "\n"; }
    echo '</div>' . "\n";
}

//<!-- Modals -->
function modalSimple($dir, $names, $title, $descr, $sizeClass, $isCarousel) {
    modalHead($names[0], $sizeClass, $title, $descr);

    if($isCarousel){
        galleryCarousel($names[0] . "carousel", $names, $dir, $title);
    } else {
        foreach ($names as $name) {
            echo '<img src="img/' . $dir . '/' . $name . '.jpg" alt="' . $title . '">' . "\n" ;
        }
    }

    modalFooter($names[0]);                
}

function modalWeb($dir, $names, $title, $descr, $sizeClass, $images){
    modalHead($names[0], $sizeClass, $title, $descr);

    webCarousel($names[0] . "carousel", $images, $dir, $title);

    modalFooter($names[0]);  
}

function videoModal($names, $sizeClass, $title, $descr, $link) {
    modalHead($names, $sizeClass, $title, $descr);
    echo '<div class="embed-responsive embed-responsive-16by9">
        <iframe class="class="embed-responsive-item" id="' . $names . 'Video"  src="' . $link . '?autoplay=0" frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
        </div>'; 
    modalFooter($names);     
}

function modalHead($name, $sizeClass, $title, $descr) {
    echo '<div class="modal fade" id="' . $name . 'Modal" tabindex="-1" role="dialog" aria-labelledby="' . $name . 'ModalLabel" aria-hidden="true">' . "\n" .
            '<div class="modal-dialog ' . $sizeClass . '" role="document">' . "\n" .
                '<div class="modal-content">' . "\n" .
                    '<div class="modal-header">' . "\n" .
                        '<h5 class="modal-title" id="' . $name . 'ModalLabel">' . $title . '</h5>' . "\n" .
                        '<button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">' . "\n" .
                            ' <span aria-hidden="true">&times;</span>' . "\n" .
                        '</button>' . "\n" .
                    '</div>'. "\n" .
                    '<div class="modal-body">'. "\n" .
                        '<p>' . $descr . '</p>' . "\n" ;
}

function modalFooter($name) {
    echo '</div>' . "\n" .
                    '<div class="modal-footer">'  . "\n" .
                        '<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>' . "\n" .
                    '</div>' . "\n" .
                '</div>' . "\n" .
            '</div>' . "\n" .
        '</div>' . "\n";

}   
?>
