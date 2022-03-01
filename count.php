<!-- <?php

$count = 0;

function test()
{
    $count++;
    echo $count;
    if ($count < 10) {
        test();
    }
}

test(); -->
// 実際の実行結果 → Warning: Undefined variable $count
// 関数testでは、$countは未定義のためとのエラーが発生中。$countは未定義なのは、関数test内で変数をスコープしていないため。

<?php

$count = 0;

function test($count)
{
    $count++;
    echo $count;
    if ($count < 10) {
        test($count);
    }
}

test($count);
