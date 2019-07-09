<?php
    function modalSimple($dir, $names, $title, $descr, $sizeClass = '') {
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
                            foreach ($names as $name) {
                                echo '<img src="img/' . $dir . '/' . $name . '.jpg" alt="' . $title . '">' . "\n" ;
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
