<?php

$name = "Yuka";

if ($name == "Yuka"){
    echo"私はあなたの名前です";
}
else{
    echo"あなたの名前ではありません。";
}

$total =0;
for($i = 0; $i<=10000 ; $i++){
    $total +=$i;
    
}

echo $total;
echo"\n";

$fruits=array("apple","orange","lemon","banana","strawverry");

foreach($fruits as $fruit){
    echo $fruit;
    echo"\n";
}


$start = 1;
$end = 100;

for($i = $start; $i <=$end; $i++){

  if($i % 5 == 0){
    echo $i;
  }
}