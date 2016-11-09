<?php

/**
 * Created by PhpStorm.
 * User: idris
 * Date: 09/11/2016
 * Time: 00:17
 */
namespace App\Libraries;


class Calculator
{
    public function add($num1, $num2)
    {
        if(!is_numeric($num1) or ! is_numeric($num2))
        {
            throw new \InvalidArgumentException("NOOOOO! BOOM!");
        }

        return $num1+$num2;
    }
}