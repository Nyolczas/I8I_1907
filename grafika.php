<?php
$pageNr = 4;
include 'includes\menuArray.php';
include 'includes\illuArray.php';
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
    <h3 class="mb-4">Illusztrációk, grafikai munkák</h3>
    <div class="row mb-4">
        <!-- Button trigger modals -->
        <?php
           foreach ($illuArray as $illu) {
            modalButton(4, $illu['name'][0], $illu['path'], $illu['titl']);
        }
        ?> 
    </div>
</div>
<?php
    //<!-- Modals -->
       foreach ($illuArray as $illu) {
        modalSimple($illu['path'], $illu['name'], $illu['titl'], $illu['desc'], '', true);
    }
    ?>
</body>
</html>