<?php

namespace Arr;


class Slice {

    public function __construct($array){
        $this->array = $array;
    }

    public function modifyBeginning(){
        return array_slice($this->array, 2);
    }

    public function modifyEnd(){
        return array_slice($this->array, 0, 3);
    }
}