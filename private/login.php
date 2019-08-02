<?php
include './includes/roots.php';
$msg = '';

if(isset($_POST['submit'])) {

    $name = $con->real_escape_string($_POST['name']);
    $password = $con->real_escape_string($_POST['password']);
   
    $sql = $con->query("SELECT id, password FROM users WHERE name='$name'");
    if($sql->num_rows > 0) {
        $data = $sql->fetch_array();
        if(password_verify($password, $data['password'])) {
            $msg = '<h5 class="m-5 text-center alert alert-success"> Sikeresen bejelentkeztél! </h5>';
            session_start();
            $_SESSION['name'] = htmlentities($name);
            $_SESSION['password'] = htmlentities($_POST['password']);
            header("location:index.php");
        } else {
            $msg = '<h5 class="m-5 text-center alert alert-danger"> Ellenőrizd a megadott adataidat! </h5>';
        }
    } else {
        $msg = '<h5 class="m-5 text-center alert alert-danger"> Ellenőrizd a megadott adataidat! </h5>';
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3">
                <form method="post" action="login.php">
                    <input class="form-control" type="text" minlength="3" name="name" placeholder="Név..."><br>     
                    <input class="form-control" type="password" minlength="5" name="password" placeholder="Jelszó..."><br>             
                    <button class="btn btn-lg btn-success btn-block" type="submit" name="submit">Bejelentkezés</button>        
                    <?php if($msg != '') echo $msg; ?>
                </form>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>