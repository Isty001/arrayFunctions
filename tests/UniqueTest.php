<?php

namespace Arr\Tests;

use Arr\Unique;

class UniqueTest extends \PHPUnit_Framework_TestCase
{
    public function testUnique()
    {
        $unique = new Unique();

        $array = [1, 2, 1, 3, 4, 2, 4, 2, 5];
        $expected = [1, 2, 3,4, 5];

        $this->assertEquals($expected, array_values($unique->unique($array)));
    }
}
