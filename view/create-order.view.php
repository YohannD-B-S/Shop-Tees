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

<!-- si il y a une valeur orderByUser alors afficher la valeur de product et celle de quantité -->
<?php if ($orderByUser){?>
    <p>Vous avez une commande en attente : <?php echo $orderByUser['product']; ?> <?php echo $orderByUser['quantity']; ?> </p>


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