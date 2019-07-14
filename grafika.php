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
<div class="body-container">
    <div class="container my-4">
        <h3 class="mb-4 text-primary"><?php echo $menuArray[$pageNr]['slogan'];?></h3>
        <div class="row my-4">
            <div class="col-sm-8">
                <p><span class="strong">Több, mint 30 000 órás szakmai tapasztalattal</span> rendelkezem a digitális képalkotás teljes területén.</p>
                <p>Gyakorlatilag szinte minden stílusban, szinte minden felületre készítettem már illusztrációt, grafikát, vagy reklám anyagot. Az animációs filmek és karakterek tervezésén kívül, jelentős gyakorlattal rendelkezem reklámügynökségi munkák készítésében is, beleértve a nyomtatott és az online megjelenéseket egyaránt.</p>
                <p>Grafikai tervezéshez használt szoftverek: <span class="strong">Illusztrator, Photoshop, InDesign,</span> <br>
                webdesign: <span class="strong">AdobeXD</span>, vagy Figma<p>
            </div>
            <div class="d-flex col-sm-4 align-self-start justify-content-end mb-4">
                <a href="kapcsolat.php" class="btn btn-outline-warning">Kapcsolat</a>
            </div>
        </div>
        <h3 class="mb-4  text-primary">Illusztrációk, grafikai munkák</h3>
        <div class="row mb-4">
            <!-- Button trigger modals -->
            <?php
               foreach ($illuArray as $illu) {
                modalButton(4, $illu['name'][0], $illu['path'], $illu['titl'], $illu['desc']);
            }
            ?> 
        </div>
    </div>
    <?php
        //<!-- Modals -->
           foreach ($illuArray as $illu) {
               $isSeq = (count($illu['name']) > 1 ? true : false);
               $specialClass = (count($illu['name']) > 1 ? '' : 'modal-max-height');
            modalSimple($illu['path'], $illu['name'], $illu['titl'], $illu['desc'], $specialClass, $isSeq);
        }
        ?>
    <?php include 'includes\footer.php'; ?>
</div>
</body>
</html>