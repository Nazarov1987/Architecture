<?php


class CircleAdapter implements ICircle
{
    private  $area;

    public function __construct(CircleAreaLib  $area)
    {
        $this-> area = $area;
    }
    function circleArea(int $circumference)
    {
        $area = ($circumference**2)*3.14;
        echo 'Вычисляем площадь круга через длину его радиуса. Она равна ' . $area . '. ';
        return  $area;
    }
}