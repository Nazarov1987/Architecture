<?php


class SquareAreaLib
{
    public function getSquareArea(int $diagonal)
    {
        $area = ($diagonal**2)/2;
        echo 'Вычисляем площадь квадрата через длину его диагональ. Она равна ' . $area . '. ';
        return $area;
    }
}