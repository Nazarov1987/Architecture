<?php

spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});


    $squareAdapter = new SquareAdapter(new SquareAreaLib());
    $squareAdapter->squareArea(6);



    $circleAdapter = new CircleAdapter(new  CircleAreaLib());
    $circleAdapter->circleArea(7);

