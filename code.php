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
                <p>Erős frontend fejlesztő ismeretekkel rendelkezem és a szerver oldali programozástól sem riadok vissza. Profi grafikusként örömömet lelem a webdesign készítésben.<br>
                <span class="strong">A tervezéstől kezdve, a frontend fejlesztésen keresztül a backend programozásig</span> koplett módon elkészítek egy weboldalt, vagy akár egy egyszerű webes applikációt.</p>
                <p>Ismereteimet folyamatosan bővítem, napi rendszerességgel tanulok. <br>
                 A célom, hogy tudásom a legújabb webes technológiákból, mindig naprakész legyen.</p>
                <p>Főbb készségek: <span class="strong">Php, Sass, Javascript, JQuery, AJAX, Node.js, Asp.Net, MVC, Bootstrap, Html, Css, Git, SVN</span></p>
                <p>Ha gyorsan kell valami, akkor: <span class="strong">WordPress, Elementor</span></p>
            </div>
            <div class="d-flex col-sm-4 align-self-start justify-content-end mb-4">
                <a href="kapcsolat.php" class="btn btn-outline-warning">Kapcsolat</a>
            </div>
        </div>
        <h3 class="mb-4 text-primary">Webes referenciák</h3>
        <div class="row mb-4">
            <!-- Button trigger modals -->
            <?php
                foreach ($webArr as $web) {
                    modalButton(3, $web['name'][0], 'web', $web['title'], $web['desc'], $web['isImage'], $web['path']);
                }
            ?> 
        </div>
    </div>
     <!-- Modals -->
     <?php

        foreach ($webArr as $web) {
            if($web['isImage']) {
                modalWeb($web['path'], $web['name'], $web['title'], $web['desc'], 'modal-dialog-xl', $web['images']);
            }
        }
    ?>
    <?php include 'includes\footer.php'; ?>
</div>



</body>
</html>