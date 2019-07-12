<?php
$pageNr = 3;
include 'includes\menuArray.php';
include 'includes\dddArray.php';
include 'includes\modalBuilder.php';

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
    <h3 class="mb-4">3D Vfx</h3>
    <div class="row">
        <!-- Button trigger modals -->
        <?php
            foreach ($dddVideos as $ddd) {
                modalButton(3, $ddd['name'], 'anim', $ddd['titl']);
            }
        ?> 
    </div>
    <div class="row mb-4">
        <!-- Button trigger modals -->
        <?php
            foreach ($dddImages as $iamge) {
                modalButton(4, $iamge['name'][0], $iamge['path'], $iamge['titl']);
            }
        ?> 
    </div>
    </div>    
    <?php
    //<!-- Modals -->
    foreach ($dddVideos as $ddd) {
        videoModal($ddd['name'], 'modal-dialog-sm', $ddd['titl'], $ddd['desc'], $ddd['link']);
    }

    foreach ($dddImages as $image) {
        modalSimple($image['path'], $image['name'], $image['titl'], $image['desc'], '', true);
    }
    ?>
</body>
</html>