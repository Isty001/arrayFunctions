<?php

namespace Arr\Tests;

use Arr\SliceWhile;
class SliceWhileTest extends \PHPUnit_Framework_TestCase
{

    public function testSliceWhile(){

        $slice = new SliceWhile();

        $array = ['a', 'b', 'c', 'd', 'e'];
        $argument = 'c';

        $expectedEnd = ['a', 'b', 'c'];
        $this->assertEquals($expectedEnd, $slice->modifyEnd($array, $argument));

        $expectedBeginning = ['c', 'd', 'e'];
        $this->assertEquals($expectedBeginning, $slice->modifyBeginning($array, $argument));
    }
}