<?php

namespace Arr\Tests;

use Arr\Intersection;

class InterSectionTest extends \PHPUnit_Framework_TestCase
{

    public function testIntersection()
    {
        $intsec = new Intersection();

        $array1 = [1, 2, 3, 4, 5];
        $array2 = [6, 2, 5, 7, 8];

        $expected = [2, 5];

        $this->assertEquals($expected, array_values($intsec->intsec($array1, $array2)));
    }
}
