<?php
$pageNr = 6;
include './includes/menuArray.php';
include './includes/artDirArray.php';
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
                <p>Alapvetően <span class="strong">kézműves típus vagyok, leginkább az alkotás folyamatát élvezem</span>, és mindig az ilyen jellegű szakmai kihívásokat keresem. Pályafutásom során azonban többször is előfordult már, hogy <span class="strong">vezetőként volt nagyobb szükség a tudásomra</span>, ezért ezen a területen is hasznos tapasztalatokkal rendelkezem.</p>

                <p>Pályafutásom kezdetén, a <span class="strong">Varga Stúdió art directoraként</span> hozzájárultam a <span class="strong">Mr. Bean</span> animációs sorozat kimagasló hazai és nemzetközi sikeréhez és népszerűségéhez.</p>

                <p>A <span class="strong">Corvus Design Reklámügynökség animációs divíziójának vezetőjeként</span>, az ügynökség kreatív csapatával együttműködve, az animációs munkák mellett (Tv spot, banner, interaktív prezentációk, applikációk), hagyományos reklám anyagokhoz is készítettünk 2D-3D grafikákat és illusztrációkat.</p>

                <p>A <a class="link" href="http://cinemon.hu/" target="_blank">Cinemon</a> <span class="strong">animációs stúdió animációs rendezőjeként és művészeti vezetőjeként</span> fontos szerepet vállaltam a <span class="strong">Time for English</span> angol nyelvoktató rajzfilmsorozat elkészítésében. A 12 darab - egyenként 10 perces - epizód, Ázsiától Afrikáig számos gyermeknek segít az angoltanulásban.</p>
                <p>A <a class="link" href="https://freelusion.com/" target="_blank">Freelusion</a> videomapping és táncstúdió concept artist és 3d generalist alkotójaként projekt alapú művészeti vezetést is végeztem. Büszke vagyok rá, hogy <span class="strong">látványtervezőként és az animációs gyártás művészeti vezetőjeként </span> részt vettem számtalan nemzetközi projection mapping show mellett a Magyar Állami Operaház 3D-s vetítéssel felturbózott <span class="strong">Carmina Burana</span> előadásának színrevitelében is. A Bogányi Tibor által vezényelt, tánccal ötvözött interaktív látványvetítés és összművészeti show vizuális alapját az általam készített storyboardok és digitális festmények szolgáltatják.</p>
            </div>
            <?php include './includes/callToAction.php'; ?>
        </div>
        <h3 class="mb-4 text-primary">Referenciák</h3>
        <div class="row mb-4">
            <!-- Button trigger modals -->
            <?php
                foreach ($arts as $art) {
                    modalButton(3, $art['name'], 'artdir', $art['titl'], $art['desc']);
                }
            ?> 
        </div>
        <?php
    
        //<!-- Modals -->
        foreach ($arts as $art) {
            videoModal($art['name'], 'modal-dialog-sm', $art['titl'], $art['desc'], $art['link']);
        }
        ?>
    </div>
    <?php include './includes/footer.php'; ?>
</div>
<?php 
$videos = $arts;
include './includes/modalVideoHandler.php';
?>
</body>
</html>