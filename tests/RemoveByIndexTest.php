<?php

namespace tests;

use Arr\RemoveByIndex;

class RemoveByIndexTest extends \PHPUnit_Framework_TestCase
{

    public function testRemoveByIndex()
    {

        $rem = new RemoveByIndex();

        $array = [1, 2, 3, 4, 5];
        $index = 3;
        $expected = [1, 2, 3, 5];

        $this->assertEquals($expected, array_values($rem->removeByIndex($array, $index)));
    }
}
