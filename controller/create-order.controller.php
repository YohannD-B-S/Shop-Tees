<?php

$message = "";
// Initialise la variable $message comme une chaîne vide.


    // Vérifie si le formulaire a été soumis avec la méthode POST.

    if (array_key_exists("quantity", $_POST) && array_key_exists("product", $_POST)) {
        // Code à exécuter si les clés 'quantity' et 'product' existent dans le tableau $_POST
        // Vérifie si les champs 'quantity' et 'product' ne sont pas vides.
       

        $quantity = $_POST["quantity"];


        $product = $_POST["product"];

        $message = "Votre commande de $quantity $product a bien été enregistrée.";
        // Génère un message confirmant que la commande a bien été enregistrée.

    } else {
        // Si un ou les deux champs sont vides, affiche un message d'erreur.
        $message = "Veuillez remplir tous les champs.";
    }


   


//on vient requpéré le fichier view

require_once '../view/create-order.view.php';
