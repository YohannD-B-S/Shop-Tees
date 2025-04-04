<?php
require_once '../config.php'; // Je récupère le fichier config.php
session_start(); // je demarre la session : php créera un id unique sous forme de cookie pour chaque utilisateur et stockera les données de session dans le serveur

require_once '../model/order.repository.php'; // Je requpère le fichier order.repository.php
require_once '../config.php'; // Je récupère le fichier config.php


$orderByUser = findOrderByUser(); // je donne une valeur au resultat de ma fonction findOrderByUser

if($_SERVER['REQUEST_METHOD'] === 'POST'){ // si la méthode de la requête est POST
    $orderByUser ['status'] = "CART"; // je donne une valeur au resultat de ma fonction findOrderByUser
    saveOrder($orderByUser); // je sauve la commande via la fonction saveOrder
}

require_once '../view/canceled-order.view.php'; // Je requpère le fichier view