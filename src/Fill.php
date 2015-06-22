<?php

namespace Arr;


class Fill {

    public function fillArray($array, $start, $elementNumber, $value){
        $array = array_fill($start, $elementNumber, $value);

        return $array;
    }
}