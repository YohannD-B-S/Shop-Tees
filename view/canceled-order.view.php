<?php
require_once 'partial/header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
    <h1>Annuler la commande</h1>

    <p><?php echo $message; ?></p>



    <?php if ($orderByUser) { ?>
        <p>Vous avez une commande en attente : <?php echo $orderByUser['product']; ?> <?php echo $orderByUser['quantity']; ?> </p>
        <!-- ajout d'un echo de la date si une commande est créé -->
        <p>Créée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
        <p>Le status de la commande est <?php echo $orderByUser['status']; ?></p>

        <form method="post"> <!-- ajout d'un formulaire pour le paiement -->
            <button type="submit">Annuler</button> <!-- ajout d'un bouton pour paiement -->
        </form>

    <?php } else { ?> <!--sinon afficher comme quoi il n'y a pas de commande  -->
        <p>Vous n'avez pas de commande en attente.</p>
    <?php } ?>


</main>
    
</body>
</html>
