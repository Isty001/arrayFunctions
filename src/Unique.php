<?php

namespace Arr;


class Unique
{

    public function unique($array)
    {
        return array_unique($array, SORT_NUMERIC);
    }
}