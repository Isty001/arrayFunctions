<?php

namespace Arr;


class SliceWhile
{
    public function modifyEnd($array, $argument)
    {
        while (end($array) != $argument) {
            array_pop($array);
        }

        return $array;
    }

    public function modifyBeginning($array, $argument)
    {
        while(current($array) != $argument){
            array_shift($array);
        }

        return $array;
    }
}