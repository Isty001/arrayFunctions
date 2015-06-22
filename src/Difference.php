<?php

namespace Arr;


class Difference
{

    public function __construct($array1, $array2)
    {
        $this->array1 = $array1;
        $this->array2 = $array2;
    }

    public function difference()
    {
        return array_diff($this->array1, $this->array2);
    }
}