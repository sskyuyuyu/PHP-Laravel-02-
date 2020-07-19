<?php
//1～10　までを足した値を返す関数
function sum1(){
    
    // $result は結果を保持する変数
    $result = 0;
    
    // $1 は 1 からはじまり $max より大きくなるまでループする
    for($i = 1; $i <= 10; $i++){
        
    // $result に $1 を順番に足していく
    $result += $i;
    }
    
    // $result を結果として返す
    return $result;
}

//関数を実行する
echo sum1();
// 55 と表示
?>

<?php
// 1~$max までを足して返す関数
function sum2($max) {
    $result = 0;
    
    //$1 は1から始まり、$max より大きくなるまでループする
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}

// 関数を実行
echo sum2(100);
//5050 と表示
?>

<?php
//1から100までを順番に表示する関数
function print_number(){
    
    for($i = 0; $i <100; $i++){
        
        echo $i;
    }
}
?>

<?php
//引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function bai2($bai){
    $result = $bai*2;
    echo $result;
}
 bai2(5);
?>

//aとb を仮引数に持ち、　a と b　を足した結果を返す関数を作成してください

<?php
function fplus($a,$b){{
    $result = $a+$b;
}
   return $result; }
   
   echo fplus(4,5);
?>
 
 //$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) 
 を渡すとその要素をすべてかけた結果を返す関数を作成してください。  
 
 <?php
 function kakeru($arr) {
      $result = 1;
      foreach($arr as $ar){
          $result *= $ar;
      }
      echo $result;
 }
      echo kakeru(array(1,3,5,7,9));
 echo "\n";
 ?>
 <?php
function max_array($arr) {
 $max_number = $arr[0];
 foreach((array)$arr as $a){
 if ($a>$max_number){$max_number= $a;}
 }

 return $max_number;
 }
 
echo max_array(array(5,7,2,1,99,98));
?>

<?php
//strip_tags
$str ="<h1>strip_tags_課題</h1>"
     . "<p>取り除かれた！</p>";
echo strip_tags($str);
?>
<?php 
//array_push
$stack = array("baseball","bascketball");
array_push($stack,"tennis","soccer");
print_r($stack);
?>
<?php
//array_merge
$array1 = [1,2,3];
$array2 = [11,12,13];
$array3 = [21,22,23];
$array = array_merge($array1,$array2,$array3);
print_r($array);
?>

//time
<?php
$nextweek = time()+(7 * 24 * 60 * 60);
 echo 'now:    '. date('Y-m-d') ."\n";
 echo  'nextweek: '. date('Y-m-d', $nextweek) ."\n";
 ?>
 //mktime
 <?php
$lastday = mktime(0, 0, 0, 3, 0, 2000);
echo strftime("Last day in Feb 2000 is: %d", $lastday);
$lastday = mktime(0, 0, 0, 4, -31, 2000);
echo strftime("Last day in Feb 2000 is: %d", $lastday);
?>
//date
<?php
 date_default_timezone_set('UTC');
 
 echo date("Y/m/d H:i:s");
?>






