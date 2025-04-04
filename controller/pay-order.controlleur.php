<?php 

session_start(); // je demarre la session : php créera un id unique sous forme de cookie pour chaque utilisateur et stockera les données de session dans le serveur

require_once '../model/order.repository.php'; // je requpère le fichier order.repository.php

$orderByUser = findOrderByUser(); // je donne une valeur au resultat de ma fonction findOrderByUser

require_once '../view/pay-order.view.php';
// je requpère le fichier view