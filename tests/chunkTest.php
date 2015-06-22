<?php

namespace Arr\Tests;

use Arr\Chunk;

class chunkTest extends \PHPUnit_Framework_TestCase {

    public function testChunk(){

        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $size = 3;

        $chunkClass = new Chunk($array, $size);

        $expected = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9],
            [10]
        ];

        $this->assertEquals($expected, $chunkClass->chunkCreator());

    }
}
