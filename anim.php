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
<div class="body-container">
    <div class="container my-4">
        <h3 class="mb-4 text-primary"><?php echo $menuArray[$pageNr]['slogan'];?></h3>
        <div class="row my-4">
            <div class="col-sm-8">
                <p>Az első animációs munkámat a főiskolai évek alatt készítettem, mikor a festészet és a független filmezés mellett felfedeztem a rajzfimkészítésben rejlő izgalmas lehetőségeket.</p>
                <p>2005-ben fiatal alkotóként részt vettem a drezdai „Perspectives for Animated Film” nemzetközi animációs csereprogramon.</p>
                <p>Az első munkahelyem a Loonland Animációs stúdióban volt, majd rövidesen a Varga Stúdióba kerültem. A flash animációk készítése és a háttérfestés mellett lehetőségem nyílt a trdícionális rajzfilmgyártás minden technikáját megtanulni, és ezt az alapot felhasználva a digitális és 3D animációval kezdtem komolyabban foglalkozni.</p>
                <p></p>
            </div>
            <div class="d-flex col-sm-4 align-self-end justify-content-end mb-4">
                <a href="kapcsolat.php" class="btn btn-outline-warning">Kapcsolat</a>
            </div>
        </div>
        <h3 class="mb-4 text-primary">Animációs referenciák</h3>
        <div class="row mb-4">
            <!-- Button trigger modals -->
            <?php
                foreach ($animVideos as $anim) {
                    modalButton(3, $anim['name'], 'anim', $anim['titl'], $anim['desc']);
                }
            ?> 
        </div>
        <?php
        //<!-- Modals -->
        foreach ($animVideos as $anim) {
            videoModal($anim['name'], 'modal-dialog-sm', $anim['titl'], $anim['desc'], $anim['link']);
        }
        ?>
    </div>
    <?php include 'includes\footer.php'; ?>
</div>
<?php 
$videos = $animVideos;
include 'includes\modalVideoHandler.php';
?>
</body>
</html>