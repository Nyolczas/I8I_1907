<?php
$pageNr = 1;
include 'includes\menuArray.php';
$page = $menuArray[$pageNr]['pageName'];
$title = $menuArray[$pageNr]['bjutiName'] . ' || Nyolczas István';

include 'includes\head.php';
?>

<body>

<?php
include 'includes\navbar.php';

echo $menuArray[$pageNr]['slogan'];
?>

</body>
</html>