<?php 


//je crée la fonction qui va me permetre de trouver la commande de l'utilsateur.
// si la clef "order" (commande) existe dans $_session
//retourner la commande de la $_session
// sinon retourner null 
function findOrderByUser(){
    if (array_key_exists("order", $_SESSION)){
        return $_SESSION["order"];
    }else{
        return null;
    }
}


//je crée une fonction pour créé un commande qui prends en compte deux facteur($product,$quantity)
// product correspond aux produits et quantity a la quantité de produit commandé dans cet ordre
function createOrder ($product, $quantity){
    $order =[
        "product" => $product,
        "quantity"=> $quantity,
    ];
    return $order; // je return la valeur order pour ensuite la sauvegarder via la function saveOrder
}

// creation de la function saveOrder qui prends en compte $order retourné ci dessus
function saveOrder($order,){
    $_SESSION["order"] = $order;
    // $_SESSIOn est une variable globale qui permet de creer  une session via stat session.
    // la function donne une valeur dans un tableau à $order
}



