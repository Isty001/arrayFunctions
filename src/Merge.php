<?php

namespace Arr;

class Merge
{

    public function merge($array1, $array2)
    {
        $array = array_unique(array_merge($array1, $array2));
        sort($array);
        return $array;
    }
}