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
<div class="body-container"> 
    <div class="container my-4">
        <h3 class="mb-4 text-primary"><?php echo $menuArray[$pageNr]['slogan'];?></h3>
        <div class="row my-4">
            <div class="col-sm-8">
                <p>Gyermekkoromtól kezdve imádok képregényeket rajzoni, ezért mindig örülök, ha munkám során storyboard rajzolásra van szükség.</p>
                <p>Képzőművészeti és festészeti tanulmányaimnak a látványtervek és concept munkák készítésében is hasznát veszem. </p>
            </div>
            <div class="d-flex col-sm-4 align-self-end justify-content-end mb-4">
                <a href="kapcsolat.php" class="btn btn-outline-warning">Kapcsolat</a>
            </div>
        </div>
        <h3 class="mb-4  text-primary">Concept-ek, látványtervek</h3>
        <div class="row mb-4">
            <!-- Button trigger modals -->
            <?php
                foreach ($concepts as $concept) {
                    modalButton(4, $concept['name'][0], $concept['path'], $concept['titl'], $concept['desc']);
                }
            ?> 
        </div>
        <h3 class="mb-4 text-primary">Storyboard-ok</h3>
        <div class="row mb-4">
            <!-- Button trigger modals -->
            <?php
                foreach ($storyBoards as $storyBoard) {
                    modalButton(6, $storyBoard['name'][0], "story", $storyBoard['titl'], $storyBoard['desc']);
                }
            ?>      
        </div>
    </div>
    
    <!-- Modals -->
    <?php
        foreach ($concepts as $concept) {
            modalSimple($concept['path'], $concept['name'], $concept['titl'], $concept['desc'], $concept['sCls'], true);
        }
    
        foreach ($storyBoards as $storyBoard) {
            modalSimple('story', $storyBoard['name'], $storyBoard['titl'], $storyBoard['desc'], '', false);
        }
    ?>
    
    <?php include 'includes\footer.php'; ?>
</div>
</body>
</html>