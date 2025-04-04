<?php
require_once '../config.php'; ?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>Créer une commande</li>
            </ul>
        </nav>
    </header>

    <main>

         <h1>Payer une commande</h1>

        <!-- si il y a une valeur orderByUser alors afficher la valeur de product et celle de quantité -->
        <?php if ($orderByUser) { ?>
            <p>Vous avez une commande en attente : <?php echo $orderByUser['product']; ?> <?php echo $orderByUser['quantity']; ?> </p>
            <!-- ajout d'un echo de la date si une commande est créé -->
            <p>Créée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
            <p>Le status de la commande est <?php echo $orderByUser['status']; ?></p>
            
            <button type="submit">Payer</button> <!-- ajout d'un bouton pour paiement -->

            <?php } else { ?> <!--sinon afficher comme quoi il n'y a pas de commande  -->
            <p>Vous n'avez pas de commande en attente.</p>  
        <?php } ?>