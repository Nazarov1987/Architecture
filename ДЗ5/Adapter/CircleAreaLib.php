<?php


class CircleAreaLib
{
    public function getCircleArea(int $diagonal)
    {
        $area = (M_PI * $diagonal**2)/4;
        echo 'Вычисляем площадь круга через длину окружности. Она равна ' . $area . '. ';
        return $area;
    }
}