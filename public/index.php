<?php

use Entity\Post;
use ludk\Persistence\ORM;

require __DIR__ . '/../vendor/autoload.php';

$orm = new ORM(__DIR__ . '/../Resources');

$postRepo = $orm->getRepository(Post::class);
$items = $postRepo->findAll();
// var_dump($items);
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
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="row"></div>
  <!--  Header -->
  <header class="jumbotron my-4">
    <h1 class="display-3">A Warm Welcome!</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt
      possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam
      repellat.</p>
    <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
  </header>
  </div>
  <div class="container">
    <!-- Page Features -->
    <div class="row">
      <?php foreach ($items as $item) { ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img src="<?php echo $item->url_image; ?>" class="card-img-top">
            <div class=" card-body">
              <h5 class="card-title"><?php echo $item->title; ?></h5>
              <p class="card-text"> <?php echo $item->description; ?>
              </p>
              <div class="row">
                <div class="col-8">
                  <a href='#' class="badge badge-info mb-2"><?php echo $item->category_sport; ?></a>
                  <a href='#' class="badge badge-info mb-2"><?php echo $item->year_event; ?></a>
                  <a href='#' class="badge badge-info mb-2"><?php echo $item->datepost; ?></a>

                </div>

              </div>

              <a href="#" class="card-link">Voir l'article</a>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
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