<?php
class Panier
{
    public $nbProduit; 

    public function ajouterProduit(){
       
        return 'Le produit a été ajouté au panier ! ';
    }

 }

$panier = new Panier;


$panier -> nbProduit = 5;
echo 'Le nombre de produits dans le panier est : ' . $panier -> nbProduit . ' !<br>'; 

echo 'Panier : ' . $panier -> ajouterProduit() . '<br>';























