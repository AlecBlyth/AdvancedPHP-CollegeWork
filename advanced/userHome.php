<?php
session_start();
if (!$_SESSION['isLogged']) {
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<style>
    .jumbotron {
        background-color: #22638b;
    }
    img.avatar {
        width: 9%;
        border-radius: 10%;
    }
    button {
        padding: 8px;
        margin: 9px 0;
        border: none;
        cursor: pointer;
        width: 35%;
    }
</style>
<body>
<div class="jumbotron text-center">
    <h1 class="text-center text-white">BunnyCorp Enrichment Centre<img src="img/img_avatar.png" alt="Avatar" class="avatar"></h1>
    <h5 class="text-center text-white">Menu Selection</h5>
</div>
<p>
<div class="col-md-12 text-center">
    <a href="courseInfo.php" class="btn btn-primary">Course Info</a>
    <a href="topicInfo.php" class="btn btn-primary">Topic Info</a>
</div>
</p>
<div class="col-md-12 text-right">
    <a href="index.php" class="btn btn-danger">Log out</a>
</div> <!-- /container -->
</body>
</html>
