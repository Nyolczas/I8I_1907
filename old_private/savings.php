<?php
$pageNr = 1;
include './includes/menuArray.php';
$page = $menuArray[$pageNr]['pageName'];
$title = $menuArray[$pageNr]['bjutiName'];
include 'includes/head.php';
include 'includes/navbar.php';
?>

<div class="jumbotron">
<div class="container">
        <h1><?php echo $menuArray[$pageNr]['bjutiName']; ?></h1>
    </div>
</div>

<?php include 'includes/foot.php'; ?>