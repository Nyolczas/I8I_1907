<?php
include 'includes\carousel.php';

function modalButton($row, $name, $path, $titl) {

    if($row == 4) {
        $columns = '<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">';
        $imgClass = "prev-img prev-img-4";
    }
    if($row == 6) {
        $columns = '<div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">';
        $imgClass = "prev-img prev-img-6";
    }

    echo $columns . "\n" . 
            '<div  class="card border-primary 100-h" data-toggle="modal" data-target="#' . $name[0] . 'Modal">' . "\n" .
                '<div class ="' . $imgClass .'" style="background-image: url(img/' . $path . '/smalls/' . $name[0] . '.jpg);" ></div>'  . "\n" .
                '<h6 class="prev-img-title">' . $titl . '</h6>' . "\n" .
            '</div>' . "\n" .
        '</div>' . "\n";
}

    function modalSimple($dir, $names, $title, $descr, $sizeClass, $isCarousel) {
        echo '<div class="modal fade" id="' . $names[0] . 'Modal" tabindex="-1" role="dialog" aria-labelledby="' . $names[0] . 'ModalLabel" aria-hidden="true">' . "\n" .
                '<div class="modal-dialog ' . $sizeClass . '" role="document">' . "\n" .
                    '<div class="modal-content">' . "\n" .
                        '<div class="modal-header">' . "\n" .
                            '<h5 class="modal-title" id="' . $names[0] . 'ModalLabel">' . $title . '</h5>' . "\n" .
                            '<button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">' . "\n" .
                                ' <span aria-hidden="true">&times;</span>' . "\n" .
                            '</button>' . "\n" .
                        '</div>'. "\n" .
                        '<div class="modal-body">'. "\n" .
                            '<p>' . $descr . '</p>' . "\n" ;
                            if($isCarousel){
                                galleryCarousel($names[0] . "carousel", $names, $dir, $title);
                            } else {
                                foreach ($names as $name) {
                                   echo '<img src="img/' . $dir . '/' . $name . '.jpg" alt="' . $title . '">' . "\n" ;
                                }
                            }
                        echo '</div>' . "\n" .
                        '<div class="modal-footer">'  . "\n" .
                            '<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>' . "\n" .
                        '</div>' . "\n" .
                    '</div>' . "\n" .
                '</div>' . "\n" .
            '</div>' . "\n";
    }

   
?>
