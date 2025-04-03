<?php


// Je récupère le fichier config.php
require_once '../config.php';
require_once '../model/product-repository.php';
require_once '../model/order.repository.php';




// Je demarre la session : php créera un id unique sous forme de cookie pour chaque utilisateur
// et stockera les données de session dans le serveur 
session_start();


$message = "";
// Initialise la variable $message comme une chaîne vide.


    // Vérifie si le formulaire a été soumis avec la méthode POST.

if (array_key_exists("quantity", $_POST) && 
    array_key_exists("product", $_POST)) 
    {
        try{ //essaye de donner une valeur  a la variable $order vi la function createOrder
        $order = createOrder ($_POST['product'], $_POST['quantity']);
            saveOrder($order); // si il ya une vaaleur, sauve $order via la function saveOrder
        } catch(Exception $e) { //si il n'y pas de valeur, attrappe l'exception a la variable $e
            $message = $e -> getMessage(); //le message = $e qui attrappe le message situer dans la function via la fonction getMessage
        }
    } 
$orderByUser = findOrderByUser();
// je donne une valeur au resultat de ma fonction findOrderByUser
//on vient requpéré le fichier view
require_once '../view/create-order.view.php';
