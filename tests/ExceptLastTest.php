<?php
namespace tests;

use Arr\ExceptLast;

class ExceptLastTest extends \PHPUnit_Framework_TestCase
{

    public function testExceptLast()
    {
        $last = new ExceptLast();

        $array = [1, 2, 3, 4];
        $expected = [1, 2, 3];

        $this->assertEquals($expected, $last->removeLast($array));
    }
}
