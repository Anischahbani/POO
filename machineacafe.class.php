<?php

class Machineacafe{
    public $couleur = 'noir';

    public function faitlecafe(){
        return "je fais un café  <br>";
    }

}

$machineacafe = new Machineacafe ;

$machineacafe-> couleur='noir';
echo '' . $machineacafe -> faitlecafe() . ' '.$machineacafe -> couleur .'';
