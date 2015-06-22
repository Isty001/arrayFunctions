<?php

namespace Arr;


class Flatten {

    public function flatten($array){
        return iterator_to_array(new \RecursiveIteratorIterator(
            new \RecursiveArrayIterator($array)), FALSE);
    }
}
