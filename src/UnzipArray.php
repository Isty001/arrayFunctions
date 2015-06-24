<?php

namespace Arr;


class UnzipArray
{
    public function semmi(){
        $array = [
            ['fred', 30, 2],
            ['barney', 40, 1],
        ];

        $expected = [
            ['fred', 'barney'],
            [30, 40],
            [2, 1],
        ];
    }

    public function unzip($oldArr)
    {
        for($i=0; $i<=count($oldArr)-1; $i++){
            for($j=0; $j<=count($oldArr[$i])-1; $j++){
                $newArr[$j][] = $oldArr[$i][$j];
            }
        }

        return $newArr;
    }
}