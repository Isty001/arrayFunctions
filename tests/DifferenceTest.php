<?php

namespace tests;

use Arr\Difference;

class DifferenceTest extends \PHPUnit_Framework_TestCase
{

    public function testDifference()
    {

        $array1 = [1, 2, 3];
        $array2 = [4, 2];
        $diff = new Difference($array1, $array2);

        $expected = [1, 3];
        $this->assertEquals($expected, array_values($diff->difference()));
    }
}
