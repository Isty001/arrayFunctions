<?php

namespace tests;

use Arr\filter;


class Test extends \PHPUnit_Framework_TestCase {

    public function testFilter(){


        $array = [FALSE, '2', NULL, '', 'asd'];
        $filter = new filter($array);

        $expected = ['2', 'asd'];

        $this->assertEquals($expected, $filter->filter());
    }
}
