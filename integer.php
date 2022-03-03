<?php

echo gettype(1) . PHP_EOL;
echo gettype(0) . PHP_EOL;
echo gettype(-1) . PHP_EOL;

// 2進数
var_dump(0b10);
// 8進数
var_dump(010);
// 16進数
var_dump(0x10);

// 整数の最大値
var_dump(PHP_INT_MAX);
// 浮動小数点型
var_dump(PHP_INT_MAX + 1);

// 本当はfalseが出ないといけないけど、tureになる。バグるので整数では最大値を超えないようにすること
var_dump((PHP_INT_MAX + 1) === (PHP_INT_MAX + 2));
