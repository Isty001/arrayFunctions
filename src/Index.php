<?php

namespace Arr;

class Index {

    public function getIndex($element, $array){
        $key = array_search($element, $array);
        return array_search($key, array_keys($array));
    }

}