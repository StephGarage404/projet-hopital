<?php

//RELIER CONEXION BDD

require "connexion.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    



<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="ajout-patient.php">Ajout patient</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="liste-patients.php">Liste patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ajout-rendezvous.php">Ajout RDV</a>
            </li>
        </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-danger" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<h1 class="d-flex justify-content-center">AJOUT PATIENT</h1> 

    
<form action="ajout-patient2.php" method="post">
    <ul>
        <li>
            <input type="text" placeholder="first name" name="firstname" id="">
        </li>

                <br>

        <li>
            <input type="text" placeholder="last name" name="name" id="">
        </li>
                
                <br>
        
        <li>
            <input type="text" placeholder="email" name="email" id="">
        </li>
        
                <br>

        <li>
            <input type="text" placeholder="Telephone" name="telephone" id="">
        </li>

                <br>

        <li>
            <input type="number" placeholder="age" name="age" id="">
        </li>
                <br>

                <li>
            <input type="date" name="birthday" id="">
        </li>
                <br>


        <button type="submit">ENVOYER</button>
    </ul>
</form>


<div class="container text-center">
  <div class="row align-items-start pb-8">
    <div class="col">
      
    <img class="image2" src="/Exercice-PDO-2-master/img/pngegg.png" style="width: 600px;">
      
  </div> 


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html> 