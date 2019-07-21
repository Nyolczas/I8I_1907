<?php
$pageNr = 5;
include './includes/menuArray.php';
$page = $menuArray[$pageNr]['pageName'];
$title = $menuArray[$pageNr]['bjutiName'] . ' | Nyolczas István';

include './includes/storyboardsArray.php';
include './includes/conceptArray.php';
include './includes/modalBuilder.php';
include './includes/head.php';
?>

<body>
<?php include './includes/contentHeader.php'; ?>
<div class="body-container"> 
    <div class="container my-4">
        <h3 class="mb-4 text-primary"><?php echo $menuArray[$pageNr]['slogan'];?></h3>
        <div class="row my-4">
            <div class="col-sm-10">
                <p>Kissebb stúdiók 3D generalistjaként, egy-egy tv spot gyártását gyakran a <span class="strong">storyboard-rajzolástól kezdve</span> a kompozitig egy személyben én készítettem. Mivel gyermekkoromtól kezdve imádok képregényeket rajzoni, ezért az előzetes tervezés számomra mindig élvezetes része volt az alkotási folyamatnak. <br>
                <span class="strong">Képzőművészeti és festészeti tanulmányaimnak</span> köszönhetően a látványtervek és concept munkák készítésében mindig sikerélményem volt. </p>
                <p>2016-tól a <a class="link" href="https://freelusion.com/" target="_blank">Freelusion</a> <span class="strong">concept artistjaként</span> már a munkám jelentős részét a látványtervezés és a storyboard rajzolás tette ki. A fennmaradó időmben, senior 3d grafikusként és animátorként gyakran segítettem be az animációs gyártásba illetve a művészeti vezetésbe is. Ebben az időszakban elsősorban élő tánc show-k interaktív látványvetítéseihez készítettem koncepteket.</p>
            </div>
            <?php include './includes/callToAction.php'; ?>
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
    
    <?php include './includes/footer.php'; ?>
</div>
</body>
</html>