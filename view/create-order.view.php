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

<!-- Vérifie si une commande ("order") existe dans la session utilisateur -->
<?php if (array_key_exists("order", $_SESSION)) : ?>
    <p>
        Vous avez une commande en attente : 
        <?php echo $_SESSION["order"]["quantity"]; ?> :
        <?php echo $_SESSION["order"]["product"]; ?>
    </p>
<?php endif; ?>

<form method="post">
    <label for="quantity">Quantité :
        <input type="text" name="quantity" id="quantity">
    </label>

    <label for="product">Produit :
        <select name="product">
            <option value="Playstation">Playstation</option>
            <option value="Nitendo">Nitendo</option>
            <option value="Xbox">Xbox</option>
            <option value="Game-Boy">Game-Boy</option>
        </select>
    </label>

    <button type="submit">Valider</button>
</form>

</main>

</body>
</html>
