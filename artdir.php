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
            <div class="col-sm-8">
                <p>Alapvetően kézműves típus vagyok, leginkább az alkotás folyamatát élvezem, és mindig az ilyen jellegű szakmai kihívásokat keresem. Pályafutásom során azonban elő szokott fordulni, hogy <span class="strong">vezetőként van nagyobb szükség a munkámra</span>. Mára, ezen a területen is értékes, emberi és szakmai tudást, tapasztalatot gyűjtöttem.</p>

                <p>2003-ban a <span class="strong">Varga Stúdióban</span>, 6 darab epizód <span class="strong"> art directoraként</span> hozzájárultam a <span class="strong">Mr. Bean</span> animációs sorozat máig kimagasló hazai és nemzetközi sikeréhez és népszerűségéhez.</p>

                <p>2004 és 2007 között a <span class="strong">Corvus Design</span> Reklámügynökség <span class="strong">animációs divíziójának vezetője</span> voltam.</p>

                <p>2015-ben a <a class="link" href="http://cinemon.hu/" target="_blank">Cinemon</a>  Animációs stúdió <span class="strong">animációs rendezőjeként</span>  és  <span class="strong">művészeti vezetőjeként</span> fontos szerepet vállaltam a <span class="strong">Time for English</span> 12 részes, angol nyelvoktató rajzfilmsorozat elkészítésében. A rendezés és művészeti vezetés mellett a sorozat teljes designját, és a produkciót kísérő könyvsorozat és mobil applikáció grafikai anyagát is én terveztem. A 12 darab - egyenként 10 perces - epizód, Ázsiától Afrikáig számos gyermeknek segít az angoltanulásban.</p>
                <p>A <a class="link" href="https://freelusion.com/" target="_blank">Freelusion</a> csapatában 2018-ban, <span class="strong">concept artist-ként, látványtervezőként és az animációs gyártás művészeti vezetőjeként </span> részt vettem a Magyar Állami Operaház 3D-s vetítéssel felturbózott <span class="strong">Carmina Burana</span> előadásának színrevitelében. A Bogányi Tibor által vezényelt, tánccal ötvözött interaktív látványvetítés és összművészeti show vizuális alapját az általam készített storyboardok és digitális festmények szolgáltatják.</p>
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