<?php 
session_start();
define ("BASE_URL", "http://localhost/marmitard/");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--lien bootstrape-->
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<!--lien cdm-->    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <title>Document</title>

</head>
<body>

<!--la nav bar-->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
<!--la balise li suivant doit etre visible uniquement si un etulisateur et identifier-->
        <?php if (isset ($_SESSION ['id_user'])){ ?>
        <li class="nav-item">
          <a class="nav-link " href="<?=BASE_URL?>views/ajout_recette.php">ajouter une recette</a>
        </li>
        <?php } ?>
      </ul>
      <form class="d-flex" role="search">
      <?php if (!isset ($_SESSION ['id_user'])){ ?>
          <a href="http://localhost/marmitard/views/register.php" class="btn">Signe up</a>    <!--BASE_URL = http://localhost/marmitard/-->
          <a href="<?=BASE_URL?>views/login.php" class="btn">signe in</a>  
       <?php } else {?>
      <a href ='#' class="btn" >logout</a> 
      <?php } ?>
      </form>
    </div>
  </div>
</nav>
    
