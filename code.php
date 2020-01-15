<?php
$pageNr = 1;
include './includes/menuArray.php';
include './includes/webArray.php';
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
              <div id="chart"></div>
            </div>
            <?php include './includes/callToAction.php'; ?>
        </div>
        <h3 class="mb-4 text-primary">Referenciák</h3>
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
    <?php include './includes/footer.php'; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="js/webchart.js"></script> 
</body>
</html>