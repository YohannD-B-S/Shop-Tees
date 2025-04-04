<?php 
require_once '../config.php'; // Je récupère le fichier config.php
session_start(); // je demarre la session : php créera un id unique sous forme de cookie pour chaque utilisateur et stockera les données de session dans le serveur

require_once '../model/order.repository.php'; // je requpère le fichier order.repository.php

$orderByUser = findOrderByUser(); // je donne une valeur au resultat de ma fonction findOrderByUser

$message = ""; // Initialise la variable $message comme une chaîne vide.

if($_SERVER['REQUEST_METHOD'] === 'POST'){ // si la méthode de la requête est POST
   
   if ($orderByUser ['status'] !== "CANCELED") {
    $orderByUser ['status'] = "PAID"; // je donne une valeur au resultat de ma fonction findOrderByUser
    
    saveOrder($orderByUser); // je sauve la commande via la fonction saveOrder
}else{
    $message = "La commande est deja annulée. Vous ne pouvez plus la payer"; // je donne une valeur au resultat de ma fonction findOrderByUser
   } // je donne une valeur au resultat de ma fonction findOrderByUser
}


require_once '../view/pay-order.view.php';
// je requpère le fichier view