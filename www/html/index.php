<?php
$url = "http://localhost:8080";
session_start();

// algoritme pour la connexion via google
//$_SESSION["user"] si connecter 



if (isset($_SESSION["user"])) {
    header('Location: ' . $url . "/protected.php");
}

include 'header.php';
?>



<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Protected Zone</h1>
        <p class="lead my-3"><a href='#' class="btn btn-primary">Login Through Google </a></p>
    </div>
</div>

<?php
include 'footer.php';
