<?php
$pageNr = 0;
include './includes/menuArray.php';
include './includes/carousel.php';
$page = $menuArray[$pageNr]['pageName'];
$title = 'Nyolczas István';

include './includes/head.php';
?>

<body class="index-body d-flex flex-column align-items-stretch">

    <?php include './includes/navbar.php'; ?>

    <div class="midlerow">
        <div class="container">
            <div class="message">
                <div class="message-txt">
                    <h6> Helló, a nevem <strong class="text-warning">Nyolczas István</strong>, vizuális szakember vagyok.</h6>
                    <h1>Segíthetek?</h1>
                </div>
                <div class="message-img-wrapper">
                    <div class="portre"></div>
                </div>
            </div>
        </div>
        <?php  menuCarousel($menuArray);?>
    </div>

    <?php include './includes/footer.php'; ?>
    

</body>
</html>


