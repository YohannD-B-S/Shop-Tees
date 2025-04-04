<?php
require_once '../partial/header.php';?> //

<p><?php echo $message ?></p>

<!-- si il y a une valeur orderByUser alors afficher la valeur de product et celle de quantité -->
<?php if ($orderByUser){?>
    <p>Vous avez une commande en attente : <?php echo $orderByUser['product']; ?> <?php echo $orderByUser['quantity']; ?> </p>
    <!-- ajout d'un echo de la date si une commande est créé -->
    <p>Créée le <?php echo $orderByUser['createdAt'] ->format('y-m-d'); ?></p>
    <p>Le status de la commande est <?php echo $orderByUser['status']; ?></p> 


<?php } ?>






<form method="post">
    <label for="quantity">Quantité :
        <input type="text" name="quantity" id="quantity">
    </label>

    <label for="product">Produit :
        <select name="product" id="">
            <?php foreach ($products as $product) {?>
                <option value="<?php echo $product ; ?>"><?php echo $product ; ?>'</option>
                <?php } ?>
        </select>
    </label>

    <button type="submit">Valider</button>
</form>

</main>

</body>
</html>