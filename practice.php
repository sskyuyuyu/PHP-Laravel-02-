<?php
echo 'hello php!';
echo $a = 3;
echo $b = 7;
echo $a + $b;
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7]."\n";
echo $hello = "Hello";
echo $name = "sasaki";
echo $world = "s World!";
echo $hello . $name . $world."\n";
echo $tech_boost = 'tech';
echo $tech_boost .= ' boost'."\n";
echo $tech_boost;


$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"]."\n";

echo $name = "佐々木" ."\n";
/* if文で $name があなたの名前だったら 「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」と表示するように実装してください。*/
if ($name = "佐々木") {
  echo "私は　佐々木　です。";
}else {
  echo "　佐々木　ではありません。" ."\n";
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

for($i = $start; $i < $end; $i++)

 // 5で割り切れたら{}内を実行する
  if($i % 5 == 0) {
  echo $i;
  }
  
  










