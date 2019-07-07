<?php
$pageNr = 7;
include 'includes\menuArray.php';
$page = $menuArray[$pageNr]['pageName'];
$title = $menuArray[$pageNr]['bjutiName'] . ' | Nyolczas István';

include 'includes\head.php';
?>

<body>

<?php include 'includes\contentHeader.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="col-sm-4">
            <a href="kapcsolat.php" class="btn btn-warning">Kapcsolat</a>
        </div>
    </div>
    <div class="row">
        <!-- Button trigger modal -->
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <div  class="card border-primary 100-h" data-toggle="modal" data-target="#balfiModal">
                <div class="prev-img " style="background-image: url(img/story/smalls/balfi.jpg);" ></div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <div  class="card border-primary 100-h" data-toggle="modal" data-target="#balfiModal">
                <div class="prev-img " style="background-image: url(img/story/smalls/balfi.jpg);" ></div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <div  class="card border-primary 100-h" data-toggle="modal" data-target="#balfiModal">
                <div class="prev-img " style="background-image: url(img/story/smalls/balfi.jpg);" ></div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <div  class="card border-primary 100-h" data-toggle="modal" data-target="#balfiModal">
                <div class="prev-img " style="background-image: url(img/story/smalls/balfi.jpg);" ></div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <div  class="card border-primary 100-h" data-toggle="modal" data-target="#balfiModal">
                <div class="prev-img " style="background-image: url(img/story/smalls/balfi.jpg);" ></div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <div  class="card border-primary 100-h" data-toggle="modal" data-target="#balfiModal">
                <div class="prev-img " style="background-image: url(img/story/smalls/balfi.jpg);" ></div>
            </div>
        </div>
        

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="balfiModal" tabindex="-1" role="dialog" aria-labelledby="balfiModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="balfiModalLabel">Modal title</h5>
        
        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>leírás</p>
        <img src="img\story\balfi.jpg" alt="balfi storyboard">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>