<?php

namespace tests;

use Arr\Flatten;

class FlattenTest extends \PHPUnit_Framework_TestCase {

    public function testFlatten(){

        $flatten = new Flatten();
        $array = [1, 2,
            [3, 4],
            11, 5, 7,
            [4,5, ['a', 'b']]
        ];

        $expected = [1, 2, 3, 4, 11, 5, 7, 4, 5, 'a', 'b'];

        $this->assertEquals($expected, $flatten->flatten($array));
    }
}
