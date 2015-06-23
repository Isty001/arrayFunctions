<?php

namespace Arr;

class RemoveByValue
{

    public function removeByValue($array, $value)
    {
        foreach( $array as $key => $arrValue){
            if($arrValue == $value){
                unset($array[$key]);
            }
        }

        return $array;
    }
}