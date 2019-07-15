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
                <p>A <span class="strong">tradicionális rajzfilmkészítést</span> a LoonLand Animációs stúdió, majd a Varga Stúdió alkotójaként tanultam közvetlenül a főiskolai művészeti tanulmányaim befejezése után. Érdeklődésem ezután a digitális 2D és a 3D animáció irányába fordult.</p>
                <p>2005-ben fiatal alkotóként részt vettem a drezdai <span class="strong">„Perspectives for Animated Film”</span> nemzetközi animációs csereprogramon, majd elvégeztem a Mesharray <span class="strong">3D Animáció Mesterkurzusát</span>.
                Az igazán komoly szakmai tapasztalatot azonban ezután, munka közben szereztem.</p> 
                <p>Az elmúlt másfél évtizedben rengeteg reklám - , játék - és animációsfilm készítésében vettem részt. Dolgoztam TV-re, webre és mozivászonra egyaránt. <span class="strong">3D grafikusként számos hazai reklám- és animációs stúdió</span>, többek között a <a class="link" href="http://postedison.hu" target="_blank">PostEdison</a>  és a <a class="link" href="http://focusfox.hu" target="_blank">FocusFox</a> munkatársa voltam.</p>
                <p>Mára professzionális szaktudással rendelkezem a 2D, a 3D és webes animáció teljes területén.</p>
            </div>
            <?php include 'includes\callToAction.php'; ?>
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