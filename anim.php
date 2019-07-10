<?php
include 'includes\menuArray.php';
include 'includes\animArray.php';
include 'includes\modalBuilder.php';
$pageNr = 2;
$page = $menuArray[$pageNr]['pageName'];
$title = $menuArray[$pageNr]['bjutiName'] . ' | Nyolczas István';

include 'includes\head.php';
?>

<body>
<?php include 'includes\contentHeader.php'; ?>
<div class="container my-4">
    <div class="row my-4">
        <div class="col-sm-8">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="d-flex col-sm-4 align-self-end justify-content-end mb-4">
            <a href="kapcsolat.php" class="btn btn-warning">Kapcsolat</a>
        </div>
    </div>
    <h3 class="mb-4">Animációs referenciák</h3>
    <div class="row mb-4">
        <!-- Button trigger modals -->
        <?php
            foreach ($animVideos as $anim) {
                modalButton(3, $anim['name'], 'anim', $anim['titl']);
            }
        ?> 
    </div>
    <?php

    /*
        $cnt = 0;
        foreach ($animVideos as $video){
            if($cnt == 0) {echo '<div class="row">';}
            echo '<div class="col-sm">';
                echo '<div class="card border-primary mb-3">';
                    echo '<h5 class="card-header card-title">' . $video['name'] . '</h5>';
                    echo '<div class="card-body">';
                        echo '<h6 class="card-subtitle text-muted">' . $video['desc'] . '</h6>';
                    echo '</div>';
                    echo '<iframe src=' . $video['link'] . ' frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>'; 
                echo '</div>';   
            echo '</div>';    
            $cnt++;
            if($cnt == 3) {echo '</div>'; $cnt = 0;}
        }
        */
    ?>
</div>


</body>
</html>