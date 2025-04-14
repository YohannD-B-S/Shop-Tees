<?php

class Order{ //creation d'une class Order qui viendra remplacer le tableau des articles 

    public $product; // dans cette classe : creation d'une variable product dans laquelle on pourra stocker le nom ou l'id d'un produit.

    public $quantity; // creation d'une variable quantité dans laquelle nous pourrons stcker une quantité de produit commandé

    public $status; // creation d'un varliable status dans laquelle on pourra stocker le status de la commande 

    public $createdAt; // creation d'une variable createdAt afin d'y stoquer la date du produit.
}


// je creer une variable $order qui vas évolué en fonctiond des parametre produit que je veux cibler 

$order = new Order(); 

$order -> product = "playstation"; // ici la variable product deviens le nom de mon article
$order -> quantity = 1; // la il devient la quantité coimmandé
$order -> status = 'CART'; // ici il deviens le status de la commande 
$order -> createdAt = new DateTime(); // et ici il est la date de la commande.
