<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function a($x){
    $result=1;
    $result=2*$x;
   return $result;
}

echo a(6);
echo "\n";

/*2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成して。
参考）引数は下記のように指定すると、複数の仮引数を使うことができます。*/

function f($a, $b){
    
    $result=0;
    $result+= $a+$b;
    return $result;
}

echo f(3, 5);  
echo "\n";
    

/*3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
その要素をすべてかけた結果を返す関数を作成してください。*/

function x($arr){
    
      $result=1;

foreach($arr as $a){
        
      
        $result*=$a;
        

    }
        return $result;
}

echo x(array(1,3,5,7,9));

/*4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array 
という関数を実装しようとしています。途中の部分を完成させてください。

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }
 */
 
  function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
  if($max_number < $a){
      $max_number = $a;
  }
      
  }
  return $max_number;
  
 }
echo max_array(array(1,60,3,99,3,40));
/* 5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

strip_tags
array_push
array_merge
time, mktime
date
*/

