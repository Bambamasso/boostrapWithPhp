<?php

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">

  
  </head>
  <body>
  
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
 
  <a class="navbar-brand" href="#">Ma bibliothèque</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Gestion des genres</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Liste des gens</a>
          <a class="dropdown-item" href="#">Ajouter un genre</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">gestion des auteurs</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Liste des auteurs</a>
          <a class="dropdown-item" href="#">Ajouter un auteur</a>
          <a class="dropdown-item" href="#">rechercher un auteur</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">gestion des nationnalité</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="listeNationalite.php">Liste des nationnalités</a>
          <a class="dropdown-item" href="formNationalite.php?action=">Ajouter une nationnalités</a>
         
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">gestion des contients</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="index.php?uc=continent&action=list">Liste des continent</a>
          <a class="dropdown-item" href="formNationalite.php?action=">Ajouter un continent</a>
         
        </div>
      </li>
    </ul>


    <!-- <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form> -->
  </div>

</nav>
