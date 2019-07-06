<?php
$pageNr = 0;
include 'includes\menuArray.php';
$page = $menuArray[$pageNr]['pageName'];
$title = 'Nyolczas István';

include 'includes\head.php';
?>

<body class="index-body d-flex flex-column align-items-stretch">

    <?php include 'includes\navbar.php'; ?>

    <div class="midlerow">
        <div class="container">
            <div class="message">
                <div class="message-img"></div>
                <div class="message-txt">
                    <h6> Helló, a nevem <span class="text-warning">Nyolczas István</span>, vizuális szakember vagyok.</h6>
                    <h1>Miben segíthetek?</h1>
                </div>
            </div>
        </div>
        <?php include 'includes\carousel.php'; ?>
    </div>

    <div class="kapcsolat-box w-100">
        <div class="container d-flex justify-content-center align-items-center w-100 h-100">
            <a href="kapcsolat.php" class="btn btn-outline-warning">Kapcsolat</a>
        </div>
    </div>
    

</body>
</html>


