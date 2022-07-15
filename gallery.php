<?php

  session_start();
  include('config.php');

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery | Pastor Ilesanmi</title>

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- favicon -->
  <link rel="icon" href="img/favicon.jpg">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fontawesome-free-5.15.1-web/css/all.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar container-fluid navbar-light navbar-expand-lg w-100">
    <a href="/" class="navbar-brand"><img src="#" alt="" title="logo">Pastor Peter Ilesanmi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto mr-5">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a> </li>
        <li class="nav-item"><a href="nugget.php" class="nav-link">Wisdom Nugget</a> </li>
        <li class="nav-item"><a href="devotional.php" class="nav-link">GMJ Devotional</a> </li>
      </ul>        
    </div>
  </nav>
      

  <!-- side bar  -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <div>
        <a href="" class="navbar-brand"><img src="#" class='navlogo' alt=""></a>
      </div>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav ">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a> </li>
        <li class="nav-item"><a href="nugget.php" class="nav-link">Wisdom Nugget</a> </li>
        <li class="nav-item"><a href="devotional.php" class="nav-link">GMJ Devotional</a> </li>
      </ul>
    </div>
  </div>

  <section id='gallery'>
    <div class='container-fluid'>
      <h2 class='center'>Gallery</h2> <br>
      
      <div class='row'>
        
      <?php
      $sql = "SELECT * FROM gallery order by id DESC";
      $result = $cxn ->query($sql);
      if($result->num_rows > 0){
        foreach($result as $row ){
          echo"
          <div class='col-lg-6'>
            <div class='card'>
                <br>
                <img src='".$row['image']."' class='card-img-top'>
              <div class='card-body'>
                <h5 class='card-title center'>".$row['title']."</h5>
                <p class='card-text'>
                  ".$row['subtext']."
                </p>
              </div>
            </div>
            <br> <br>
          </div>
          ";
                }}
            ?>

      </div>
    </div>
  </section>

  <script src='js/bootstrap.js'></script>  
</body>
</html>