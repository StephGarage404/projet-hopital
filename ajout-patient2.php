<?php

require "connexion.php";

if (!empty($_POST['firstname'])
&& !empty($_POST['name'])
&& !empty($_POST['birthday'])
&& !empty($_POST['email'])
&& !empty($_POST['telephone'])) 
{
    // Enregistrer en BDD
    
    //Etape 2 Créer la requete SQL
    
    $sql = "INSERT INTO `patients`(`firstname`, `lastname`, `mail`, `phone`, `birthdate`) VALUES ('"
            . $_POST['firstname']. "', '" 
            . $_POST['name'] . "',' "
            . $_POST['email'] . "', '"
            . $_POST['telephone'] . "', '"
            . $_POST['birthday'] ."')";
    var_dump($sql);
    $connexion->query($sql);  
}

else
{
   echo "requête invalide";
   echo "<pre>";
   var_dump($sql);
   echo "</pre>"; 
}