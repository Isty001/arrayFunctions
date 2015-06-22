<?php

namespace tests;

use Arr\Filter;

class FilterTest extends \PHPUnit_Framework_TestCase
{

    public function testFilter()
    {


        $array = [false, '2', null, '', 'asd'];
        $filter = new filter($array);

        $expected = ['2', 'asd'];

        $this->assertEquals($expected, array_values($filter->filter()));
    }
}
