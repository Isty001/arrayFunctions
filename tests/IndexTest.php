<?php

namespace tests;

use Arr\Index;

class IndexTest extends \PHPUnit_Framework_TestCase {

    public function testIndex(){

        $index = new Index();
        $array = ['a', 'b', 'c',];
        $expected = 2;

        $this->assertEquals($expected, $index->getIndex($array));
    }
}
