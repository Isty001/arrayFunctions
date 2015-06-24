<?php

namespace tests;

use Arr\UnzipArray;

class UnzipTest extends \PHPUnit_Framework_TestCase
{

    public function testUnzip()
    {

        $unzip = new UnzipArray();

        $array = [
            ['fred', 30, 2],
            ['barney', 40, 1],
        ];

        $expected = [
            ['fred', 'barney'],
            [30, 40],
            [2, 1],
        ];

        $this->assertEquals($expected, $unzip->unzip($array));
    }
}
