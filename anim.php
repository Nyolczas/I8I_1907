<?php
$pageNr = 2;
include 'includes\menuArray.php';
$page = $menuArray[$pageNr]['pageName'];
$title = $menuArray[$pageNr]['bjutiName'] . ' | Nyolczas István';
$animVideos = [
    [
        "name" => "Showreel 2014",
        "desc" => "showreel",
        "link" => "https://www.youtube.com/embed/3HcETldc8ZE"
    ],[
        "name" => "Projection mapping reel",
        "desc" => "showreel",
        "link" => "https://www.youtube.com/embed/Tcey9BVfn7o"
    ],[
        "name" => "Olimpos Ice Tea TV spot",
        "desc" => "2D animáció",
        "link" => "https://www.youtube.com/embed/aYXhNiaWIfQ"
    ],[
        "name" => "Maggi Kockák TV spot",
        "desc" => "2D animáció, vfx",
        "link" => "https://www.youtube.com/embed/EDYWGerZ7WM"
    ],[
        "name" => "Westend Karácsony TV spot",
        "desc" => "3D general, vfx",
        "link" => "https://www.youtube.com/embed/YuOEB5fNETo"
    ],[
        "name" => "Magyar Tej TV spot",
        "desc" => "concept, 3D general",
        "link" => "https://www.youtube.com/embed/mNuJuKeMpsA"
    ],[
        "name" => "Mama",
        "desc" => "concept, art design, 3D general",
        "link" => "https://www.youtube.com/embed/oItCsGOCs24"
    ],[
        "name" => "CinemaCity Alle",
        "desc" => "concept, art design, 2D animáció, 3D general",
        "link" => "https://www.youtube.com/embed/CmAgBvX2KTo"
    ],[
        "name" => "Showreel 2007",
        "desc" => "showreel",
        "link" => "https://www.youtube.com/embed/WUBKIFR_FwM"
    ]    
];
include 'includes\head.php';
?>

<body>
<?php include 'includes\contentHeader.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="col-sm-4">
            <a href="kapcsolat.php" class="btn btn-outline-warning">Kapcsolat</a>
        </div>
    </div>
    <?php
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
    ?>
</div>


</body>
</html>