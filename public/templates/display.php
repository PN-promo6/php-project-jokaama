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