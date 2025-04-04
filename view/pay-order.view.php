<?php
require_once '../config.php'; ?>
<?php 
require_once 'partial/header.php';?>


<main>

    <h1>Payer une commande</h1>

    <!-- si il y a une valeur orderByUser alors afficher la valeur de product et celle de quantité -->
    <?php if ($orderByUser) { ?>
        <p>Vous avez une commande en attente : <?php echo $orderByUser['product']; ?> <?php echo $orderByUser['quantity']; ?> </p>
        <!-- ajout d'un echo de la date si une commande est créé -->
        <p>Créée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
        <p>Le status de la commande est <?php echo $orderByUser['status']; ?></p>

        <form method="post"> <!-- ajout d'un formulaire pour le paiement -->
            <button type="submit">Payer</button> <!-- ajout d'un bouton pour paiement -->
        </form>

    <?php } else { ?> <!--sinon afficher comme quoi il n'y a pas de commande  -->
        <p>Vous n'avez pas de commande en attente.</p>
    <?php } ?>