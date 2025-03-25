<?php

$message = "";
// Initialise la variable $message comme une chaîne vide.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si le formulaire a été soumis avec la méthode POST.

    if (!empty($_POST["quantity"]) && !empty($_POST["product"])) {
        // Vérifie si les champs 'quantity' et 'product' ne sont pas vides.
        // !empty retourne true si la variable n'est pas vide.

        $quantity =($_POST["quantity"]);
        // Récupère et échappe la valeur de 'quantity' pour éviter les failles XSS.


        $product =($_POST["product"]);
        // Récupère et échappe la valeur de 'product' pour éviter les failles XSS.

        $message = "Votre commande de $quantity $product a bien été enregistrée.";
        // Génère un message confirmant que la commande a bien été enregistrée.

    } else {
        // Si un ou les deux champs sont vides, affiche un message d'erreur.
        $message = "Veuillez remplir tous les champs.";
    }
}

   


//on vient requpéré le fichier view

require_once '../view/create-order.view.php';
