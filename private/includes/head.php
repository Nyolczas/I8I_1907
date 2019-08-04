<?php 
include './includes/roots.php';
session_start();
if(isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    $password = $_SESSION['password'];
    
    $sql = $con->query("SELECT id, password FROM users WHERE name='$name'");
    if($sql->num_rows > 0) {
        $data = $sql->fetch_array();
        if(!password_verify($password, $data['password'])) {
            header("location:login.php");
        }
    } else {
        $msg = '<h5 class="m-5 text-center alert alert-danger"> Adatbázis hiba! Fordulj a rendszergazdához! </h5>';
    }
} else {
    header("location:login.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $title; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
  </head>
  <body>