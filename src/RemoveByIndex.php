<?php

namespace Arr;

class RemoveByIndex
{

    public function removeByIndex($array, $index)
    {
        for( $i=0; $i<=$index; $i++){
            if( $i==$index ){
                unset($array[$i]);
                return $array;
            }
        }
    }
}