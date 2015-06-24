<?php

namespace Arr\Tests;

use Arr\Chunk;

class ChunkTest extends \PHPUnit_Framework_TestCase
{

    public function testChunk()
    {

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

    /**
     * TODO: Typehint elég
     * TODO: Máshol is mindenhova typehint a tömb elé, azokat nem írom már le külön. pl: __construct(array $array1, array $array2)
     *
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidFirstArgument()
    {
        new Chunk("valami", 3);
        new Chunk(new \StdClass(), 3);
        new Chunk(3, 3);
    }

    /**
     * TODO: is_integer()
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidSecondArgument()
    {
        new Chunk([1, 2, 3], 3.14);
        new Chunk([1, 2, 3], "valami");
        new Chunk([1, 2, 3], -5);
        new Chunk([1, 2, 3], new \StdClass);
    }

    /**
     * TODO: Az eredeti leírásban nem muszáj $size-ot adni, mert alapból 1-re van állítva
     */
    public function testMissingSecondArgument()
    {
        $this->assertEquals([[1], [2], [3]], (new Chunk([1, 2, 3]))->chunkCreator());
    }
}
