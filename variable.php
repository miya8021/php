<?php

$i = 0;
function call()
{
  # プログラム全体で$iを設定している
  global $i;
  $i = 0;
}

while ($i <= 5) {
  call();
  echo '呼び出し：' .$i .'回目' .PHP_EOL;
  $i++;
}

?>
