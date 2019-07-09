<?php
$pageNr = 5;
include 'includes\menuArray.php';
$page = $menuArray[$pageNr]['pageName'];
$title = $menuArray[$pageNr]['bjutiName'] . ' | Nyolczas István';

include 'includes\storyboardsArray.php';
include 'includes\conceptArray.php';
include 'includes\modalBuilder.php';
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
    <h3 class="mb-4">Concept-ek, látványtervek</h3>
    <div class="row img-row-6 mb-4">
        <!-- Button trigger modals -->
        <?php
            foreach ($concepts as $concept) {
                echo '<div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">' . "\n" . 
                        '<div  class="card border-primary 100-h" data-toggle="modal" data-target="#' . $concept['name'][0] . 'Modal">' . "\n" .
                            '<div class="prev-img " style="background-image: url(img/' . $concept['path'] . '/smalls/' . $concept['name'][0] . '.jpg);" ></div>'  . "\n" .
                            '<h6 class="prev-img-title">' . $concept['titl'] . '</h6>' . "\n" .
                        '</div>' . "\n" .
                    '</div>' . "\n";
            }
        ?> 
    </div>
    <h3 class="mb-4">Storyboard-ok</h3>
    <div class="row img-row-6 mb-4">
        <!-- Button trigger modals -->
        <?php
            foreach ($storyBoards as $storyBoard) {
                echo '<div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">' . "\n" . 
                        '<div  class="card border-primary 100-h" data-toggle="modal" data-target="#' . $storyBoard['name'][0] . 'Modal">' . "\n" .
                            '<div class="prev-img " style="background-image: url(img/story/smalls/' . $storyBoard['name'][0] . '.jpg);" ></div>'  . "\n" .
                            '<h6 class="prev-img-title">' . $storyBoard['titl'] . '</h6>' . "\n" .
                        '</div>' . "\n" .
                    '</div>' . "\n";
            }
        ?>      
    </div>
</div>

<!-- Modals -->
<?php
    foreach ($concepts as $concept) {
        modalSimple($concept['path'], $concept['name'], $concept['titl'], $concept['desc'], "modal-dialog-xl");
    }

    foreach ($storyBoards as $storyBoard) {
        modalSimple('story', $storyBoard['name'], $storyBoard['titl'], $storyBoard['desc']);
    }
?>


</body>
</html>