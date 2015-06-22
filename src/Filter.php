<?php

namespace Arr;


class Filter
{

    public function __construct($array)
    {
        $this->array = $array;
    }

    public function callbackFilter($array)
    {
        return ($array != false && $array != null && $array != '');
    }

    public function filter()
    {
        return array_filter($this->array, [$this, 'callbackFilter']);
    }
}