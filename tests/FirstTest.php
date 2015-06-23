<?php
namespace tests;

use Arr\First;

class FirstTest extends \PHPUnit_Framework_TestCase
{

    public function testFirst()
    {
        $last = new First();

        $array = [1, 2, 3, 4];
        $expected = 1;

        $this->assertEquals($expected, $last->returnFirst($array));
    }
}
