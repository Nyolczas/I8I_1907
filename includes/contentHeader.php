<?php 
$headerclass = $menuArray[$pageNr]['pageName'].'-header';

include 'includes\navbar.php'; 
?>
<div class="w-100 content-header <?php echo $headerclass; ?>" >
    <div class="container">
        <h2><?php echo $menuArray[$pageNr]['slogan'];?></h2>
    </div>
</div>