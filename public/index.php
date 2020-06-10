<?php

require_once '../vendor/autoload.php';
session_start();

use Entity\Post;
use ludk\Persistence\ORM;

$orm = new ORM(__DIR__ . '/../Resources');
$postRepo = $orm->getRepository(Post::class);
$items = $postRepo->findAll();
$items = array();
if (isset($_GET['search'])) {
  // cherche dans le tableau json le contenu qui correspond à la recherche demandée
  $items = $postRepo->findBy(array("content" => '%' . $_GET['search'] . '%'));
} else {
  $items = $postRepo->findAll();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Le Temple du Sport</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Le temple du Sport</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <form class="nav-link" method="get" action="/">
                  <input name="search" type="text" placeholder="Search"></input>
                </form>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?action=login" role="button">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?action=register" role="button">Sign Up</a>
              </li>
            </ul>
      </div>
    </div>
  </nav>


  <?php
  $action = $_GET["action"] ?? "display";
  switch ($action) {
    case 'register':
      break;
    case 'logout':
      break;
    case 'login':
      break;
    case 'new':
      break;
    case 'display':
    default:
      break;
  } ?>
  <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>

</html>