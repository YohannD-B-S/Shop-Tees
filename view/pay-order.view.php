<?php
require_once '../config.php'; ?>
<?php 
require_once 'partial/header.php';?>

 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    

<main>

    <h1>Payer la commande</h1>

    <p><?php echo $message ?></p> <!-- affichage du message de la commande -->

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

</main>
    </body>
 </html>
