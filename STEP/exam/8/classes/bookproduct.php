<?php
class BookProduct extends Product
{
    public $author;

    public function __construct($name, $price, $provider, $author)
    {
        $this->author = $author;
        parent::__construct($name, $price, $provider);
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .="Автор: {$this->author}<br>";        
        return $out;
    }

    public function print()
    {
        echo "<hr>";
        echo "Информация о печатном издании: <br>";
        echo $this->getProduct();        
    }

    public function getPriceWithDiscount($dis)
    {
        return $this->price*(1-$dis/100);
    }
    
}

?>