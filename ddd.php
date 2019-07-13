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
<div class="body-container"> 
    <div class="container my-4">
        <h3 class="mb-4 text-primary"><?php echo $menuArray[$pageNr]['slogan'];?></h3>
        <div class="row my-4">
            <div class="col-sm-8">
                <p>Főállású grafikusként, több mint tizenöt éve foglalkozom 3D grafikával. Több éven keresztül dolgoztam 3D generalist-ként különböző filmes utómunka stúdiókban. Szaktudásommal többek között a Post Edison és a FocusFox stúdió csapatát is több évig erősítettem.</p>
                <p>Az összes 3D-s munkafolyamatban komoly gyakorlattal rendelkezem, de különösen a modellezés, textúrázás és az animáció áll hozzám legközelebb.</p>
                <p>A 3d-s munkáimhoz elsősorban Maya és ZBrush szoftvereket használok. A kompozithoz - az aktuális stúdiós igényekhez igazodva - sok évig használtam Nuke-ot, Fusion-t és After Effects-et is.  </p>
                <p> </p>
            </div>
            <div class="d-flex col-sm-4 align-self-end justify-content-end mb-4">
                <a href="kapcsolat.php" class="btn btn-outline-warning">Kapcsolat</a>
            </div>
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
<?php include 'includes\footer.php'; ?>
</div>
<?php 
$videos = $dddVideos;
include 'includes\modalVideoHandler.php';
?>
</body>
</html>