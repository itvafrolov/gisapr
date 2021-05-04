<?php
class BookProduct extends Product
{
    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        $this->numPages = $numPages;
        parent::__construct($name, $price);
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .="Количество страниц: {$this->numPages}<br>";        
        return $out;
    }

}
?>