<?php
class Livre{

    public $author;
    public $title;
    public $content;

    
    
    public function setContent($content){
        if (empty ($content) || strlen($content) < 250 ){
            throw new Exception('le titre du livre ne peut pas etre vide nin inférieur à 255 ');
        }
    $this->content;
    }
    public function getTitle(){
        return "Le titre du livre est :'$this->title.'";
    }
    public function searchword($word) {
        $word_position = strpos ($this->content , $word);
        if ($word_position !== false){
            return "Le livre contient le mot <strong>".$word."</strong> à la postion".$word_position."<br>";
        }
        else{
            return "Le livre ".$this->title." ne contient pas le mot".$word."<br>";
        }
    }
}

try{

$livre =new Livre();
$livre->author='dahl';
$livre->title ='bbbb';
$livre->content = 'Lorem ipsum dolor sit amet ';

$titre_livre = $livre->getTitle();

echo $titre_livre;

echo $livre->searchword('Lorem');
} catch (Exception $error){
    echo "Erreur :  <b>".$error->getMessage()."</b>";
    echo" à la ligne <b>".$error->getLigne()."</b>";
    echo"du fichier <b>".$error->getFile()."</b>";
}