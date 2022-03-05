<?php

$str1 = 'abcde';
$str2 = 'アイウエオ';
echo strlen($str1) . PHP_EOL;
# 5
echo strlen($str2) . PHP_EOL;
# 15 ※全角の文字列は、1文字3マルチバイトとしてカウントされるため
echo mb_strlen($str2) . PHP_EOL;
# mb_strlenは文字列の長さを得る

# 半角と全角は区別される(bool(false)になる)
var_dump('1' === '１');

# bool(true)になる
var_dump(mb_convert_kana('1', 'Kas') === mb_convert_kana('１', 'Kas'));
