<?php
namespace tests;

use Arr\Last;

class LastTest extends \PHPUnit_Framework_TestCase
{

    public function testLast()
    {
        $last = new Last();

        $array = [1, 2, 3, 4];
        $expected = 4;

        $this->assertEquals($expected, $last->returnLast($array));
    }
}
