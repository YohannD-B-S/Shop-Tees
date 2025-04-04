<?php 
require_once '../config.php'; // Je récupère le fichier config.php
session_start(); // je demarre la session : php créera un id unique sous forme de cookie pour chaque utilisateur et stockera les données de session dans le serveur

require_once '../model/order.repository.php'; // je requpère le fichier order.repository.php

$orderByUser = findOrderByUser(); // je donne une valeur au resultat de ma fonction findOrderByUser


if($_SERVER['REQUEST_METHOD'] === 'POST'){ // si la méthode de la requête est POST
    $orderByUser ['status'] = "PAID"; // je donne une valeur au resultat de ma fonction findOrderByUser
    saveOrder($orderByUser); // je sauve la commande via la fonction saveOrder
}

require_once '../view/pay-order.view.php';
// je requpère le fichier view