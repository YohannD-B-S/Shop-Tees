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

    if ($quantity <=0 || $quantity > 3){ // si la quantié est inferieur ou égale a 0 ou superieur a 3
        throw new Exception("1 à 3 consoles de jeu maximum !!"); //on leve une exception qui donne le message 
    }
        else{ // else product et quantité deviennent des variable.
        

    $order =[
        "product" => $product,
        "quantity"=> $quantity,
        "createdAt" => new DateTime(""), //creation de la date  sans ariable pour que la commande soit cree a l'instant T
    ];
    return $order; // je return la valeur order pour ensuite la sauvegarder via la function saveOrder
}
}

// creation de la function saveOrder qui prends en compte $order retourné ci dessus
function saveOrder($order,){
    $_SESSION["order"] = $order;
    // $_SESSIOn est une variable globale qui permet de creer  une session via stat session.
    // la function donne une valeur dans un tableau à $order
}



