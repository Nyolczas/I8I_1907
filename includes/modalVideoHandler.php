<script type="text/javascript">
$(document).ready(function(){
    var url = {};
        <?php
        foreach ($videos as $video){
            /* Get iframe src attribute value i.e. YouTube video url  and store it in a variable */
            echo "url['" . $video['name'] . "'] = $(\"#" . $video['name'] . "Video\").attr('src');" . "\n";

            /* Assign empty url value to the iframe src attribute when modal hide, which stop the video playing */
            echo "$(\"#" . $video['name'] . "Modal\").on('hide.bs.modal', function(){ 
                $(\"#" . $video['name'] . "Video\").attr('src', ''); 
            });" . "\n";

            /* Assign the initially stored url back to the iframe src attribute when modal is displayed again */
            echo "$(\"#" . $video['name'] . "Modal\").on('show.bs.modal', function(){ 
                $(\"#" . $video['name'] . "Video\").attr('src', url['" . $video['name'] . "']);
            });" . "\n";
        }
        ?>
});
</script>