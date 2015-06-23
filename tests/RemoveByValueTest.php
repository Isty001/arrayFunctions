<?php

namespace Arr\Tests;

use Arr\RemoveByValue;

class RemoveByValueTest extends \PHPUnit_Framework_TestCase
{

    public function testRemoveByValue()
    {

        $rem = new RemoveByValue();

        $array = [1, 2, 1, 1, 3, 4, 5, 1, 3];
        $value = 1;
        $expected = [2, 3, 4, 5, 3];

        $this->assertEquals($expected, array_values($rem->removeByValue($array, $value)));
    }
}
