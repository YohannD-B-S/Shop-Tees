<?php


// Je récupère le fichier config.php
require_once '../config.php';




// Je demarre la session : php créera un id unique sous forme de cookie pour chaque utilisateur
// et stockera les données de session dans le serveur 
session_start();


$message = "";
// Initialise la variable $message comme une chaîne vide.


    // Vérifie si le formulaire a été soumis avec la méthode POST.

    if (array_key_exists("quantity", $_POST) && array_key_exists("product", $_POST)) {
        // Code à exécuter si les clés 'quantity' et 'product' existent dans le tableau $_POST
        // Vérifie si les champs 'quantity' et 'product' ne sont pas vides.
       

        $order =[
            "quantity" => $_POST["quantity"],
            "product" => $_POST["product"]
        ];//je crée un tableau pour stocker les données du formulaire

        $_SESSION["order"] = $order;
        //je stocke les données du formulaire dans la session

        

    }


   


//on vient requpéré le fichier view

require_once '../view/create-order.view.php';
