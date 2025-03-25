<!DOCTYPE html>
<html lang="fr
">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<!-- je crée le formulaire sur view (ici) que je récupere sur le controller via requiere_once -->
<header>

<h2><?php echo $message ?></h2>

<form method="post">

    <label for="quantity">Quantity

        <input type="text" name="quantity" id="">

    </label>

    <label for="product">

        <select name="product">
<!-- je crée les options que je récupere sur le controller via requiere_once -->
            <option value="Playstation"> Playstation</option>

            <option value="Nitendo">Nitendo</option>

            <option value="Xbox">Xbox</option>

            <option value="Game-Boy">Game-Boy</option>

        </select>



    <button type="submit">Valider</button>


</form>
</header>

</body>
</html>