<?php
 class Panier
{
    public $nbProduit;
    public $color; 

    public function ajouterProduit(){
       
        return 'Le produit a été ajouté au panier ! ';
    }

 }

 class Pr_alimentaire extends Panier
 {

    public $datexp;
    
    public function descproduit(){

        return 'Le produit ajouté ';
    }

 } 

 class Vetements extends panier
 {

    public static $robe= 'robe';
    public $taille;
    public $sexe;

    public function descvet(){

        return '';
    }
 }

 class Linges extends panier
 {

    

 }


$panier = new Panier;

$panier->nbProduit = 5;
$panier->color='rouge';
echo 'Le nombre de produits dans le panier '.$panier->color. ' est : ' . $panier -> nbProduit . ' !<br>'; 
echo 'Panier : ' . $panier -> ajouterProduit() . '<br>';


$pr_alimentaire = new Pr_alimentaire;
$pr_alimentaire->color='bleu';
$pr_alimentaire->datexp='fin de ce mois';
echo ''.$pr_alimentaire -> descproduit() .' est :'.$pr_alimentaire-> color. ' expire '.$pr_alimentaire-> datexp.'';


$vetements =new Vetements;
$vetements->taille='M';
$vetements->sexe='femme';
$vetements->color='grise';

echo '<br> La '.Vetements::$robe. ' est de taille '.$vetements->taille.' et de couleur '.$vetements->color.'';





















