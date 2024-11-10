<?php

// je crée une classe que j'appelle 'Menu'
class Menu
{
    // PREMIÈRE MÉTHODE

    /**
     * Propriété contenant le tableau surlequel se base l'exercice
     *
     * @var array
     */
    private array $_menu = [
        "Entrées" => ["Pain", "Légumes", "Toast"],
        "Plats" => ["Agneau", "Kebab", "Pizza"],
        "Desserts" => ["Tiramisu", "Glace"]
    ];

    /**
     * Méthode qui me permet d'obtenir le tableau 
     * Getter (accesseur)
     *
     * @return void
     */
    public function getMenu()
    {
        return $this->_menu;
    }

    // DEUXIÈME MÉTHODE

    /**
     * Propriété qui va recevoir le menu complet
     *
     * @var string
     */
    private static string $affichage = "";

    /**
     * Méthode qui va permettre créer le menu
     *
     * @return void
     */
    public function menu()
    {
        // boucle 'foreach()' qui va parcourir le tableau contenu dans la propriété privée '$_menu'
        foreach($this->_menu as $momentPlat => $aliments)
        {
            // je vais afficher chaque clé du tableau dans une liste, elle-même contenue dans une liste désordonnée et je vais les concaténer dans la propriété privée et static '$affichafe'
            self::$affichage .= "<ul><li>" . $momentPlat . "</li>";
            // je crée une seconde boucle qui va me permettre de récupérer toutes les valeurs des tableaux associatifs
            foreach($aliments as $aliment)
            {
                // j'affiche dans une liste, elle-même contenue dans une liste désordonnée, elle-même contenue dans la liste désordonnée qui contient les clés
                self::$affichage .= "<ul><li>" . $aliment . "</li></ul>";
            }
            // je ferme la grande liste désordonnée
            self::$affichage .= "</ul>";
        }
        // permet de retourner la partie HTML
        return self::$affichage;
    }
}