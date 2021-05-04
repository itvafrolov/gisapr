<?
namespace classes;
class MyPoint2D
{
    //public $name;
    public $X;
    public $Y;

    public function __construct($X, $Y)
    {
        $this->X = $X;
        $this->Y = $Y;       
    }

    public function getPoint()
    {        
        // $out ="Координаты точки {$this->name}: {$this->X} {$this->Y} <br>";
        return "Координаты точки: {$this->X} {$this->Y} <br>";
    }
    

}
    ?>