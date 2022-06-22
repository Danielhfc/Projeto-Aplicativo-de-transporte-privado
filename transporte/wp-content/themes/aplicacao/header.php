<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/style.css">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri()?>/images/logofav.ico" type="image/x-icon">

  <meta property="og:title" content="Transporte - <?php the_title()?>">
  <title>Transporte - <?php the_title(); ?></title>
      <!-- Wordpress Header -->
      <?php wp_head(); ?>
    <!-- Wordpress Header -->    
</head>
<body>

<header>
<nav class="navbar navbar-expand-md navbar-dark">
  <div class="container">
    

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav" id="header-link">
        <li class="nav-item" id="item-esq">
          <a class="nav-link" href="transporte/home?acao=home">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="transporte/clientes?acao=clientes">Clientes <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="/motoristas?acao=motoristas">Motoristas <span class="sr-only">(current)</span></a>
        </li>
  
    
      </ul>
    </div>
  </div>
</nav>
</header>