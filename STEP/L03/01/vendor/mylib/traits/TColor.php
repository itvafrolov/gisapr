<?php
namespace mylib\traits;

trait TColor
{
    private $color;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($p)
    {
        $this->color = $p;
    }
}

?>