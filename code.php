<?php
$pageNr = 1;
include 'includes\menuArray.php';
$page = $menuArray[$pageNr]['pageName'];
$title = $menuArray[$pageNr]['bjutiName'] . ' | Nyolczas István';

include 'includes\head.php';
?>
<body>

<?php include 'includes\contentHeader.php'; ?>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="code-txt">
            <p>Stabil Frontend fejlesztő ismeretekkel rendelkezem és a szerver oldali programozástól sem riadok vissza.</p>
            <p>Profi grafikusként örömömet lelem a webdesign készítésben.</p>
            <p>Ismereteimet folyamatosan bővítem, napi rendszerességgel tanulok. <br>
             A célom, hogy tudásom a legújabb webes technológiákból, mindig naprakész legyen.</p>
            <p>Főbb készségek: Php, Sass, Javascript, JQuery, Node.js, MVC, Asp.Net, Bootstrap, Html, Css, Git, SVN</p>
        </div>
    </div>
</div>



</body>
</html>