<?php

class Avis extends Db
{

    public static function index()
    {

        $produits = Produit::findAll();
        include(VIEWS . 'app/index.php');
    }



    public static function findByProduit($id)
    {
        $produits = Produit::findAll();

        $nbComment=0;

        foreach($produits as $produit){

            
            if ($nbComment == 0):

                echo 'Pas de commentaire';

            else:

                $nbComment++;
                
                echo 'Il y a '. $nbComment .' commentaires';


            endif;

        }

    }

}
