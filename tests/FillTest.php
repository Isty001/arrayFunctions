<?php

namespace Arr\Tests;

use Arr\Fill;

class FillTest extends \PHPUnit_Framework_TestCase
{

    public function testFill()
    {

        $fill = new Fill();
        $array = array();

        $start = 0;
        $elementNumber = 5;
        $value = 1;
        $expected = [1, 1, 1, 1, 1];

        $this->assertEquals($expected, $fill->fillArray($array, $start, $elementNumber, $value));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidSecondArgument()
    {
        (new Fill)->fillArray([0, 0, 0], -9, 3, 1);
        (new Fill)->fillArray([0, 0, 0], "valami", 3, 1);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidThirdArgument()
    {
        (new Fill)->fillArray([0, 0, 0], 0, -5, 1);
        (new Fill)->fillArray([0, 0, 0], 0, "valami", 1);
    }
}
