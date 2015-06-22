<?php

namespace Arr;


class Chunk
{

    public function __construct($array, $size)
    {
        $this->array = $array;
        $this->size = $size;
    }

    public function chunkCreator()
    {
        return array_chunk($this->array, $this->size);
    }
}
