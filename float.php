<?php

var_dump(0.1 + 0.2);
# float(0.3000000004)

var_dump((0.1 + 0.2) === 0.3);
# bool(false)

// bcadd関数使用することによって文字列になって、計算することができる
$number = bcadd('0.1', '0.2', 1);
var_dump($number);
# string(3) "0.3"

var_dump((float) $number === 0.3);
# bool(true)
