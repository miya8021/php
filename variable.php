<?php

// # ずっと繰り返し処理される
// $i = 0;
// function call()
// {
//   # プログラム全体で$iを設定している
//   global $i;
//   $i = 0;
// }

// while ($i <= 5) {
//   call();
//   echo '呼び出し：' .$i .'回目' .PHP_EOL;
//   $i++;
// }

# ずっと繰り返し処理される
$i = 0;
function call()
{
  # 関数の中のみ有効
  $i = 0;
}

while ($i < 5) {
  call();
  $i++;
  echo '呼び出し：' .$i .'回目' .PHP_EOL;
}

?>
