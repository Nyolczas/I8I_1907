<?php
$pageNr = 3;
include './includes/menuArray.php';
include './includes/dddArray.php';
include './includes/modalBuilder.php';

$page = $menuArray[$pageNr]['pageName'];
$title = $menuArray[$pageNr]['bjutiName'] . ' | Nyolczas István';

include './includes/head.php';
?>

<body>
<?php include './includes/contentHeader.php'; ?>
<div class="body-container"> 
    <div class="container my-4">
        <h3 class="mb-4 text-primary"><?php echo $menuArray[$pageNr]['slogan'];?></h3>
        <div class="row my-4">
            <div class="col-sm-10">
                <p>3D-s pályafutásomat a <span class="strong">3DS Max</span>-szal kezdtem, majd miután 2006-ban és 2007-ben a Mesharray-ben elvégeztem egy <span class="strong">Maya</span> Mesterkurzust és egy <span class="strong">ZBrush</span> tanfolyamot, azóta főleg Mayával és ZBrush-sal 3D-zek. Vfx-hez gyakran használok <span class="strong">Nuke, Fusion</span> vagy <span class="strong">After Effects</span> 3D-t, utóbbit <span class="strong">Element3D</span> pluginnal. Speciális feladatokhoz további célszoftvereket is szoktam használni. </p> 
                <p>Az összes 3D-s munkafolyamatban komoly gyakorlattal rendelkezem, legfőképp a modellezés, textúrázás és az animáció áll hozzám legközelebb, továbbá nagyon szeretem a motion design műfajt és a kompozitos feladatokat is.</p>
                <p>Büszke vagyok rá, hogy 2009-2010-ben, Art Designerként és 3D Generalist-ként hozzájárulhattam <span class="strong">M.Tóth Géza Mama</span> c. rövidfilmjének, és <span class="strong">Hajdú Szabolcs Bibliotheque Pascal</span> c. filmjének hazai és nemzetközi sikereihez és díjaihoz. </p>
            </div>
            <?php include './includes/callToAction.php'; ?>
        </div>
        <h3 class="mb-4  text-primary">3D Vfx</h3>
        <div class="row">
            <!-- Button trigger modals -->
            <?php
                foreach ($dddVideos as $ddd) {
                    modalButton(3, $ddd['name'], 'anim', $ddd['titl'], $ddd['desc']);
                }
            ?> 
        </div>
        <div class="row mb-4">
            <!-- Button trigger modals -->
            <?php
                foreach ($dddImages as $iamge) {
                    modalButton(4, $iamge['name'][0], $iamge['path'], $iamge['titl'], $iamge['desc']);
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
<?php include './includes/footer.php'; ?>
</div>
<?php 
$videos = $dddVideos;
include './includes/modalVideoHandler.php';
?>
</body>
</html>