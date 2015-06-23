<?php

namespace Arr\Tests;

use Arr\Merge;

class MergeTest extends \PHPUnit_Framework_TestCase
{

    public function testMerge()
    {
        $merge = new Merge();
        $array1 = [1, 3, 1, 5, 2, 7];
        $array2 = [2, 7, 4, 2, 6, 3, 8, 1];
        $expected = [1, 2, 3, 4, 5, 6, 7, 8];

        $this->assertEquals($expected, array_values($merge->merge($array1, $array2)));
    }
}
