<?php

namespace Arr;


class filter {

    public function __construct($array){
        $this->array = $array;
    }

    public function callbackFilter($array){
        return($array != FALSE && $array != NULL && $array != '');
    }

    public function filter(){
        return array_filter($this->array, array($this, 'callbackFilter'));
    }
}