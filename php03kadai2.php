<?php
$name = "佐々木";
/* if文で $name があなたの名前だったら 「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」と表示するように実装してください。*/
if ($name == "佐々木") {
  echo "私は佐々木です。";
}
else {
  echo "佐々木ではありません。" ."\n";
}

// for文を使って、1から10000までの合計の値を表示してください。
$total = 0; 
echo $total;

for($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total . "\n" ;

//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。

$fruits = array("banana","apple","peach","orange","pine");

echo count($fruits);

foreach($fruits as $fruit){
  echo "好きなフルーツは" . $fruit;
  echo "\n";
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++)

 // 5で割り切れたら{}内を実行する
  if($i % 5 == 0) {
  echo $i;
  }
  ?>
  