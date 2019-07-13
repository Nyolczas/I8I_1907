<?php
$pageNr = 1;
include 'includes\menuArray.php';
include 'includes\webArray.php';
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
                <p>Stabil Frontend fejlesztő ismeretekkel rendelkezem és a szerver oldali programozástól sem riadok vissza. Profi grafikusként örömömet lelem a webdesign készítésben.</p>
                <p>A tervezéstől kezdve a frontend és backend programozásig koplett módon, egy személyben elkészítem a weboldaladat.</p>
                <p>Ismereteimet folyamatosan bővítem, napi rendszerességgel tanulok. <br>
                 A célom, hogy tudásom a legújabb webes technológiákból, mindig naprakész legyen.</p>
                <p>Főbb készségek: Php, Sass, Javascript, AJAX, JQuery, Node.js, Asp.Net, MVC, Bootstrap, Html, Css, Git, SVN</p>
            </div>
            <div class="d-flex col-sm-4 align-self-end justify-content-end mb-4">
                <a href="kapcsolat.php" class="btn btn-outline-warning">Kapcsolat</a>
            </div>
        </div>
        <h3 class="mb-4 text-primary">Webes referenciák</h3>
        <div class="row mb-4">
            <!-- Button trigger modals -->
            <?php
                foreach ($webArr as $web) {
                    modalButton(3, $web['name'], 'web', $web['title'], $web['desc'], $web['isImage'], $web['path']);
                }
            ?> 
        </div>
    </div>
    <?php include 'includes\footer.php'; ?>
</div>



</body>
</html>