<?php

namespace Arr;


class ExceptLast {

    public function removeLast($array){
        array_pop($array);
        return $array;
    }
}