<?php


class SquareAdapter implements ISquare
{
    private $area;

    public function __construct(SquareAreaLib $area)
    {
        $this->area = $area;
    }

    function squareArea(int $sideSquare){
        $area = $sideSquare**2;
        echo 'Вычисляем площадь квадрата через длину его стороны. Она равна ' . $area . '. ';
        return  $area;

    }
}