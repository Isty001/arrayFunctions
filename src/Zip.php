<?php

namespace Arr;


class Zip {

    public function zip($array1, $array2, $array3){
        return array_map(NULL, $array1, $array2, $array3);
    }
}