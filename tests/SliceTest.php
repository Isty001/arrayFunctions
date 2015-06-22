<?php

namespace tests;

use Arr\Slice;

class SliceTest extends \PHPUnit_Framework_TestCase {

    public function testSlice(){

        $array = [1, 2, 3, 4, 5];

        $slice = new Slice($array);


        $expectedBeginning = [3, 4, 5];
        $this->assertSame($expectedBeginning, $slice->modifyBeginning());

        $expectedEnd = [1, 2, 3];
        $this->assertSame($expectedEnd, $slice->modifyEnd());
    }
}
