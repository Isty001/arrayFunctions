<?php

namespace tests;

use Arr\Shift;

class Test extends \PHPUnit_Framework_TestCase {

    public function testShift(){

        $array = [1, 2, 3];
        $shift = new Shift();
        $expected = 1;

        $this->assertEquals($expected, $shift->shift($array));
    }
}
