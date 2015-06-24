<?php

namespace Arr\Tests;

use Arr\ZipArray;

class ZipTest extends \PHPUnit_Framework_TestCase {

    public function testZip(){

        $zip = new ZipArray();
        $array1 = ['fred', 'barney'];
        $array2 = [30, 40];
        $array3 = [2, 1];

        $expected = [
            ['fred', 30, 2],
            ['barney', 40, 1],
        ];

        $this->assertEquals($expected, $zip->zip($array1, $array2, $array3));
    }
}
