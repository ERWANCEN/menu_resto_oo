<?php
// j'inclus dans le fichier actuel, le fichier 'Menu.php'
require 'Menu.php';

// je crée une instance, dans laquelle je base mon nouvel objet '$menu' sur la classe 'Menu()'
$menu = new Menu();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Resto</title>
</head>
<body>
    <h2>Méthode 1</h2>
    <!-- je crée une boucle 'foreach()' qui va parcourir le tableau présent dans la classe et accessible grâce à la méthode 'getMenu()' -->
    <?php foreach($menu->getMenu() as $key => $values) : ?>
        <!-- je vais afficher chaque clé du tableau dans une liste, elle-même contenue dans une liste désordonnée -->
        <ul><li><?php echo $key; ?></li>
            <!-- je crée une seconde boucle qui va me permettre de récupérer toutes les valeurs des tableaux associatifs -->
            <?php foreach($values as $value) : ?>
            <!-- j'affiche dans une liste, elle-même contenue dans une liste désordonnée, elle-même contenue dans la liste désordonnée qui contient les clés -->
            <ul><li><?php echo $value; ?></li></ul>
            <!-- je ferme la boucle 'foreach()' et je ferme également la balise de la grande liste désordonnée -->
            <?php endforeach; ?></ul>
    <!-- je ferme la grande boucle 'foreach()' -->
    <?php endforeach; ?>

    <hr>

    <h2>Méthode 2</h2>
    <!-- j'appelle la méthode 'menu()' -->
    <?php echo $menu->menu(); ?>
</body>
</html>