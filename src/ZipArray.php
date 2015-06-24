<?php

namespace Arr;


class ZipArray {

    public function zip($array1, $array2, $array3){
        return array_map(NULL, $array1, $array2, $array3);
    }
}