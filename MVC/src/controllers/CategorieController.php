<?php

class CategorieController
{
    public static function add()
    {

        if (isset($_GET['id'])) :
            $categorie = Categorie::find([
                'id' => $_GET['id']
            ]);

        endif;

        include(VIEWS . 'categories/add.php');
    }

    public static function save()
    {
        // $_FILES contient les informations des inputs type FILE, var_dump() nous permet de les afficher
        // die permet de stopper le traitement
        //die(var_dump($_FILES));


        Categorie::create([
            'id' => $_POST['id'],
            'nom' => $_POST['nom'],
        ]);

        $_SESSION['messages']['success'][] = 'Catégorie ajoutée avec succés ';
        header('location:../categories/list');
        exit();
    }

    public static function list()
    {
        $categories = Categorie::findAll();

        $produits = Produit::findAll();


        include(VIEWS . 'categories/list.php');
    }

    public static function delete()
    {
        Categorie::delete([
            'id' => $_GET['id']
        ]);

        $_SESSION['messages']['success'][] = 'La catégorie a été supprimée avec succés ';
        header('location:../categories/list');
        exit();
    }
}
