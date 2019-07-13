<?php
include 'includes\menuArray.php';
include 'includes\animArray.php';
include 'includes\modalBuilder.php';
$pageNr = 2;
$page = $menuArray[$pageNr]['pageName'];
$title = $menuArray[$pageNr]['bjutiName'] . ' | Nyolczas István';

include 'includes\head.php';
?>

<body>
<?php include 'includes\contentHeader.php'; ?>
<div class="container my-4">
    <div class="row my-4">
        <div class="col-sm-8">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="d-flex col-sm-4 align-self-end justify-content-end mb-4">
            <a href="kapcsolat.php" class="btn btn-warning">Kapcsolat</a>
        </div>
    </div>
    <h3 class="mb-4">Animációs referenciák</h3>
    <div class="row mb-4">
        <!-- Button trigger modals -->
        <?php
            foreach ($animVideos as $anim) {
                modalButton(3, $anim['name'], 'anim', $anim['titl'], $anim['desc']);
            }
        ?> 
    </div>
    <?php
    //<!-- Modals -->
    foreach ($animVideos as $anim) {
        videoModal($anim['name'], 'modal-dialog-sm', $anim['titl'], $anim['desc'], $anim['link']);
    }
    ?>
</div>
<script type="text/javascript">
$(document).ready(function(){
    var url = {};
        <?php
        foreach ($animVideos as $anim){
            /* Get iframe src attribute value i.e. YouTube video url  and store it in a variable */
            echo "url['" . $anim['name'] . "'] = $(\"#" . $anim['name'] . "Video\").attr('src');" . "\n";

            /* Assign empty url value to the iframe src attribute when modal hide, which stop the video playing */
            echo "$(\"#" . $anim['name'] . "Modal\").on('hide.bs.modal', function(){ 
                $(\"#" . $anim['name'] . "Video\").attr('src', ''); 
            });" . "\n";

            /* Assign the initially stored url back to the iframe src attribute when modal is displayed again */
            echo "$(\"#" . $anim['name'] . "Modal\").on('show.bs.modal', function(){ 
                $(\"#" . $anim['name'] . "Video\").attr('src', url['" . $anim['name'] . "']);
            });" . "\n";
        }
        ?>
});
</script>
</body>
</html>